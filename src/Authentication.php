<?php declare(strict_types=1);

namespace SellingPartnerApi;

use DateInterval;
use DateTime;
use DateTimeZone;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Utils as GuzzleUtils;
use Psr\Http\Message\RequestInterface;
use RuntimeException;
use SellingPartnerApi\Api\TokensV20210301Api as TokensApi;
use SellingPartnerApi\Contract\RequestSignerContract;
use SellingPartnerApi\Model\TokensV20210301 as Tokens;

class Authentication implements RequestSignerContract
{
    private $lwaClientId;
    private $lwaClientSecret;
    private $lwaRefreshToken = null;
    private $lwaAuthUrl = null;
    private $endpoint;

    private $signingScope = null;

    /** @var \GuzzleHttp\ClientInterface */
    private $client = null;

    /** @var \SellingPartnerApi\Api\TokensV20210301Api */
    private $tokensApi = null;

    /**
     * Authentication constructor.
     * @param array $configurationOptions
     * @throws RuntimeException
     */
    public function __construct(array $configurationOptions)
    {
        $this->client = $configurationOptions['authenticationClient'] ?? new Client();

        $this->lwaAuthUrl = $configurationOptions['lwaAuthUrl'] ?? "https://api.amazon.com/auth/o2/token";
        $this->lwaRefreshToken = $configurationOptions['lwaRefreshToken'] ?? null;
        $this->onUpdateCreds = $configurationOptions['onUpdateCredentials'] ?? null;
        $this->lwaClientId = $configurationOptions['lwaClientId'];
        $this->lwaClientSecret = $configurationOptions['lwaClientSecret'];
        $this->endpoint = $configurationOptions['endpoint'];

        $accessToken = $configurationOptions['accessToken'] ?? null;
        $accessTokenExpiration = $configurationOptions['accessTokenExpiration'] ?? null;

        if ($accessToken !== null && $accessTokenExpiration !== null) {
            $this->populateCredentials($this->awsAccessKeyId, $this->awsSecretAccessKey, $accessToken, $accessTokenExpiration);
        }

        $this->tokensApi = $configurationOptions['tokensApi'] ?? null;

        $this->authorizationSigner = $configurationOptions['authorizationSigner'] ?? new AuthorizationSigner($this->endpoint);
    }

    /**
     * Signs the given request using Amazon Signature V4.
     *
     * @param \Psr\Http\Message\RequestInterface $request The request to sign
     * @param ?string $scope If the request is to a grantless operation endpoint, the scope for the grantless token
     * @param ?string $restrictedPath The absolute (generic) path for the endpoint that the request is using if it's an endpoint that requires
     *      a restricted data token
     * @return \Psr\Http\Message\RequestInterface The signed request
     */
    public function signRequest(
        RequestInterface $request,
        ?string $scope = null,
        ?string $restrictedPath = null,
        ?string $operation = null
    ): RequestInterface {
        // This allows us to know if we're signing a grantless operation without passing $scope all over the place
        $this->signingScope = $scope;

        // Check if the relevant AWS creds haven't been fetched or are expiring soon
        $relevantCreds = null;
        $params = [];

        parse_str($request->getUri()->getQuery(), $params);
        $dataElements = [];
        if (isset($params['dataElements'])) {
            $dataElements = explode(',', $params['dataElements']);
        }

        $hasDataElements = ['getOrders', 'getOrder', 'getOrderItems'];
        if (
            !$this->signingScope && (
                // This makes it possible to call restricted operations that take dataElements *without*
                // generating an RDT as long as no dataElements are passed.
                $restrictedPath === null || ($dataElements === [] && in_array($operation, $hasDataElements, true))
            )
        ) {
            $relevantCreds = $this->getAwsCredentials();
        } else if ($this->signingScope) {  // There is no overlap between grantless and restricted operations
            $relevantCreds = $this->getGrantlessAwsCredentials($scope);
        } else if ($restrictedPath !== null) {
            $needRdt = true;

            // Not all getReportDocument calls need an RDT
            if ($operation === 'getReportDocument') {
                // We added a reportType query parameter that isn't in the official models, so that we can
                // determine if the getReportDocument call requires an RDT
                $constantPath = isset($params['reportType']) ? 'SellingPartnerApi\ReportType::' . $params['reportType'] : null;

                if ($constantPath === null || !defined($constantPath) || !constant($constantPath)['restricted']) {
                    $needRdt = false;
                    $relevantCreds = $this->getAwsCredentials();
                }

                // Remove the extra 'reportType' query parameter
                $newUri = Psr7\Uri::withoutQueryValue($request->getUri(), 'reportType');
                $request = $request->withUri($newUri);
            } else if (isset($params['dataElements'])) {
                // Remove the extra 'dataElements' query parameter
                $newUri = Psr7\Uri::withoutQueryValue($request->getUri(), 'dataElements');
                $request = $request->withUri($newUri);
            }

            // Sandbox requests don't require RDTs
            if ($needRdt && !Endpoint::isSandbox($request->getUri()->getHost())) {
                $relevantCreds = $this->getRestrictedDataToken($restrictedPath, $request->getMethod(), $dataElements);
            }
        }

        $accessToken = $relevantCreds->getSecurityToken();
        $signedRequest = $this->authorizationSigner->sign($request, $relevantCreds)
            ->withHeader('x-amz-access-token', $accessToken);

        $this->signingScope = null;
        return $signedRequest;
    }

    /**
     * Get a restricted data token for the operation corresponding to $path and $method.
     *
     * @param string $path The generic or specific path for the restricted operation
     * @param string $method The HTTP method of the restricted operation
     * @param ?array $dataElements The restricted data elements to request access to, if any.
     *      Only applies to getOrder, getOrders, and getOrderItems. Default empty array.
     * @return \SellingPartnerApi\Credentials A Credentials object holding the RDT
     */
    public function getRestrictedDataToken(string $path, string $method, ?array $dataElements = []): Credentials
    {
        $standardCredentials = $this->getAwsCredentials();
        $tokensApi = $this->tokensApi;
        if (is_null($tokensApi)) {
            $config = new Configuration([
                "lwaClientId" => $this->lwaClientId,
                "lwaClientSecret" => $this->lwaClientSecret,
                "lwaRefreshToken" => $this->lwaRefreshToken,
                "lwaAuthUrl" => $this->lwaAuthUrl,
                "accessToken" => $standardCredentials->getSecurityToken(),
                "accessTokenExpiration" => $standardCredentials->getExpiration(),
                "endpoint" => $this->endpoint,
            ]);
            $tokensApi = new TokensApi($config);
        }

        $restrictedResource = new Tokens\RestrictedResource([
            "method" => $method,
            "path" => $path,
        ]);
        if ($dataElements !== []) {
            $restrictedResource->setDataElements($dataElements);
        }

        $body = new Tokens\CreateRestrictedDataTokenRequest([
            "restricted_resources" => [$restrictedResource],
        ]);

        try {
            $rdtData = $tokensApi->createRestrictedDataToken($body);
        } catch (ApiException $e) {
            throw new RuntimeException("Failed to create restricted data token: {$e->getMessage()}", $e->getCode());
        }

        $rdtCreds = new Credentials(
            $this->awsAccessKeyId,
            $this->awsSecretAccessKey,
            $rdtData->getRestrictedDataToken(),
            time() + intval($rdtData->getExpiresIn())
        );

        return $rdtCreds;
    }
}

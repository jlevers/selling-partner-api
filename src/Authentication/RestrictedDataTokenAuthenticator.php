<?php

declare(strict_types=1);

namespace SellingPartnerApi\Authentication;

use DateTime;
use Illuminate\Support\Arr;
use Saloon\Exceptions\Request\RequestException;
use SellingPartnerApi\Seller\TokensV20210301\Dto\CreateRestrictedDataTokenRequest;
use SellingPartnerApi\Seller\TokensV20210301\Dto\RestrictedResource;
use SellingPartnerApi\SellingPartnerApi;

class RestrictedDataTokenAuthenticator extends AbstractAuthenticator
{
    /**
     * A map of LWA client IDs to maps of per-path restricted data tokens.
     * Used to cache RDTs for multiple clients in a single spot.
     *
     * @var array[string => [string => AccessToken]]
     */
    protected static array $tokens = [];

    public function __construct(
        protected SellingPartnerApi $connector,
        protected string $path,
        protected string $method,
        protected ?array $dataElements,
    ) {
    }

    protected function getAccessToken(): ?string
    {
        $clientId = $this->connector->clientId;
        $token = Arr::get(
            static::$tokens,
            "{$clientId}.{$this->path}.{$this->method}"
        );

        if (! $token || $token->expired()) {
            try {
                $tokensApi = $this->connector->seller()->tokensV20210301();
            } catch (RequestException $e) {
                throw new RequestException(
                    $e->getResponse(),
                    "Failed to create restricted data token: {$e->getMessage()}",
                    $e->getCode(),
                    $e->getPrevious()
                );
            }

            $response = $tokensApi->createRestrictedDataToken(
                new CreateRestrictedDataTokenRequest(
                    [
                        new RestrictedResource(
                            strtoupper($this->method),
                            $this->path,
                            $this->dataElements ?: null,
                        ),
                    ],
                    $this->connector->delegatee
                )
            )->dto();

            $token = static::$tokens[$clientId][$this->path][$this->method] = new AccessToken(
                $response->restrictedDataToken,
                new DateTime("+{$response->expiresIn} seconds"),
            );
        }

        return $token->token;
    }
}

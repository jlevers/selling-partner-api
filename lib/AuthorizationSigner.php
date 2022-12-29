<?php

namespace SellingPartnerApi;

use GuzzleHttp\Psr7\Request;
use SellingPartnerApi\Contract\AuthorizationSignerContract;

class AuthorizationSigner implements AuthorizationSignerContract
{
    public const DATETIME_FMT = 'Ymd\THis\Z';
    private const DATE_FMT = 'Ymd';

    private const SIGNING_ALGO = 'AWS4-HMAC-SHA256';
    private const SERVICE_NAME = 'execute-api';
    private const TERMINATION_STR = 'aws4_request';

    /**
     * @see \SellingPartnerApi\Endpoint
     * @var array
     */
    private $endpoint;

    /**
     * @var \DateTime
     */
    private $requestTime;

    public function __construct(array $endpoint)
    {
        $this->endpoint = $endpoint;
    }

    public function sign(Request $request, Credentials $credentials): Request
    {
        $canonicalRequest = $this->createCanonicalRequest($request);
        $signingString = $this->createSigningString($canonicalRequest);
        $signature = $this->createSignature($signingString, $credentials->getSecretKey());

        [, $signedHeaders] = $this->createCanonicalizedHeaders($request->getHeaders());
        $credentialScope = $this->createCredentialScope();
        $credsForHeader = "Credential={$credentials->getAccessKeyId()}/{$credentialScope}";
        $headersForHeader = "SignedHeaders={$signedHeaders}";
        $sigForHeader = "Signature={$signature}";
        $authHeaderVal = static::SIGNING_ALGO . ' ' . implode(', ', [$credsForHeader, $headersForHeader, $sigForHeader]);

        return $request
            ->withHeader('Authorization', $authHeaderVal)
            ->withHeader('x-amz-date', $this->formattedRequestTime());
    }

    private function createCanonicalizedHeaders(array $headers): array
    {
        // Convert all header names to lowercase
        foreach ($headers as $key => $values) {
            $headers[strtolower($key)] = $values;
            unset($headers[$key]);
        }

        // Sort headers by name, ascending
        ksort($headers, SORT_STRING);

        $canonicalizedHeaders = '';
        $canonicalizedHeaderNames = '';
        foreach ($headers as $key => $values) {
            $parsedValues = array_map(function ($val) {
                $trimmed = trim($val);
                $reduced = preg_replace('/(\s+)/', ' ', $trimmed);

                return $reduced;
            }, $values);

            $valuesStr = implode(',', $parsedValues);
            $canonicalizedHeaders .= "{$key}:{$valuesStr}\n";
            $canonicalizedHeaderNames .= "{$key};";
        }

        return [
            $canonicalizedHeaders,
            substr($canonicalizedHeaderNames, 0, -1)  // Remove trailing ";"
        ];
    }

    private function createCanonicalizedPath(string $path): string
    {
        // Remove leading slash
        $trimmed = ltrim($path, '/');
        // URL encode an already URL-encoded path
        $doubleEncoded = rawurlencode($trimmed);

        // Add a leading slash, and convert all encoded slashes back to normal slashes
        return '/' . str_replace('%2F', '/', $doubleEncoded);
    }

    private function createCanonicalizedQuery(string $query): string
    {
        if (strlen($query) === 0) {
            return '';
        }

        // Parse query string
        $params = explode('&', $query);
        $paramsMap = [];
        foreach ($params as $param) {
            [$key, $value] = explode('=', $param);

            if ($value === null) {
                $paramsMap[$key] = '';
            } else {
                if (array_key_exists($key, $paramsMap)) {
                    // If there are multiple values for a parameter, make its value an array
                    if (is_array($paramsMap[$key])) {
                        $paramsMap[$key] = [$paramsMap[$key]];
                    }
                    $paramsMap[$key][] = $value;
                } else {
                    $paramsMap[$key] = $value;
                }
            }
        }

        // Sort param map by key name, ascending
        ksort($paramsMap, SORT_STRING);
        // Sort params with multiple values by value, ascending
        foreach ($paramsMap as $param) {
            if (is_array($param)) {
                sort($param, SORT_STRING);
            }
        }

        // Generate list of query params
        $sorted = [];
        foreach ($paramsMap as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $paramVal) {
                    $sorted[] = "{$key}={$paramVal}";
                }
            } else {
                $sorted[] = "{$key}={$value}";
            }
        }

        $canonicalized = implode('&', $sorted);

        return $canonicalized;
    }

    private function createCanonicalRequest(Request $request): string
    {
        $method = $request->getMethod();
        $uri = $request->getUri();
        $path = $this->createCanonicalizedPath($uri->getPath());
        $query = $this->createCanonicalizedQuery($uri->getQuery());
        [$headers, $headerNames] = $this->createCanonicalizedHeaders($request->getHeaders());
        $hashedPayload = hash('sha256', $request->getBody());

        $canonicalRequest = "{$method}\n{$path}\n{$query}\n{$headers}\n{$headerNames}\n{$hashedPayload}";

        return $canonicalRequest;
    }

    private function createSigningString(string $canonicalRequest): string
    {
        $credentialScope = $this->createCredentialScope();
        $canonHashed = hash('sha256', $canonicalRequest);

        return static::SIGNING_ALGO . "\n{$this->formattedRequestTime()}\n{$credentialScope}\n{$canonHashed}";
    }

    private function createCredentialScope(): string
    {
        $terminator = static::TERMINATION_STR;

        return "{$this->formattedRequestTime(false)}/{$this->endpoint['region']}/" . static::SERVICE_NAME . "/{$terminator}";
    }

    private function createSignature(string $signingString, string $secretKey): string
    {
        $kDate = hash_hmac('sha256', $this->formattedRequestTime(false), "AWS4{$secretKey}", true);
        $kRegion = hash_hmac('sha256', $this->endpoint['region'], $kDate, true);
        $kService = hash_hmac('sha256', self::SERVICE_NAME, $kRegion, true);
        $kSigning = hash_hmac('sha256', static::TERMINATION_STR, $kService, true);

        return hash_hmac('sha256', $signingString, $kSigning);
    }

    public function setRequestTime(?\DateTime $datetime = null): void
    {
        $this->requestTime = $datetime ?? new \DateTime('now', new \DateTimeZone('UTC'));
    }

    /**
     * @param bool|null $withTime
     *
     * @return string|null
     */
    public function formattedRequestTime(?bool $withTime = true): ?string
    {
        $fmt = $withTime ? static::DATETIME_FMT : static::DATE_FMT;

        return $this->requestTime->format($fmt);
    }
}
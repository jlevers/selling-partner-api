<?php


namespace SellingPartnerApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SellingPartnerApi\ApiException;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\HeaderSelector;
use SellingPartnerApi\ObjectSerializer;

class CatalogItemApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param Configuration   $config
     * @param ClientInterface $client
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        Configuration $config = null,
        ClientInterface $client = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector($this->config);
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */

    public function getConfig()
    {
        return $this->config;
    }
    /**
     * Operation getCatalogItem
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param  string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApi\Model\Catalog\Item
     */
    public function getCatalogItem($asin, $marketplace_ids, $included_data = null, $locale = null)
    {
        list($response) = $this->getCatalogItemWithHttpInfo($asin, $marketplace_ids, $included_data, $locale);
        return $response;
    }


    /**
     * Operation getCatalogItemWithHttpInfo
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param  string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApi\Model\Catalog\Item, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCatalogItemWithHttpInfo($asin, $marketplace_ids, $included_data = null, $locale = null)
    {
        $request = $this->getCatalogItemRequest($asin, $marketplace_ids, $included_data, $locale);
        $signedRequest = $this->config->signRequest(
            $request
        );

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getResponse()->getBody()->getContents()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\SellingPartnerApi\Model\Catalog\Item' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\Item', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 413:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 415:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SellingPartnerApi\Model\Catalog\Item';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\Item',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCatalogItemAsync
     *
     *
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param  string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCatalogItemAsync($asin, $marketplace_ids, $included_data = null, $locale = null)
    {
        return $this->getCatalogItemAsyncWithHttpInfo($asin, $marketplace_ids, $included_data, $locale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCatalogItemAsyncWithHttpInfo
     *
     *
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param  string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCatalogItemAsyncWithHttpInfo($asin, $marketplace_ids, $included_data = null, $locale = null)
    {
        $returnType = '\SellingPartnerApi\Model\Catalog\Item';
        $request = $this->getCatalogItemRequest($asin, $marketplace_ids, $included_data, $locale);
        $signedRequest = $this->config->signRequest(
            $request
        );

        return $this->client
            ->sendAsync($signedRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()->getContents()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCatalogItem'
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param  string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCatalogItemRequest($asin, $marketplace_ids, $included_data = null, $locale = null)
    {
        // verify the required parameter 'asin' is set
        if ($asin === null || (is_array($asin) && count($asin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $asin when calling getCatalogItem'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (is_array($marketplace_ids) && count($marketplace_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getCatalogItem'
            );
        }

        $resourcePath = '/catalog/2020-12-01/items/{asin}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }
        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        }
        // query params
        if (is_array($included_data)) {
            $included_data = ObjectSerializer::serializeCollection($included_data, 'form', true);
        }
        if ($included_data !== null) {
            $queryParams['includedData'] = $included_data;
        }
        // query params
        if (is_array($locale)) {
            $locale = ObjectSerializer::serializeCollection($locale, '', true);
        }
        if ($locale !== null) {
            $queryParams['locale'] = $locale;
        }


        // path params
        if ($asin !== null) {
            $resourcePath = str_replace(
                '{' . 'asin' . '}',
                ObjectSerializer::toPathValue($asin),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation searchCatalogItems
     *
     * @param  string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string[] $brand_names A comma-delimited list of brand names to limit the search to. (optional)
     * @param  string[] $classification_ids A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param  int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param  string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param  string $keywords_locale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApi\Model\Catalog\ItemSearchResults
     */
    public function searchCatalogItems($keywords, $marketplace_ids, $included_data = null, $brand_names = null, $classification_ids = null, $page_size = 10, $page_token = null, $keywords_locale = null, $locale = null)
    {
        list($response) = $this->searchCatalogItemsWithHttpInfo($keywords, $marketplace_ids, $included_data, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale, $locale);
        return $response;
    }

    /**
     * Operation searchCatalogItemsWithHttpInfo
     *
     * @param  string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string[] $brand_names A comma-delimited list of brand names to limit the search to. (optional)
     * @param  string[] $classification_ids A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param  int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param  string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param  string $keywords_locale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApi\Model\Catalog\ItemSearchResults, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchCatalogItemsWithHttpInfo($keywords, $marketplace_ids, $included_data = null, $brand_names = null, $classification_ids = null, $page_size = 10, $page_token = null, $keywords_locale = null, $locale = null)
    {
        $request = $this->searchCatalogItemsRequest($keywords, $marketplace_ids, $included_data, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale, $locale);
        $signedRequest = $this->config->signRequest(
            $request
        );

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getResponse()->getBody()->getContents()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\SellingPartnerApi\Model\Catalog\ItemSearchResults' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ItemSearchResults', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 413:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 415:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\SellingPartnerApi\Model\Catalog\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Catalog\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SellingPartnerApi\Model\Catalog\ItemSearchResults';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ItemSearchResults',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Catalog\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchCatalogItemsAsync
     *
     *
     *
     * @param  string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string[] $brand_names A comma-delimited list of brand names to limit the search to. (optional)
     * @param  string[] $classification_ids A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param  int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param  string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param  string $keywords_locale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCatalogItemsAsync($keywords, $marketplace_ids, $included_data = null, $brand_names = null, $classification_ids = null, $page_size = 10, $page_token = null, $keywords_locale = null, $locale = null)
    {
        return $this->searchCatalogItemsAsyncWithHttpInfo($keywords, $marketplace_ids, $included_data, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale, $locale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchCatalogItemsAsyncWithHttpInfo
     *
     *
     *
     * @param  string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string[] $brand_names A comma-delimited list of brand names to limit the search to. (optional)
     * @param  string[] $classification_ids A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param  int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param  string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param  string $keywords_locale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCatalogItemsAsyncWithHttpInfo($keywords, $marketplace_ids, $included_data = null, $brand_names = null, $classification_ids = null, $page_size = 10, $page_token = null, $keywords_locale = null, $locale = null)
    {
        $returnType = '\SellingPartnerApi\Model\Catalog\ItemSearchResults';
        $request = $this->searchCatalogItemsRequest($keywords, $marketplace_ids, $included_data, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale, $locale);
        $signedRequest = $this->config->signRequest(
            $request
        );

        return $this->client
            ->sendAsync($signedRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()->getContents()
                    );
                }
            );
    }

    /**
     * Create request for operation 'searchCatalogItems'
     *
     * @param  string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param  string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param  string[] $brand_names A comma-delimited list of brand names to limit the search to. (optional)
     * @param  string[] $classification_ids A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param  int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param  string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param  string $keywords_locale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param  string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchCatalogItemsRequest($keywords, $marketplace_ids, $included_data = null, $brand_names = null, $classification_ids = null, $page_size = 10, $page_token = null, $keywords_locale = null, $locale = null)
    {
        // verify the required parameter 'keywords' is set
        if ($keywords === null || (is_array($keywords) && count($keywords) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $keywords when calling searchCatalogItems'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (is_array($marketplace_ids) && count($marketplace_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling searchCatalogItems'
            );
        }

        if (count($marketplace_ids) > 1) {
            throw new \InvalidArgumentException('invalid value for "$marketplace_ids" when calling CatalogApi.searchCatalogItems, number of items must be less than or equal to 1.');
        }

        if ($page_size !== null && $page_size > 20) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling CatalogApi.searchCatalogItems, must be smaller than or equal to 20.');
        }


        $resourcePath = '/catalog/2020-12-01/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($keywords)) {
            $keywords = ObjectSerializer::serializeCollection($keywords, 'form', true);
        }
        if ($keywords !== null) {
            $queryParams['keywords'] = $keywords;
        }
        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }
        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        }
        // query params
        if (is_array($included_data)) {
            $included_data = ObjectSerializer::serializeCollection($included_data, 'form', true);
        }
        if ($included_data !== null) {
            $queryParams['includedData'] = $included_data;
        }
        // query params
        if (is_array($brand_names)) {
            $brand_names = ObjectSerializer::serializeCollection($brand_names, 'form', true);
        }
        if ($brand_names !== null) {
            $queryParams['brandNames'] = $brand_names;
        }
        // query params
        if (is_array($classification_ids)) {
            $classification_ids = ObjectSerializer::serializeCollection($classification_ids, 'form', true);
        }
        if ($classification_ids !== null) {
            $queryParams['classificationIds'] = $classification_ids;
        }
        // query params
        if (is_array($page_size)) {
            $page_size = ObjectSerializer::serializeCollection($page_size, '', true);
        }
        if ($page_size !== null) {
            $queryParams['pageSize'] = $page_size;
        }
        // query params
        if (is_array($page_token)) {
            $page_token = ObjectSerializer::serializeCollection($page_token, '', true);
        }
        if ($page_token !== null) {
            $queryParams['pageToken'] = $page_token;
        }
        // query params
        if (is_array($keywords_locale)) {
            $keywords_locale = ObjectSerializer::serializeCollection($keywords_locale, '', true);
        }
        if ($keywords_locale !== null) {
            $queryParams['keywordsLocale'] = $keywords_locale;
        }
        // query params
        if (is_array($locale)) {
            $locale = ObjectSerializer::serializeCollection($locale, '', true);
        }
        if ($locale !== null) {
            $queryParams['locale'] = $locale;
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        //var_dump($this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''));
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

}
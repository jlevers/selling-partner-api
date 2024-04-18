<?php

namespace SellingPartnerApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\HeaderSelector;

abstract class BaseApi
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
     * @param Configuration   $config
     * @param ClientInterface $client
     * @param HeaderSelector  $selector
     */
    public function __construct(
        Configuration $config,
        ClientInterface $client = null,
        HeaderSelector $selector = null
    ) {
        $this->config = $config;
        $this->client = $client ?: new Client();
        $this->headerSelector = $selector ?: new HeaderSelector($this->config);
    }

    /**
     * @return SellingPartnerApi\Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param SellingPartnerApi\Configuration $config
     * @return $this
     */
    public function setConfig(Configuration $config)
    {
        $this->config = $config;
        $this->headerSelector = new HeaderSelector($config);
        return $this;
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

    /**
     * Writes to the debug log file
     *
     * @param any $data
     * @return void
     */
    protected function writeDebug($data)
    {
        if ($this->config->getDebug()) {
            file_put_contents(
                $this->config->getDebugFile(),
                '[' . date('Y-m-d H:i:s') . ']: ' . print_r($data, true) . "\n",
                FILE_APPEND
            );
        }
    }
}

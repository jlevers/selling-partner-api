<?php declare(strict_types=1);

namespace SellingPartnerApi\Traits;

trait HasResponseHeaders
{
    /**
     * Array of response headers returned by the API
     *
     * @var string[][]
     */
    protected array $headers = [];

    /**
     * Gets API response headers
     *
     * @return string[][]
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Sets API response headers
     *
     * @param array[string => string[]] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }
}

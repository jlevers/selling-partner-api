<?php

namespace SellingPartnerApi;

use InvalidArgumentException;

/***************************/
/** Region/endpoint pairs **/
/***************************/

class Endpoint
{
    // North America
    public const NA = [
        'url' => 'https://sellingpartnerapi-na.amazon.com',
        'region' => 'us-east-1',
    ];
    public const NA_SANDBOX = [
        'url' => 'https://sandbox.sellingpartnerapi-na.amazon.com',
        'region' => 'us-east-1',
    ];

    // Europe
    public const EU = [
        'url' => 'https://sellingpartnerapi-eu.amazon.com',
        'region' => 'eu-west-1',
    ];
    public const EU_SANDBOX = [
        'url' => 'https://sandbox.sellingpartnerapi-eu.amazon.com',
        'region' => 'eu-west-1',
    ];

    // Far East
    public const FE = [
        'url' => 'https://sellingpartnerapi-fe.amazon.com',
        'region' => 'us-west-2',
    ];
    public const FE_SANDBOX = [
        'url' => 'https://sandbox.sellingpartnerapi-fe.amazon.com',
        'region' => 'us-west-2',
    ];

    /**
     * Returns the endpoint for the marketplace with the given ID.
     *
     * @param string $marketplace_id The identifier for the marketplace. (required)
     * @param bool $sandbox Whether to return the sandbox endpoint for the region. (optional, default to false)
     *
     * @throws InvalidArgumentException
     * @return array of the endpoint details
     *
     *
     * @link https://docs.developer.amazonservices.com/en_US/dev_guide/DG_Endpoints.html
     */
    public static function getByMarketplaceId(string $marketplace_id, bool $sandbox = false)
    {
        $map = [
            // North America.
            // Brazil.
            'A2Q3Y263D00KWC' => 'NA',
            // Canada
            'A2EUQ1WTGCTBG2' => 'NA',
            // Mexico.
            'A1AM78C64UM0Y8' => 'NA',
            // US.
            'ATVPDKIKX0DER' => 'NA',
            // Europe.
            // United Arab Emirates (U.A.E.).
            'A2VIGQ35RCS4UG' => 'EU',
            // Belgium.
            'AMEN7PMS3EDWL' => 'EU',
            // Germany.
            'A1PA6795UKMFR9' => 'EU',
            // Egypt.
            'ARBP9OOSHTCHU' => 'EU',
            // Spain.
            'A1RKKUPIHCS9HS' => 'EU',
            // France.
            'A13V1IB3VIYZZH' => 'EU',
            // UK.
            'A1F83G8C2ARO7P' => 'EU',
            // India.
            'A21TJRUUN4KGV' => 'EU',
            // Italy.
            'APJ6JRA9NG5V4' => 'EU',
            // Netherlands.
            'A1805IZSGTT6HS' => 'EU',
            // Poland.
            'A1C3SOZRARQ6R3' => 'EU',
            // Saudi Arabia.
            'A17E79C6D8DWNP' => 'EU',
            // Sweden.
            'A2NODRKZP88ZB9' => 'EU',
            // Turkey.
            'A33AVAJ2PDY3EV' => 'EU',
            // Far East.
            // Singapore.
            'A19VAU5U5O7RUS' => 'FE',
            // Australia.
            'A39IBJ37TRP1C6' => 'FE',
            // Japan.
            'A1VC38T7YXB528' => 'FE',
        ];
        if (!isset($map[$marketplace_id])) {
            throw new InvalidArgumentException(sprintf(
                'Unknown marketplace ID "%s".',
                $marketplace_id
            ));
        }

        $region = $map[$marketplace_id];
        if ($sandbox) {
            $region .= '_SANDBOX';
        }

        return constant("\SellingPartnerApi\Endpoint::$region");
    }

    /**
     * Checks if the given endpoint is valid. If the given endpoint is an array, checks
     * the value of the `url` key. If it's a string, checks if it's a sandbox URL.
     *
     * @param array|string $endpoint The endpoint to check
     * @return bool
     */
    public static function isSandbox($endpoint)
    {
        $sandboxHosts = [
            self::NA_SANDBOX['url'],
            self::EU_SANDBOX['url'],
            self::FE_SANDBOX['url'],
        ];
        if (is_array($endpoint)) {
            return in_array($endpoint['url'], $sandboxHosts, true);
        } else if (is_string($endpoint)) {
            return in_array($endpoint, $sandboxHosts, true);
        } else {
            throw new InvalidArgumentException(
                'Invalid endpoint type ' . gettype($endpoint) . '. Must be array or string.'
            );
        }
    }
}

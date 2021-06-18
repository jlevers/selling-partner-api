<?php

namespace SellingPartnerApi;

/***************************/
/** Region/endpoint pairs **/
/***************************/

class Endpoint {
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
}

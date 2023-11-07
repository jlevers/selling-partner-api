<?php
/**
 * GetRatesResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV2;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * GetRatesResult Class Doc Comment
 *
 * @category Class
 * @description The payload for the getRates operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetRatesResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRatesResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request_token' => 'string',
        'rates' => '\SellingPartnerApi\Model\ShippingV2\Rate[]',
        'ineligible_rates' => '\SellingPartnerApi\Model\ShippingV2\IneligibleRate[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'request_token' => null,
        'rates' => null,
        'ineligible_rates' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'request_token' => 'requestToken',
        'rates' => 'rates',
        'ineligible_rates' => 'ineligibleRates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_token' => 'setRequestToken',
        'rates' => 'setRates',
        'ineligible_rates' => 'setIneligibleRates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_token' => 'getRequestToken',
        'rates' => 'getRates',
        'ineligible_rates' => 'getIneligibleRates'
    ];


    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['request_token'] = $data['request_token'] ?? null;
        $this->container['rates'] = $data['rates'] ?? null;
        $this->container['ineligible_rates'] = $data['ineligible_rates'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['request_token'] === null) {
            $invalidProperties[] = "'request_token' can't be null";
        }
        if ($this->container['rates'] === null) {
            $invalidProperties[] = "'rates' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets request_token
     *
     * @return string
     */
    public function getRequestToken()
    {
        return $this->container['request_token'];
    }

    /**
     * Sets request_token
     *
     * @param string $request_token A unique token generated to identify a getRates operation.
     *
     * @return self
     */
    public function setRequestToken($request_token)
    {
        $this->container['request_token'] = $request_token;

        return $this;
    }
    /**
     * Gets rates
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Rate[]
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Rate[] $rates A list of eligible shipping service offerings.
     *
     * @return self
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

        return $this;
    }
    /**
     * Gets ineligible_rates
     *
     * @return \SellingPartnerApi\Model\ShippingV2\IneligibleRate[]|null
     */
    public function getIneligibleRates()
    {
        return $this->container['ineligible_rates'];
    }

    /**
     * Sets ineligible_rates
     *
     * @param \SellingPartnerApi\Model\ShippingV2\IneligibleRate[]|null $ineligible_rates A list of ineligible shipping service offerings.
     *
     * @return self
     */
    public function setIneligibleRates($ineligible_rates)
    {
        $this->container['ineligible_rates'] = $ineligible_rates;

        return $this;
    }
}


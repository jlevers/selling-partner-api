<?php
/**
 * GetRatesRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.  **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * GetRatesRequest Class Doc Comment
 *
 * @category Class
 * @description The payload schema for the getRates operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetRatesRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRatesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ship_to' => '\SellingPartnerApi\Model\ShippingV1\Address',
        'ship_from' => '\SellingPartnerApi\Model\ShippingV1\Address',
        'service_types' => '\SellingPartnerApi\Model\ShippingV1\ServiceType[]',
        'ship_date' => 'string',
        'container_specifications' => '\SellingPartnerApi\Model\ShippingV1\ContainerSpecification[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ship_to' => null,
        'ship_from' => null,
        'service_types' => null,
        'ship_date' => null,
        'container_specifications' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ship_to' => 'shipTo',
        'ship_from' => 'shipFrom',
        'service_types' => 'serviceTypes',
        'ship_date' => 'shipDate',
        'container_specifications' => 'containerSpecifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'ship_to' => 'setShipTo',
        'ship_from' => 'setShipFrom',
        'service_types' => 'setServiceTypes',
        'ship_date' => 'setShipDate',
        'container_specifications' => 'setContainerSpecifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_to' => 'getShipTo',
        'ship_from' => 'getShipFrom',
        'service_types' => 'getServiceTypes',
        'ship_date' => 'getShipDate',
        'container_specifications' => 'getContainerSpecifications'
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
        $this->container['ship_to'] = $data['ship_to'] ?? null;
        $this->container['ship_from'] = $data['ship_from'] ?? null;
        $this->container['service_types'] = $data['service_types'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['container_specifications'] = $data['container_specifications'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ship_to'] === null) {
            $invalidProperties[] = "'ship_to' can't be null";
        }
        if ($this->container['ship_from'] === null) {
            $invalidProperties[] = "'ship_from' can't be null";
        }
        if ($this->container['service_types'] === null) {
            $invalidProperties[] = "'service_types' can't be null";
        }
        if ($this->container['container_specifications'] === null) {
            $invalidProperties[] = "'container_specifications' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets ship_to
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Address
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Address $ship_to ship_to
     *
     * @return self
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }
    /**
     * Gets ship_from
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Address
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Address $ship_from ship_from
     *
     * @return self
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }
    /**
     * Gets service_types
     *
     * @return \SellingPartnerApi\Model\ShippingV1\ServiceType[]
     */
    public function getServiceTypes()
    {
        return $this->container['service_types'];
    }

    /**
     * Sets service_types
     *
     * @param \SellingPartnerApi\Model\ShippingV1\ServiceType[] $service_types A list of service types that can be used to send the shipment.
     *
     * @return self
     */
    public function setServiceTypes($service_types)
    {
        $this->container['service_types'] = $service_types;

        return $this;
    }
    /**
     * Gets ship_date
     *
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param string|null $ship_date The start date and time. Must be in ISO 8601 format. This defaults to the current date and time.
     *
     * @return self
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }
    /**
     * Gets container_specifications
     *
     * @return \SellingPartnerApi\Model\ShippingV1\ContainerSpecification[]
     */
    public function getContainerSpecifications()
    {
        return $this->container['container_specifications'];
    }

    /**
     * Sets container_specifications
     *
     * @param \SellingPartnerApi\Model\ShippingV1\ContainerSpecification[] $container_specifications A list of container specifications.
     *
     * @return self
     */
    public function setContainerSpecifications($container_specifications)
    {
        $this->container['container_specifications'] = $container_specifications;

        return $this;
    }
}



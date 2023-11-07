<?php
/**
 * ItemDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Inventory Updates
 *
 * The Selling Partner API for Direct Fulfillment Inventory Updates provides programmatic access to a direct fulfillment vendor's inventory updates.
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

namespace SellingPartnerApi\Model\VendorDirectFulfillmentInventoryV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ItemDetails Class Doc Comment
 *
 * @category Class
 * @description Updated inventory details for an item.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buyer_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'available_quantity' => '\SellingPartnerApi\Model\VendorDirectFulfillmentInventoryV1\ItemQuantity',
        'is_obsolete' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'buyer_product_identifier' => null,
        'vendor_product_identifier' => null,
        'available_quantity' => null,
        'is_obsolete' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'buyer_product_identifier' => 'buyerProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'available_quantity' => 'availableQuantity',
        'is_obsolete' => 'isObsolete'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyer_product_identifier' => 'setBuyerProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'available_quantity' => 'setAvailableQuantity',
        'is_obsolete' => 'setIsObsolete'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyer_product_identifier' => 'getBuyerProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'available_quantity' => 'getAvailableQuantity',
        'is_obsolete' => 'getIsObsolete'
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
        $this->container['buyer_product_identifier'] = $data['buyer_product_identifier'] ?? null;
        $this->container['vendor_product_identifier'] = $data['vendor_product_identifier'] ?? null;
        $this->container['available_quantity'] = $data['available_quantity'] ?? null;
        $this->container['is_obsolete'] = $data['is_obsolete'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['available_quantity'] === null) {
            $invalidProperties[] = "'available_quantity' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets buyer_product_identifier
     *
     * @return string|null
     */
    public function getBuyerProductIdentifier()
    {
        return $this->container['buyer_product_identifier'];
    }

    /**
     * Sets buyer_product_identifier
     *
     * @param string|null $buyer_product_identifier The buyer selected product identification of the item. Either buyerProductIdentifier or vendorProductIdentifier should be submitted.
     *
     * @return self
     */
    public function setBuyerProductIdentifier($buyer_product_identifier)
    {
        $this->container['buyer_product_identifier'] = $buyer_product_identifier;

        return $this;
    }
    /**
     * Gets vendor_product_identifier
     *
     * @return string|null
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier
     *
     * @param string|null $vendor_product_identifier The vendor selected product identification of the item. Either buyerProductIdentifier or vendorProductIdentifier should be submitted.
     *
     * @return self
     */
    public function setVendorProductIdentifier($vendor_product_identifier)
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }
    /**
     * Gets available_quantity
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentInventoryV1\ItemQuantity
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentInventoryV1\ItemQuantity $available_quantity available_quantity
     *
     * @return self
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }
    /**
     * Gets is_obsolete
     *
     * @return bool|null
     */
    public function getIsObsolete()
    {
        return $this->container['is_obsolete'];
    }

    /**
     * Sets is_obsolete
     *
     * @param bool|null $is_obsolete When true, the item is permanently unavailable.
     *
     * @return self
     */
    public function setIsObsolete($is_obsolete)
    {
        $this->container['is_obsolete'] = $is_obsolete;

        return $this;
    }
}


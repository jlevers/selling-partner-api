<?php
/**
 * SellerSKUIdentifier
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ProductPricingV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * SellerSKUIdentifier Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SellerSKUIdentifier extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerSKUIdentifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplace_id' => 'string',
        'seller_id' => 'string',
        'seller_sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplace_id' => null,
        'seller_id' => null,
        'seller_sku' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'MarketplaceId',
        'seller_id' => 'SellerId',
        'seller_sku' => 'SellerSKU'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'marketplace_id' => 'setMarketplaceId',
        'seller_id' => 'setSellerId',
        'seller_sku' => 'setSellerSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'seller_id' => 'getSellerId',
        'seller_sku' => 'getSellerSku'
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['seller_id'] === null) {
            $invalidProperties[] = "'seller_id' can't be null";
        }
        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id A marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets seller_id
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string $seller_id The seller identifier submitted for the operation.
     *
     * @return self
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }
    /**
     * Gets seller_sku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string $seller_sku The seller stock keeping unit (SKU) of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }
}



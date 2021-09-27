<?php
/**
 * CompetitivePriceType
 *
 * PHP version 7.2
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

namespace SellingPartnerApi\Model\ProductPricing;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * CompetitivePriceType Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CompetitivePriceType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompetitivePriceType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'competitive_price_id' => 'string',
        'price' => '\SellingPartnerApi\Model\ProductPricing\PriceType',
        'condition' => 'string',
        'subcondition' => 'string',
        'offer_type' => '\SellingPartnerApi\Model\ProductPricing\OfferCustomerType',
        'quantity_tier' => 'int',
        'quantity_discount_type' => '\SellingPartnerApi\Model\ProductPricing\QuantityDiscountType',
        'seller_id' => 'string',
        'belongs_to_requester' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'competitive_price_id' => null,
        'price' => null,
        'condition' => null,
        'subcondition' => null,
        'offer_type' => null,
        'quantity_tier' => 'int32',
        'quantity_discount_type' => null,
        'seller_id' => null,
        'belongs_to_requester' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'competitive_price_id' => 'CompetitivePriceId',
        'price' => 'Price',
        'condition' => 'condition',
        'subcondition' => 'subcondition',
        'offer_type' => 'offerType',
        'quantity_tier' => 'quantityTier',
        'quantity_discount_type' => 'quantityDiscountType',
        'seller_id' => 'sellerId',
        'belongs_to_requester' => 'belongsToRequester'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'competitive_price_id' => 'setCompetitivePriceId',
        'price' => 'setPrice',
        'condition' => 'setCondition',
        'subcondition' => 'setSubcondition',
        'offer_type' => 'setOfferType',
        'quantity_tier' => 'setQuantityTier',
        'quantity_discount_type' => 'setQuantityDiscountType',
        'seller_id' => 'setSellerId',
        'belongs_to_requester' => 'setBelongsToRequester',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'competitive_price_id' => 'getCompetitivePriceId',
        'price' => 'getPrice',
        'condition' => 'getCondition',
        'subcondition' => 'getSubcondition',
        'offer_type' => 'getOfferType',
        'quantity_tier' => 'getQuantityTier',
        'quantity_discount_type' => 'getQuantityDiscountType',
        'seller_id' => 'getSellerId',
        'belongs_to_requester' => 'getBelongsToRequester',
        'headers' => 'getHeaders'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

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
        $this->container['competitive_price_id'] = $data['competitive_price_id'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['subcondition'] = $data['subcondition'] ?? null;
        $this->container['offer_type'] = $data['offer_type'] ?? null;
        $this->container['quantity_tier'] = $data['quantity_tier'] ?? null;
        $this->container['quantity_discount_type'] = $data['quantity_discount_type'] ?? null;
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['belongs_to_requester'] = $data['belongs_to_requester'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['competitive_price_id'] === null) {
            $invalidProperties[] = "'competitive_price_id' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets headers, if this is a top-level response model
     *
     * @return array[string]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers (only relevant to response models)
     *
     * @param array[string => string]|null $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }


    /**
     * Gets competitive_price_id
     *
     * @return string
     */
    public function getCompetitivePriceId()
    {
        return $this->container['competitive_price_id'];
    }

    /**
     * Sets competitive_price_id
     *
     * @param string $competitive_price_id The pricing model for each price that is returned. Possible values: * 1 - New Buy Box Price. * 2 - Used Buy Box Price.
     *
     * @return self
     */
    public function setCompetitivePriceId($competitive_price_id)
    {
        $this->container['competitive_price_id'] = $competitive_price_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \SellingPartnerApi\Model\ProductPricing\PriceType
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \SellingPartnerApi\Model\ProductPricing\PriceType $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition Indicates the condition of the item whose pricing information is returned. Possible values are: New, Used, Collectible, Refurbished, or Club.
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets subcondition
     *
     * @return string|null
     */
    public function getSubcondition()
    {
        return $this->container['subcondition'];
    }

    /**
     * Sets subcondition
     *
     * @param string|null $subcondition Indicates the subcondition of the item whose pricing information is returned. Possible values are: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @return self
     */
    public function setSubcondition($subcondition)
    {
        $this->container['subcondition'] = $subcondition;

        return $this;
    }

    /**
     * Gets offer_type
     *
     * @return \SellingPartnerApi\Model\ProductPricing\OfferCustomerType|null
     */
    public function getOfferType()
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type
     *
     * @param \SellingPartnerApi\Model\ProductPricing\OfferCustomerType|null $offer_type offer_type
     *
     * @return self
     */
    public function setOfferType($offer_type)
    {
        $this->container['offer_type'] = $offer_type;

        return $this;
    }

    /**
     * Gets quantity_tier
     *
     * @return int|null
     */
    public function getQuantityTier()
    {
        return $this->container['quantity_tier'];
    }

    /**
     * Sets quantity_tier
     *
     * @param int|null $quantity_tier Indicates at what quantity this price becomes active.
     *
     * @return self
     */
    public function setQuantityTier($quantity_tier)
    {
        $this->container['quantity_tier'] = $quantity_tier;

        return $this;
    }

    /**
     * Gets quantity_discount_type
     *
     * @return \SellingPartnerApi\Model\ProductPricing\QuantityDiscountType|null
     */
    public function getQuantityDiscountType()
    {
        return $this->container['quantity_discount_type'];
    }

    /**
     * Sets quantity_discount_type
     *
     * @param \SellingPartnerApi\Model\ProductPricing\QuantityDiscountType|null $quantity_discount_type quantity_discount_type
     *
     * @return self
     */
    public function setQuantityDiscountType($quantity_discount_type)
    {
        $this->container['quantity_discount_type'] = $quantity_discount_type;

        return $this;
    }

    /**
     * Gets seller_id
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string|null $seller_id The seller identifier for the offer.
     *
     * @return self
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets belongs_to_requester
     *
     * @return bool|null
     */
    public function getBelongsToRequester()
    {
        return $this->container['belongs_to_requester'];
    }

    /**
     * Sets belongs_to_requester
     *
     * @param bool|null $belongs_to_requester Indicates whether or not the pricing information is for an offer listing that belongs to the requester. The requester is the seller associated with the SellerId that was submitted with the request. Possible values are: true and false.
     *
     * @return self
     */
    public function setBelongsToRequester($belongs_to_requester)
    {
        $this->container['belongs_to_requester'] = $belongs_to_requester;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



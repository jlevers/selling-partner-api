<?php
/**
 * OfferProgramConfiguration
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery (automatic or manual) of any replenishable item at a frequency chosen by the customer.
 *
 * The version of the OpenAPI document: 2022-11-07
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ReplenishmentV20221107;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * OfferProgramConfiguration Class Doc Comment
 *
 * @category Class
 * @description The offer program configuration contains a set of program properties for an offer.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OfferProgramConfiguration extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferProgramConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'preferences' => '\SellingPartnerApi\Model\ReplenishmentV20221107\OfferProgramConfigurationPreferences',
        'promotions' => '\SellingPartnerApi\Model\ReplenishmentV20221107\OfferProgramConfigurationPromotions',
        'enrollment_method' => '\SellingPartnerApi\Model\ReplenishmentV20221107\EnrollmentMethod'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'preferences' => null,
        'promotions' => null,
        'enrollment_method' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'preferences' => 'preferences',
        'promotions' => 'promotions',
        'enrollment_method' => 'enrollmentMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preferences' => 'setPreferences',
        'promotions' => 'setPromotions',
        'enrollment_method' => 'setEnrollmentMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preferences' => 'getPreferences',
        'promotions' => 'getPromotions',
        'enrollment_method' => 'getEnrollmentMethod'
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
        $this->container['preferences'] = $data['preferences'] ?? null;
        $this->container['promotions'] = $data['promotions'] ?? null;
        $this->container['enrollment_method'] = $data['enrollment_method'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }


    /**
     * Gets preferences
     *
     * @return \SellingPartnerApi\Model\ReplenishmentV20221107\OfferProgramConfigurationPreferences|null
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param \SellingPartnerApi\Model\ReplenishmentV20221107\OfferProgramConfigurationPreferences|null $preferences preferences
     *
     * @return self
     */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;

        return $this;
    }
    /**
     * Gets promotions
     *
     * @return \SellingPartnerApi\Model\ReplenishmentV20221107\OfferProgramConfigurationPromotions|null
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \SellingPartnerApi\Model\ReplenishmentV20221107\OfferProgramConfigurationPromotions|null $promotions promotions
     *
     * @return self
     */
    public function setPromotions($promotions)
    {
        $this->container['promotions'] = $promotions;

        return $this;
    }
    /**
     * Gets enrollment_method
     *
     * @return \SellingPartnerApi\Model\ReplenishmentV20221107\EnrollmentMethod|null
     */
    public function getEnrollmentMethod()
    {
        return $this->container['enrollment_method'];
    }

    /**
     * Sets enrollment_method
     *
     * @param \SellingPartnerApi\Model\ReplenishmentV20221107\EnrollmentMethod|null $enrollment_method enrollment_method
     *
     * @return self
     */
    public function setEnrollmentMethod($enrollment_method)
    {
        $this->container['enrollment_method'] = $enrollment_method;

        return $this;
    }
}


<?php
/**
 * CarrierWillPickUpOption
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
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

namespace SellingPartnerApi\Model\MerchantFulfillmentV0;
use ArrayAccess;

use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * CarrierWillPickUpOption Class Doc Comment
 *
 * @category Class
 * @description Carrier will pick up option.
 * @package  SellingPartnerApi
 * @group 
 */
class CarrierWillPickUpOption
{
    public $value;

    /**
     * Possible values of this enum
     */
    const CARRIER_WILL_PICK_UP = 'CarrierWillPickUp';
    const SHIPPER_WILL_DROP_OFF = 'ShipperWillDropOff';
    const NO_PREFERENCE = 'NoPreference';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::CARRIER_WILL_PICK_UP,
            self::SHIPPER_WILL_DROP_OFF,
            self::NO_PREFERENCE,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'CarrierWillPickUpOption', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}



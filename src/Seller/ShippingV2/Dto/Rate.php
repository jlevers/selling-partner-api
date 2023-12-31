<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Rate extends BaseDto
{
    protected static array $complexArrayTypes = [
        'supportedDocumentSpecifications' => [SupportedDocumentSpecification::class],
        'availableValueAddedServiceGroups' => [AvailableValueAddedServiceGroup::class],
    ];

    /**
     * @param  bool  $requiresAdditionalInputs When true, indicates that additional inputs are required to purchase this shipment service. You must then call the getAdditionalInputs operation to return the JSON schema to use when providing the additional inputs to the purchaseShipment operation.
     * @param  string  $rateId An identifier for the rate (shipment offering) provided by a shipping service provider.
     * @param  string  $carrierId The carrier identifier for the offering, provided by the carrier.
     * @param  string  $carrierName The carrier name for the offering.
     * @param  string  $serviceId An identifier for the shipping service.
     * @param  string  $serviceName The name of the shipping service.
     * @param  Weight  $weight The weight in the units indicated.
     * @param  Currency  $currency The monetary value in the currency indicated, in ISO 4217 standard format.
     * @param  Promise  $promise The time windows promised for pickup and delivery events.
     * @param  SupportedDocumentSpecification[]  $supportedDocumentSpecifications A list of the document specifications supported for a shipment service offering.
     * @param  AvailableValueAddedServiceGroup[]  $availableValueAddedServiceGroups A list of value-added services available for a shipping service offering.
     */
    public function __construct(
        public readonly bool $requiresAdditionalInputs,
        public readonly ?string $rateId = null,
        public readonly ?string $carrierId = null,
        public readonly ?string $carrierName = null,
        public readonly ?string $serviceId = null,
        public readonly ?string $serviceName = null,
        public readonly ?Weight $weight = null,
        public readonly ?Currency $currency = null,
        public readonly ?Promise $promise = null,
        public readonly ?array $supportedDocumentSpecifications = null,
        public readonly ?array $availableValueAddedServiceGroups = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

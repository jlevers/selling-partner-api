<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PurchaseShipmentRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['requestedValueAddedServices' => [RequestedValueAddedService::class]];

    /**
     * @param  string  $requestToken  A unique token generated to identify a getRates operation.
     * @param  string  $rateId  An identifier for the rate (shipment offering) provided by a shipping service provider.
     * @param  RequestedDocumentSpecification  $requestedDocumentSpecification  The document specifications requested. For calls to the purchaseShipment operation, the shipment purchase fails if the specified document specifications are not among those returned in the response to the getRates operation.
     * @param  RequestedValueAddedService[]|null  $requestedValueAddedServices  The value-added services to be added to a shipping service purchase.
     * @param  ?array[]  $additionalInputs  The additional inputs required to purchase a shipping offering, in JSON format. The JSON provided here must adhere to the JSON schema that is returned in the response to the getAdditionalInputs operation.
     *
     * Additional inputs are only required when indicated by the requiresAdditionalInputs property in the response to the getRates operation.
     */
    public function __construct(
        public readonly string $requestToken,
        public readonly string $rateId,
        public readonly RequestedDocumentSpecification $requestedDocumentSpecification,
        public readonly ?array $requestedValueAddedServices = null,
        public readonly ?array $additionalInputs = null,
    ) {
    }
}

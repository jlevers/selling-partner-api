<?php

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetShipmentDocumentsResult;

final class GetShipmentDocumentsResponse extends BaseResponse
{
    /**
     * @param  ?GetShipmentDocumentsResult  $payload  The payload for the getShipmentDocuments operation.
     */
    public function __construct(
        public readonly ?GetShipmentDocumentsResult $payload = null,
    ) {
    }
}

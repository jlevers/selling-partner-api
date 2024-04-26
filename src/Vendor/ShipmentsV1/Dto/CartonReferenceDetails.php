<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class CartonReferenceDetails extends Dto
{
    /**
     * @param  ?int  $cartonCount  Pallet level carton count is mandatory for single item pallet and optional for mixed item pallet.
     * @param  ?string[]  $cartonReferenceNumbers  Array of reference numbers for the carton that are part of this pallet/shipment. Please provide the cartonSequenceNumber from the 'cartons' segment to refer to that carton's details here.
     */
    public function __construct(
        public readonly ?int $cartonCount = null,
        public readonly ?array $cartonReferenceNumbers = null,
    ) {
    }
}

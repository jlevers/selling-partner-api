<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class TransportLabel extends Dto
{
    protected static array $complexArrayTypes = ['labelData' => [LabelData::class]];

    /**
     * @param  ?string  $labelCreateDateTime  Date on which label is created.
     * @param  ?ShipmentInformation  $shipmentInformation  Shipment Information details for Label request.
     * @param  LabelData[]  $labelData  Indicates the label data,format and type associated .
     */
    public function __construct(
        public readonly ?string $labelCreateDateTime = null,
        public readonly ?ShipmentInformation $shipmentInformation = null,
        public readonly ?array $labelData = null,
    ) {
    }
}

<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class TransportResult extends Dto
{
    protected static array $attributeMap = [
        'transportStatus' => 'TransportStatus',
        'errorCode' => 'ErrorCode',
        'errorDescription' => 'ErrorDescription',
    ];

    /**
     * @param  string  $transportStatus  Indicates the status of the Amazon-partnered carrier shipment.
     * @param  ?string  $errorCode  An error code that identifies the type of error that occured.
     * @param  ?string  $errorDescription  A message that describes the error condition.
     */
    public function __construct(
        public readonly string $transportStatus,
        public readonly ?string $errorCode = null,
        public readonly ?string $errorDescription = null,
    ) {
    }
}

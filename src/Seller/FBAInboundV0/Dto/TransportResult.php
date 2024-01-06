<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransportResult extends BaseDto
{
    /**
     * @param  string  $transportStatus Indicates the status of the Amazon-partnered carrier shipment.
     * @param  string  $errorCode An error code that identifies the type of error that occured.
     * @param  string  $errorDescription A message that describes the error condition.
     */
    public function __construct(
        public readonly ?string $transportStatus = null,
        public readonly ?string $errorCode = null,
        public readonly ?string $errorDescription = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

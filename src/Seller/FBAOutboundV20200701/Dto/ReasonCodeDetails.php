<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ReasonCodeDetails extends BaseDto
{
    /**
     * @param  string  $returnReasonCode A code that indicates a valid return reason.
     * @param  string  $description A human readable description of the return reason code.
     * @param  string  $translatedDescription A translation of the description. The translation is in the language specified in the Language request parameter.
     */
    public function __construct(
        public readonly ?string $returnReasonCode = null,
        public readonly ?string $description = null,
        public readonly ?string $translatedDescription = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class MessagingAction extends BaseDto
{
    /**
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $name,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

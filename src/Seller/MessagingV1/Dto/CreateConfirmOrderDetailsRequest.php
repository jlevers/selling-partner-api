<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateConfirmOrderDetailsRequest extends BaseDto
{
    /**
     * @param  ?string  $text  The text to be sent to the buyer. Only links related to order completion are allowed. Do not include HTML or email addresses. The text must be written in the buyer's language of preference, which can be retrieved from the GetAttributes operation.
     */
    public function __construct(
        public readonly ?string $text = null,
    ) {
    }
}

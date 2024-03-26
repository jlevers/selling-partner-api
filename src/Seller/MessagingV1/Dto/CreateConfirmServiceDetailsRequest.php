<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateConfirmServiceDetailsRequest extends BaseDto
{
    /**
     * @param  ?string  $text  The text to be sent to the buyer. Only links related to Home Service calls are allowed. Do not include HTML or email addresses. The text must be written in the buyer's language of preference, which can be retrieved from the GetAttributes operation.
     */
    public function __construct(
        public readonly ?string $text = null,
    ) {
    }
}

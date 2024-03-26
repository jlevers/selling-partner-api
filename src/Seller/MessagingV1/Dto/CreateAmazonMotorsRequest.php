<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateAmazonMotorsRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['attachments' => [Attachment::class]];

    /**
     * @param  Attachment[]|null  $attachments  Attachments to include in the message to the buyer.
     */
    public function __construct(
        public readonly ?array $attachments = null,
    ) {
    }
}

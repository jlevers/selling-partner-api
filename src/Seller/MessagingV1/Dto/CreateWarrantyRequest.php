<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateWarrantyRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['attachments' => [Attachment::class]];

    /**
     * @param  Attachment[]|null  $attachments Attachments to include in the message to the buyer.
     * @param  ?string  $coverageStartDate The start date of the warranty coverage to include in the message to the buyer.
     * @param  ?string  $coverageEndDate The end date of the warranty coverage to include in the message to the buyer.
     */
    public function __construct(
        public readonly ?array $attachments = null,
        public readonly ?string $coverageStartDate = null,
        public readonly ?string $coverageEndDate = null,
    ) {
    }
}

<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateWarrantyRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['attachments' => [Attachment::class]];

    /**
     * @param  Attachment[]|null  $attachments  Attachments to include in the message to the buyer.
     * @param  ?DateTime  $coverageStartDate  The start date of the warranty coverage to include in the message to the buyer.
     * @param  ?DateTime  $coverageEndDate  The end date of the warranty coverage to include in the message to the buyer.
     */
    public function __construct(
        public readonly ?array $attachments = null,
        public readonly ?\DateTime $coverageStartDate = null,
        public readonly ?\DateTime $coverageEndDate = null,
    ) {
    }
}

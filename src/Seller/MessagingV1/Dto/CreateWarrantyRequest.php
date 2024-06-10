<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use SellingPartnerApi\Dto;

final class CreateWarrantyRequest extends Dto
{
    protected static array $complexArrayTypes = ['attachments' => [Attachment::class]];

    /**
     * @param  Attachment[]|null  $attachments  Attachments to include in the message to the buyer.
     * @param  ?\DateTimeInterface  $coverageStartDate  The start date of the warranty coverage to include in the message to the buyer.
     * @param  ?\DateTimeInterface  $coverageEndDate  The end date of the warranty coverage to include in the message to the buyer.
     */
    public function __construct(
        public readonly ?array $attachments = null,
        public readonly ?\DateTimeInterface $coverageStartDate = null,
        public readonly ?\DateTimeInterface $coverageEndDate = null,
    ) {
    }
}

<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class RejectionReason extends Dto
{
    protected static array $attributeMap = [
        'rejectionReasonId' => 'RejectionReasonId',
        'rejectionReasonDescription' => 'RejectionReasonDescription',
    ];

    /**
     * @param  string  $rejectionReasonId  The unique identifier for the rejection reason.
     * @param  string  $rejectionReasonDescription  The description of this rejection reason.
     */
    public function __construct(
        public string $rejectionReasonId,
        public string $rejectionReasonDescription,
    ) {}
}

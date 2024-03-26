<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContentMetadata extends BaseDto
{
    /**
     * @param  string  $name  The A+ Content document name.
     * @param  string  $marketplaceId  The identifier for the marketplace where the A+ Content is published.
     * @param  string  $status  The submission status of the content document.
     * @param  string[]  $badgeSet  The set of content badges.
     * @param  DateTime  $updateTime  The approximate age of the A+ Content document and metadata.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $marketplaceId,
        public readonly string $status,
        public readonly array $badgeSet,
        public readonly \DateTime $updateTime,
    ) {
    }
}

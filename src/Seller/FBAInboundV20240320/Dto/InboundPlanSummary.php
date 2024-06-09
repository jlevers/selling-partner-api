<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class InboundPlanSummary extends Dto
{
    /**
     * @param  DateTime  $createdAt  The ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  DateTime  $lastUpdatedAt  The ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     * @param  string[]  $marketplaceIds  Marketplace IDs.
     * @param  string  $name  Human-readable name of the inbound plan.
     * @param  Address  $sourceAddress  Specific details to identify a place.
     * @param  string  $status  Current status of the inbound plan. Can be: `ACTIVE`, `VOIDED`, `SHIPPED`, 'ERRORED'.
     */
    public function __construct(
        public readonly \DateTime $createdAt,
        public readonly string $inboundPlanId,
        public readonly \DateTime $lastUpdatedAt,
        public readonly array $marketplaceIds,
        public readonly string $name,
        public readonly Address $sourceAddress,
        public readonly string $status,
    ) {
    }
}

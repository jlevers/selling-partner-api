<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Address;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\PackingOptionSummary;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\PlacementOptionSummary;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\ShipmentSummary;

final class InboundPlan extends Response
{
    protected static array $complexArrayTypes = [
        'packingOptions' => [PackingOptionSummary::class],
        'placementOptions' => [PlacementOptionSummary::class],
        'shipments' => [ShipmentSummary::class],
    ];

    /**
     * @param  \DateTimeInterface  $createdAt  The ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  \DateTimeInterface  $lastUpdatedAt  The ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     * @param  string[]  $marketplaceIds  Marketplace IDs.
     * @param  string  $name  Human-readable name of the inbound plan.
     * @param  Address  $sourceAddress  Specific details to identify a place.
     * @param  string  $status  Current status of the inbound plan. Can be: `ACTIVE`, `VOIDED`, `SHIPPED`, 'ERRORED'.
     * @param  PackingOptionSummary[]|null  $packingOptions  Packing options for the inbound plan. This property will be populated when it has been generated via the corresponding operation. If there is a chosen placement option, only packing options for that placement option will be returned. If there are confirmed shipments, only packing options for those shipments will be returned. Query the packing option for more details.
     * @param  PlacementOptionSummary[]|null  $placementOptions  Placement options for the inbound plan. This property will be populated when it has been generated via the corresponding operation. If there is a chosen placement option, that will be the only returned option. Query the placement option for more details.
     * @param  ShipmentSummary[]|null  $shipments  Shipment IDs for the inbound plan. This property will be populated when it has been generated via the corresponding operation. If there is a chosen placement option, only shipments for that option will be returned. If there are confirmed shipments, only those shipments will be returned. Query the shipment for more details.
     */
    public function __construct(
        public readonly \DateTimeInterface $createdAt,
        public readonly string $inboundPlanId,
        public readonly \DateTimeInterface $lastUpdatedAt,
        public readonly array $marketplaceIds,
        public readonly string $name,
        public readonly Address $sourceAddress,
        public readonly string $status,
        public readonly ?array $packingOptions = null,
        public readonly ?array $placementOptions = null,
        public readonly ?array $shipments = null,
    ) {
    }
}

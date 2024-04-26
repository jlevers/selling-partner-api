<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\PackingOptionSummary;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;

final class ListPackingOptionsResponse extends Response
{
    protected static array $complexArrayTypes = ['packingOptions' => [PackingOptionSummary::class]];

    /**
     * @param  PackingOptionSummary[]  $packingOptions  Packing options for the inbound plan. This property will be populated when it has been generated via the corresponding endpoint. If there is a chosen placement option, only packing options for that placement option will be returned. If there are confirmed shipments, only packing options for those shipments will be returned. Query the packing option for more details.
     * @param  ?Pagination  $pagination  Contains tokens to fetch from a certain page.
     */
    public function __construct(
        public readonly array $packingOptions,
        public readonly ?Pagination $pagination = null,
    ) {
    }
}

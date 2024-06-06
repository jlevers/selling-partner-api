<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\BoxUpdateInput;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;

final class ListShipmentBoxesResponse extends Response
{
    protected static array $complexArrayTypes = ['boxes' => [BoxUpdateInput::class]];

    /**
     * @param  BoxUpdateInput[]  $boxes  A list of boxes that will be present in the shipment after the update.
     * @param  ?Pagination  $pagination  Contains tokens to fetch from a certain page.
     */
    public function __construct(
        public readonly array $boxes,
        public readonly ?Pagination $pagination = null,
    ) {
    }
}

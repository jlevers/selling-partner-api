<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\RequestedUpdates;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\TransportationOption;

final class ContentUpdatePreview extends Response
{
    /**
     * @param  string  $contentUpdatePreviewId  Identifier of a content update preview.
     * @param  string  $expiration  The date in ISO 8601 format for when the content update expires.
     * @param  RequestedUpdates  $requestedUpdates  Objects that were included in the update request.
     * @param  TransportationOption  $transportationOption  Contains information pertaining to a transportation option and the related carrier.
     */
    public function __construct(
        public readonly string $contentUpdatePreviewId,
        public readonly string $expiration,
        public readonly RequestedUpdates $requestedUpdates,
        public readonly TransportationOption $transportationOption,
    ) {
    }
}

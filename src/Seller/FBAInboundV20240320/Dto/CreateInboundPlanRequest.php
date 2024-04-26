<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class CreateInboundPlanRequest extends Dto
{
    protected static array $complexArrayTypes = ['items' => [Item::class]];

    /**
     * @param  ContactInformation  $contactInformation  The seller's contact information.
     * @param  string[]  $destinationMarketplaces  Marketplaces where the items need to be shipped to. Currently only one marketplace can be selected in this request.
     * @param  Item[]  $items  Items contained within the box.
     * @param  Address  $sourceAddress  Specific details to identify a place.
     * @param  ?string  $name  Name for the Inbound Plan. If one isn't provided, a default name will be provided.
     */
    public function __construct(
        public readonly ContactInformation $contactInformation,
        public readonly array $destinationMarketplaces,
        public readonly array $items,
        public readonly Address $sourceAddress,
        public readonly ?string $name = null,
    ) {
    }
}

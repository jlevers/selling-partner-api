<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class SetPackingInformationRequest extends Dto
{
    protected static array $complexArrayTypes = ['packageGroupings' => [PackageGroupingInput::class]];

    /**
     * @param  PackageGroupingInput[]  $packageGroupings  List of packing information for the inbound plan.
     */
    public function __construct(
        public readonly array $packageGroupings,
    ) {
    }
}

<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class GeneratePlacementOptionsRequest extends Dto
{
    protected static array $complexArrayTypes = ['customPlacement' => [CustomPlacementInput::class]];

    /**
     * @param  CustomPlacementInput[]|null  $customPlacement  Custom placements options to be added to the plan.
     */
    public function __construct(
        public readonly ?array $customPlacement = null,
    ) {
    }
}

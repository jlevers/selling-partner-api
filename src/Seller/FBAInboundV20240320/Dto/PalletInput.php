<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class PalletInput extends Dto
{
    /**
     * @param  int  $quantity  The number of containers where all other properties like weight or dimensions are identical.
     * @param  ?Dimensions  $dimensions  Measurement of a package's dimensions.
     * @param  ?string  $stackability  Indicates whether pallets will be stacked when carrier arrives for pick-up.
     * @param  ?Weight  $weight  The weight of a package.
     */
    public function __construct(
        public readonly int $quantity,
        public readonly ?Dimensions $dimensions = null,
        public readonly ?string $stackability = null,
        public readonly ?Weight $weight = null,
    ) {
    }
}

<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class UpdateShipmentSourceAddressRequest extends Dto
{
    /**
     * @param  AddressInput  $address  Specific details to identify a place.
     */
    public function __construct(
        public readonly AddressInput $address,
    ) {
    }
}

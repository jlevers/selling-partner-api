<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class ContactInformation extends Dto
{
    /**
     * @param  string  $phoneNumber  The phone number of the seller.
     * @param  ?string  $email  Email address.
     * @param  ?string  $name  The name belonging to the contact. This field is required when contact information is being provided for
     *                         Less-Than-Truckload (LTL) carrier shipments.
     */
    public function __construct(
        public readonly string $phoneNumber,
        public readonly ?string $email = null,
        public readonly ?string $name = null,
    ) {
    }
}

<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class UpdateVerificationStatusRequest extends Dto
{
    /**
     * @param  UpdateVerificationStatusRequestBody  $regulatedOrderVerificationStatus  The updated values of the VerificationStatus field.
     */
    public function __construct(
        public readonly UpdateVerificationStatusRequestBody $regulatedOrderVerificationStatus,
    ) {
    }
}

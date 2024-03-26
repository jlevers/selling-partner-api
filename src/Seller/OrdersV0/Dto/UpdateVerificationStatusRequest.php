<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateVerificationStatusRequest extends BaseDto
{
    /**
     * @param  UpdateVerificationStatusRequestBody  $regulatedOrderVerificationStatus  The updated values of the VerificationStatus field.
     */
    public function __construct(
        public readonly UpdateVerificationStatusRequestBody $regulatedOrderVerificationStatus,
    ) {
    }
}

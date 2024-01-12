<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitAcknowledgementRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['acknowledgements' => [OrderAcknowledgement::class]];

    /**
     * @param  OrderAcknowledgement[]  $acknowledgements
     */
    public function __construct(
        public readonly ?array $acknowledgements = null,
    ) {
    }
}

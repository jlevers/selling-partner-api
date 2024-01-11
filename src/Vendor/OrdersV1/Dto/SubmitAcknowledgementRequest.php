<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitAcknowledgementRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['acknowledgements' => [OrderAcknowledgement::class]];

    /**
     * @param  OrderAcknowledgement[]  $acknowledgements
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?array $acknowledgements = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class SubmitAcknowledgementRequest extends Dto
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

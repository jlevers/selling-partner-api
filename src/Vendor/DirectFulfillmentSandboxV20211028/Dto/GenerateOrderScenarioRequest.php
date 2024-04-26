<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use SellingPartnerApi\Dto;

final class GenerateOrderScenarioRequest extends Dto
{
    protected static array $complexArrayTypes = ['orders' => [OrderScenarioRequest::class]];

    /**
     * @param  OrderScenarioRequest[]  $orders  The list of test orders requested as indicated by party identifiers.
     */
    public function __construct(
        public readonly ?array $orders = null,
    ) {
    }
}

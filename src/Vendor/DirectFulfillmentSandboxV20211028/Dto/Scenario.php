<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Scenario extends BaseDto
{
    protected static array $complexArrayTypes = ['orders' => [TestOrder::class]];

    /**
     * @param  string  $scenarioId An identifier that identifies the type of scenario that user can use for testing.
     * @param  TestOrder[]  $orders A list of orders that can be used by the caller to test each life cycle or scenario.
     */
    public function __construct(
        public readonly string $scenarioId,
        public readonly array $orders,
    ) {
    }
}

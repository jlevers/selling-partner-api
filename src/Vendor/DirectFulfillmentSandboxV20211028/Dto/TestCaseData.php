<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TestCaseData extends BaseDto
{
    protected static array $complexArrayTypes = ['scenarios' => [Scenario::class]];

    /**
     * @param  Scenario[]  $scenarios  Set of use cases that describes the possible test scenarios.
     */
    public function __construct(
        public readonly ?array $scenarios = null,
    ) {
    }
}

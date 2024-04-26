<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use SellingPartnerApi\Dto;

final class TestCaseData extends Dto
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

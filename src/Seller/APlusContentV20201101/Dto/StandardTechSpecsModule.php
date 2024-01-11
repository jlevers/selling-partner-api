<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardTechSpecsModule extends BaseDto
{
    protected static array $complexArrayTypes = ['specificationList' => [StandardTextPairBlock::class]];

    /**
     * @param  ?TextComponent  $headline Rich text content.
     * @param  StandardTextPairBlock[]  $specificationList The specification list.
     * @param  ?int  $tableCount The number of tables to present. Features are evenly divided between the tables.
     */
    public function __construct(
        public readonly ?TextComponent $headline = null,
        public readonly ?array $specificationList = null,
        public readonly ?int $tableCount = null,
    ) {
    }
}

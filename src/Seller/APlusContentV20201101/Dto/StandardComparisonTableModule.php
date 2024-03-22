<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardComparisonTableModule extends BaseDto
{
    protected static array $complexArrayTypes = [
        'productColumns' => [StandardComparisonProductBlock::class],
        'metricRowLabels' => [PlainTextItem::class],
    ];

    /**
     * @param  StandardComparisonProductBlock[]|null  $productColumns
     * @param  PlainTextItem[]|null  $metricRowLabels
     */
    public function __construct(
        public readonly ?array $productColumns = null,
        public readonly ?array $metricRowLabels = null,
    ) {
    }
}

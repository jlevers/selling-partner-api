<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetFulfillmentPreviewResult extends BaseDto
{
    protected static array $complexArrayTypes = ['fulfillmentPreviews' => [FulfillmentPreview::class]];

    /**
     * @param  FulfillmentPreview[]  $fulfillmentPreviews An array of fulfillment preview information.
     */
    public function __construct(
        public readonly array $fulfillmentPreviews,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

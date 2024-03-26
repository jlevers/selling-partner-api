<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetFulfillmentPreviewResult extends BaseDto
{
    protected static array $complexArrayTypes = ['fulfillmentPreviews' => [FulfillmentPreview::class]];

    /**
     * @param  FulfillmentPreview[]|null  $fulfillmentPreviews  An array of fulfillment preview information.
     */
    public function __construct(
        public readonly ?array $fulfillmentPreviews = null,
    ) {
    }
}

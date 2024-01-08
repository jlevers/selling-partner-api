<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PostContentDocumentAsinRelationsRequest extends BaseDto
{
    /**
     * @param  ?string[]  $asinSet The set of ASINs.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?array $asinSet = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

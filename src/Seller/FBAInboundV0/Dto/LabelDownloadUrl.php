<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LabelDownloadUrl extends BaseDto
{
    /**
     * @param  string  $downloadUrl URL to download the label for the package. Note: The URL will only be valid for 15 seconds
     */
    public function __construct(
        public readonly string $downloadUrl,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

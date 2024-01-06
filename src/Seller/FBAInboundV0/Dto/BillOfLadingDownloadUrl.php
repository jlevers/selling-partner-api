<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BillOfLadingDownloadUrl extends BaseDto
{
    /**
     * @param  string  $downloadUrl URL to download the bill of lading for the package. Note: The URL will only be valid for 15 seconds
     */
    public function __construct(
        public readonly string $downloadUrl,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

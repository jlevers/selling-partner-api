<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class LabelDownloadUrl extends Dto
{
    protected static array $attributeMap = ['downloadUrl' => 'DownloadURL'];

    /**
     * @param  ?string  $downloadUrl  URL to download the label for the package. Note: The URL will only be valid for 15 seconds
     */
    public function __construct(
        public readonly ?string $downloadUrl = null,
    ) {
    }
}

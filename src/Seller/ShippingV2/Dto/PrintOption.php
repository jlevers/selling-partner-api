<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PrintOption extends BaseDto
{
    protected static array $complexArrayTypes = ['supportedDocumentDetails' => [SupportedDocumentDetail::class]];

    /**
     * @param  int[]  $supportedDpIs A list of the supported DPI options for a document.
     * @param  ?string[]  $supportedPageLayouts A list of the supported page layout options for a document.
     * @param  bool[]  $supportedFileJoiningOptions A list of the supported needFileJoining boolean values for a document.
     * @param  SupportedDocumentDetail[]  $supportedDocumentDetails A list of the supported documented details.
     */
    public function __construct(
        public readonly ?array $supportedDpIs = null,
        public readonly ?array $supportedPageLayouts = null,
        public readonly ?array $supportedFileJoiningOptions = null,
        public readonly ?array $supportedDocumentDetails = null,
    ) {
    }
}

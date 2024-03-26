<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PrintOption extends BaseDto
{
    protected static array $attributeMap = ['supportedDpIs' => 'supportedDPIs'];

    protected static array $complexArrayTypes = ['supportedDocumentDetails' => [SupportedDocumentDetail::class]];

    /**
     * @param  string[]  $supportedPageLayouts  A list of the supported page layout options for a document.
     * @param  bool[]  $supportedFileJoiningOptions  A list of the supported needFileJoining boolean values for a document.
     * @param  SupportedDocumentDetail[]  $supportedDocumentDetails  A list of the supported documented details.
     * @param  int[]|null  $supportedDpIs  A list of the supported DPI options for a document.
     */
    public function __construct(
        public readonly array $supportedPageLayouts,
        public readonly array $supportedFileJoiningOptions,
        public readonly array $supportedDocumentDetails,
        public readonly ?array $supportedDpIs = null,
    ) {
    }
}

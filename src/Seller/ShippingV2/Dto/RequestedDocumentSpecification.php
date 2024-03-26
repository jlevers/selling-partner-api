<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RequestedDocumentSpecification extends BaseDto
{
    /**
     * @param  string  $format  The file format of the document.
     * @param  DocumentSize  $size  The size dimensions of the label.
     * @param  bool  $needFileJoining  When true, files should be stitched together. Otherwise, files should be returned separately. Defaults to false.
     * @param  string[]  $requestedDocumentTypes  A list of the document types requested.
     * @param  ?int  $dpi  The dots per inch (DPI) value used in printing. This value represents a measure of the resolution of the document.
     * @param  ?string  $pageLayout  Indicates the position of the label on the paper. Should be the same value as returned in getRates response.
     */
    public function __construct(
        public readonly string $format,
        public readonly DocumentSize $size,
        public readonly bool $needFileJoining,
        public readonly array $requestedDocumentTypes,
        public readonly ?int $dpi = null,
        public readonly ?string $pageLayout = null,
    ) {
    }
}

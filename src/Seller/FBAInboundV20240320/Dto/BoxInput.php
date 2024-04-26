<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class BoxInput extends Dto
{
    protected static array $complexArrayTypes = ['contents' => [BoxContent::class]];

    /**
     * @param  string  $contentInformationSource  Indication of how box content is meant to be provided.
     * @param  Dimensions  $dimensions  Measurement of a package dimensions.
     * @param  int  $quantity  The number of containers where all other properties like weight or dimensions are identical.
     * @param  string  $templateName  The seller-provided name for a 'type' of box (or a group of boxes with the same contents), which will be used to identify all created boxes of that type. When providing bulk box information, this value must be unique from the other box types. When providing individual boxes with existing IDs, this value can be shared between many boxes that have the same contents.
     * @param  Weight  $weight  The weight of a package.
     * @param  ?string  $boxId  The ID of the box to update that was provided by Amazon. This ID is comprised of the external shipment ID
     *                          (which is generated after transportation has been confirmed) and the index of the box.
     * @param  BoxContent[]|null  $contents  The Contents of the box containing a list of MSKUs and their quantity. If `boxAttribute` is `BARCODE_2D` or `MANUAL_PROCESS`, user should provide ALL of the items that could be in the box, without specifying item quantities.
     */
    public function __construct(
        public readonly string $contentInformationSource,
        public readonly Dimensions $dimensions,
        public readonly int $quantity,
        public readonly string $templateName,
        public readonly Weight $weight,
        public readonly ?string $boxId = null,
        public readonly ?array $contents = null,
    ) {
    }
}

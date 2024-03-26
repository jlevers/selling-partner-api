<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Decorator extends BaseDto
{
    /**
     * @param  ?string  $type  The type of rich text decorator.
     * @param  ?int  $offset  The starting character of this decorator within the content string. Use zero for the first character.
     * @param  ?int  $length  The number of content characters to alter with this decorator. Decorators such as line breaks can have zero length and fit between characters.
     * @param  ?int  $depth  The relative intensity or variation of this decorator. Decorators such as bullet-points, for example, can have multiple indentation depths.
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?int $offset = null,
        public readonly ?int $length = null,
        public readonly ?int $depth = null,
    ) {
    }
}

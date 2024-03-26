<?php

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SchemaLink extends BaseDto
{
    /**
     * @param  Link  $link  Link to retrieve the schema.
     * @param  string  $checksum  Checksum hash of the schema (Base64 MD5). Can be used to verify schema contents, identify changes between schema versions, and for caching.
     */
    public function __construct(
        public readonly Link $link,
        public readonly string $checksum,
    ) {
    }
}

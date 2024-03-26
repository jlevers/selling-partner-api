<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AdditionalDetails extends BaseDto
{
    /**
     * @param  string  $type  The type of the additional information provided by the selling party.
     * @param  string  $detail  The detail of the additional information provided by the selling party.
     * @param  ?string  $languageCode  The language code of the additional information detail.
     */
    public function __construct(
        public readonly string $type,
        public readonly string $detail,
        public readonly ?string $languageCode = null,
    ) {
    }
}

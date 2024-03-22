<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransportationLabels extends BaseDto
{
    protected static array $complexArrayTypes = ['transportLabels' => [TransportLabel::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  TransportLabel[]  $transportLabels
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $transportLabels = null,
    ) {
    }
}

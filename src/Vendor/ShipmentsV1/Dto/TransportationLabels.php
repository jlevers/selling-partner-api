<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class TransportationLabels extends Dto
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

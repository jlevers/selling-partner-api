<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class AcknowledgementStatusDetails extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $acknowledgementDate  The date when the line item was confirmed by vendor. Must be in ISO-8601 date/time format.
     * @param  ?ItemQuantity  $acceptedQuantity  Details of quantity ordered.
     * @param  ?ItemQuantity  $rejectedQuantity  Details of quantity ordered.
     */
    public function __construct(
        public ?\DateTimeInterface $acknowledgementDate = null,
        public ?ItemQuantity $acceptedQuantity = null,
        public ?ItemQuantity $rejectedQuantity = null,
    ) {}
}

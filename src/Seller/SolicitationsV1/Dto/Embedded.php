<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SolicitationsV1\Dto;

use SellingPartnerApi\Dto;

final class Embedded extends Dto
{
    protected static array $complexArrayTypes = ['actions' => [LinkObject::class]];

    /**
     * @param  LinkObject[]  $actions  Eligible actions for the specified amazonOrderId.
     */
    public function __construct(
        public readonly array $actions,
    ) {
    }
}

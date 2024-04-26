<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class AssignAppointmentResourcesRequest extends Dto
{
    protected static array $complexArrayTypes = ['resources' => [AppointmentResource::class]];

    /**
     * @param  AppointmentResource[]  $resources  List of resources that performs or performed job appointment fulfillment.
     */
    public function __construct(
        public readonly array $resources,
    ) {
    }
}

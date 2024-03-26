<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AssignAppointmentResourcesRequest extends BaseDto
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

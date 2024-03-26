<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateReservationRequest extends BaseDto
{
    /**
     * @param  string  $resourceId  Resource (store) identifier.
     * @param  Reservation  $reservation  Reservation object reduces the capacity of a resource.
     */
    public function __construct(
        public readonly string $resourceId,
        public readonly Reservation $reservation,
    ) {
    }
}

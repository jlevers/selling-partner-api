<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class CreateReservationRequest extends Dto
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

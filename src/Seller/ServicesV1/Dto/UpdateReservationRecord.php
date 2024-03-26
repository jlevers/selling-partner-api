<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateReservationRecord extends BaseDto
{
    protected static array $complexArrayTypes = ['warnings' => [Warning::class], 'errors' => [Error::class]];

    /**
     * @param  ?Reservation  $reservation  Reservation object reduces the capacity of a resource.
     * @param  Warning[]|null  $warnings  A list of warnings returned in the sucessful execution response of an API request.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Reservation $reservation = null,
        public readonly ?array $warnings = null,
        public readonly ?array $errors = null,
    ) {
    }
}

<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;
use SellingPartnerApi\Seller\ServicesV1\Responses\ErrorList;

final class CreateReservationRecord extends Dto
{
    protected static array $complexArrayTypes = ['warnings' => Warning::class];

    /**
     * @param  ?Reservation  $reservation  Reservation object reduces the capacity of a resource.
     * @param  Warning[]|null  $warnings  A list of warnings returned in the sucessful execution response of an API request.
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public ?Reservation $reservation = null,
        public ?array $warnings = null,
        public ?ErrorList $errors = null,
    ) {}
}

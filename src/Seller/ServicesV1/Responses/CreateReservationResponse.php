<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ServicesV1\Dto\CreateReservationRecord;
use SellingPartnerApi\Seller\ServicesV1\Dto\Error;

final class CreateReservationResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?CreateReservationRecord  $payload  `CreateReservationRecord` entity contains the `Reservation` if there is an error/warning while performing the requested operation on it, otherwise it will contain the new `reservationId`.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?CreateReservationRecord $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}

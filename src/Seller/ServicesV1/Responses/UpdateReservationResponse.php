<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ServicesV1\Dto\UpdateReservationRecord;

final class UpdateReservationResponse extends BaseResponse
{
    /**
     * @param  ?UpdateReservationRecord  $updateReservationRecord `UpdateReservationRecord` entity contains the `Reservation` if there is an error/warning while performing the requested operation on it, otherwise it will contain the new `reservationId`.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?UpdateReservationRecord $updateReservationRecord = null,
        public readonly ?array $errors = null,
    ) {
    }
}

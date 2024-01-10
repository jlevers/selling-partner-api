<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class SetAppointmentResponse extends BaseResponse
{
    /**
     * @param  ?string  $appointmentId The appointment identifier.
     * @param  Warning[]  $warnings A list of warnings returned in the sucessful execution response of an API request.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?string $appointmentId = null,
        public readonly ?array $warnings = null,
        public readonly ?array $errors = null,
    ) {
    }
}

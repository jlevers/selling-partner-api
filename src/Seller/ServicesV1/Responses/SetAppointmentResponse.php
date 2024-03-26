<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ServicesV1\Dto\Error;
use SellingPartnerApi\Seller\ServicesV1\Dto\Warning;

final class SetAppointmentResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['warnings' => [Warning::class], 'errors' => [Error::class]];

    /**
     * @param  ?string  $appointmentId  The appointment identifier.
     * @param  Warning[]|null  $warnings  A list of warnings returned in the sucessful execution response of an API request.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?string $appointmentId = null,
        public readonly ?array $warnings = null,
        public readonly ?array $errors = null,
    ) {
    }
}

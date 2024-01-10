<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ServicesV1\Dto\Payload;

final class UpdateScheduleResponse extends BaseResponse
{
    /**
     * @param  ?Payload  $payload The payload for the `assignAppointmentResource` operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Payload $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}

<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ServicesV1\Dto\AppointmentSlotReport;
use SellingPartnerApi\Seller\ServicesV1\Dto\Error;

final class GetAppointmentSlotsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?AppointmentSlotReport  $payload  Availability information as per the service context queried.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?AppointmentSlotReport $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}

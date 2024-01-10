<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ServicesV1\Dto\AppointmentSlotReport;

final class GetAppointmentSlotsResponse extends BaseResponse
{
    /**
     * @param  ?AppointmentSlotReport  $appointmentSlotReport Availability information as per the service context queried.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?AppointmentSlotReport $appointmentSlotReport = null,
        public readonly ?array $errors = null,
    ) {
    }
}

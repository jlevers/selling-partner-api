<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ServicesV1\Dto\Error;
use SellingPartnerApi\Seller\ServicesV1\Dto\UpdateScheduleRecord;

final class UpdateScheduleResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['payload' => [UpdateScheduleRecord::class], 'errors' => [Error::class]];

    /**
     * @param  UpdateScheduleRecord[]|null  $payload  Contains the `UpdateScheduleRecords` for which the error/warning has occurred.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}

<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CreateReportResponse extends BaseResponse
{
    /**
     * @param  string  $reportId  The identifier for the report. This identifier is unique only in combination with a seller ID.
     */
    public function __construct(
        public readonly string $reportId,
    ) {
    }
}

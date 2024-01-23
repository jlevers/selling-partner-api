<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ReportsV20210630\Dto\Report;

final class GetReportsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['reports' => [Report::class]];

    /**
     * @param  Report[]  $reports A list of reports.
     * @param  ?string  $nextToken Returned when the number of results exceeds pageSize. To get the next page of results, call getReports with this token as the only parameter.
     */
    public function __construct(
        public readonly array $reports,
        public readonly ?string $nextToken = null,
    ) {
    }
}

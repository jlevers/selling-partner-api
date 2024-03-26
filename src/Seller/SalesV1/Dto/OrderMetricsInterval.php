<?php

namespace SellingPartnerApi\Seller\SalesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderMetricsInterval extends BaseDto
{
    /**
     * @param  string  $interval  The interval of time based on requested granularity (ex. Hour, Day, etc.) If this is the first or the last interval from the list, it might contain incomplete data if the requested interval doesn't align with the requested granularity (ex. request interval 2018-09-01T02:00:00Z--2018-09-04T19:00:00Z and granularity day will result in Sept 1st UTC day and Sept 4th UTC days having partial data).
     * @param  int  $unitCount  The number of units in orders based on the specified filters.
     * @param  int  $orderItemCount  The number of order items based on the specified filters.
     * @param  int  $orderCount  The number of orders based on the specified filters.
     * @param  Money  $averageUnitPrice  The currency type and the amount.
     * @param  Money  $totalSales  The currency type and the amount.
     */
    public function __construct(
        public readonly string $interval,
        public readonly int $unitCount,
        public readonly int $orderItemCount,
        public readonly int $orderCount,
        public readonly Money $averageUnitPrice,
        public readonly Money $totalSales,
    ) {
    }
}

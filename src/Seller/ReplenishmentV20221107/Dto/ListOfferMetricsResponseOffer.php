<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListOfferMetricsResponseOffer extends BaseDto
{
    protected static array $attributeMap = [
        'notDeliveredDueToOos' => 'notDeliveredDueToOOS',
        'next30dayTotalSubscriptionsRevenue' => 'next30DayTotalSubscriptionsRevenue',
        'next60dayTotalSubscriptionsRevenue' => 'next60DayTotalSubscriptionsRevenue',
        'next90dayTotalSubscriptionsRevenue' => 'next90DayTotalSubscriptionsRevenue',
        'next30dayShippedSubscriptionUnits' => 'next30DayShippedSubscriptionUnits',
        'next60dayShippedSubscriptionUnits' => 'next60DayShippedSubscriptionUnits',
        'next90dayShippedSubscriptionUnits' => 'next90DayShippedSubscriptionUnits',
    ];

    /**
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN).
     * @param  ?float  $notDeliveredDueToOos  The percentage of items that were not shipped out of the total shipped units over a period of time due to being out of stock. Applicable only for the PERFORMANCE timePeriodType.
     * @param  ?float  $totalSubscriptionsRevenue  The revenue generated from subscriptions over a period of time. Applicable only for the PERFORMANCE timePeriodType.
     * @param  ?float  $shippedSubscriptionUnits  The number of units shipped to the subscribers over a period of time. Applicable only for the PERFORMANCE timePeriodType.
     * @param  ?float  $activeSubscriptions  The number of active subscriptions present at the end of the period. Applicable only for the PERFORMANCE timePeriodType.
     * @param  ?float  $revenuePenetration  The percentage of total program revenue out of total product revenue. Applicable only for the PERFORMANCE timePeriodType.
     * @param  ?float  $next30dayTotalSubscriptionsRevenue  The forecasted total subscription revenue for the next 30 days. Applicable only for the FORECAST timePeriodType.
     * @param  ?float  $next60dayTotalSubscriptionsRevenue  The forecasted total subscription revenue for the next 60 days. Applicable only for the FORECAST timePeriodType.
     * @param  ?float  $next90dayTotalSubscriptionsRevenue  The forecasted total subscription revenue for the next 90 days. Applicable only for the FORECAST timePeriodType.
     * @param  ?float  $next30dayShippedSubscriptionUnits  The forecasted shipped subscription units for the next 30 days. Applicable only for the FORECAST timePeriodType.
     * @param  ?float  $next60dayShippedSubscriptionUnits  The forecasted shipped subscription units for the next 60 days. Applicable only for the FORECAST timePeriodType.
     * @param  ?float  $next90dayShippedSubscriptionUnits  The forecasted shipped subscription units for the next 90 days. Applicable only for the FORECAST timePeriodType.
     * @param  ?TimeInterval  $timeInterval  A date-time interval in ISO 8601 format which is used to compute metrics. Only the date is required, but you must pass the complete date and time value. For example, November 11, 2022 should be passed as "2022-11-07T00:00:00Z". Note that only data for the trailing 2 years is supported.
     *
     *  **Note**: The `listOfferMetrics` operation only supports a time interval which covers a single unit of the aggregation frequency. For example, for a MONTH aggregation frequency, the duration of the interval between the startDate and endDate can not be more than 1 month.
     * @param  ?string  $currencyCode  The currency code in ISO 4217 format.
     */
    public function __construct(
        public readonly ?string $asin = null,
        public readonly ?float $notDeliveredDueToOos = null,
        public readonly ?float $totalSubscriptionsRevenue = null,
        public readonly ?float $shippedSubscriptionUnits = null,
        public readonly ?float $activeSubscriptions = null,
        public readonly ?float $revenuePenetration = null,
        public readonly ?float $next30dayTotalSubscriptionsRevenue = null,
        public readonly ?float $next60dayTotalSubscriptionsRevenue = null,
        public readonly ?float $next90dayTotalSubscriptionsRevenue = null,
        public readonly ?float $next30dayShippedSubscriptionUnits = null,
        public readonly ?float $next60dayShippedSubscriptionUnits = null,
        public readonly ?float $next90dayShippedSubscriptionUnits = null,
        public readonly ?TimeInterval $timeInterval = null,
        public readonly ?string $currencyCode = null,
    ) {
    }
}

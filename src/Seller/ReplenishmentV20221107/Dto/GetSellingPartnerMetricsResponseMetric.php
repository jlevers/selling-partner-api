<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetSellingPartnerMetricsResponseMetric extends BaseDto
{
    protected static array $attributeMap = ['notDeliveredDueToOos' => 'notDeliveredDueToOOS'];

    /**
     * @param  ?float  $notDeliveredDueToOos  The percentage of items that were not shipped out of the total shipped units over a period of time due to being out of stock. Applicable only for the PERFORMANCE timePeriodType.
     * @param  ?float  $totalSubscriptionsRevenue  The revenue generated from subscriptions over a period of time. Applicable for both the PERFORMANCE and FORECAST timePeriodType.
     * @param  ?float  $shippedSubscriptionUnits  The number of units shipped to the subscribers over a period of time. Applicable for both the PERFORMANCE and FORECAST timePeriodType.
     * @param  ?float  $activeSubscriptions  The number of active subscriptions present at the end of the period. Applicable only for the PERFORMANCE timePeriodType.
     * @param  ?float  $subscriberAverageRevenue  The average revenue per subscriber of the program over a period of past 12 months for sellers and 6 months for vendors. Applicable only for the PERFORMANCE timePeriodType.
     * @param  ?float  $nonSubscriberAverageRevenue  The average revenue per non-subscriber of the program over a period of past 12 months for sellers and 6 months for vendors. Applicable only for the PERFORMANCE timePeriodType.
     * @param  ?TimeInterval  $timeInterval  A date-time interval in ISO 8601 format which is used to compute metrics. Only the date is required, but you must pass the complete date and time value. For example, November 11, 2022 should be passed as "2022-11-07T00:00:00Z". Note that only data for the trailing 2 years is supported.
     *
     *  **Note**: The `listOfferMetrics` operation only supports a time interval which covers a single unit of the aggregation frequency. For example, for a MONTH aggregation frequency, the duration of the interval between the startDate and endDate can not be more than 1 month.
     * @param  ?string  $currencyCode  The currency code in ISO 4217 format.
     */
    public function __construct(
        public readonly ?float $notDeliveredDueToOos = null,
        public readonly ?float $totalSubscriptionsRevenue = null,
        public readonly ?float $shippedSubscriptionUnits = null,
        public readonly ?float $activeSubscriptions = null,
        public readonly ?float $subscriberAverageRevenue = null,
        public readonly ?float $nonSubscriberAverageRevenue = null,
        public readonly ?TimeInterval $timeInterval = null,
        public readonly ?string $currencyCode = null,
    ) {
    }
}

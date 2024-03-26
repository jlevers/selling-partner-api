<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListOfferMetricsRequestFilters extends BaseDto
{
    /**
     * @param  TimeInterval  $timeInterval  A date-time interval in ISO 8601 format which is used to compute metrics. Only the date is required, but you must pass the complete date and time value. For example, November 11, 2022 should be passed as "2022-11-07T00:00:00Z". Note that only data for the trailing 2 years is supported.
     *
     *  **Note**: The `listOfferMetrics` operation only supports a time interval which covers a single unit of the aggregation frequency. For example, for a MONTH aggregation frequency, the duration of the interval between the startDate and endDate can not be more than 1 month.
     * @param  string  $timePeriodType  The time period type that determines whether the metrics requested are backward-looking (performance) or forward-looking (forecast).
     * @param  string  $marketplaceId  The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace.
     * @param  string[]  $programTypes  A list of replenishment program types.
     * @param  ?string  $aggregationFrequency  The time period used to group data in the response. Note that this is only valid for the performance time period type.
     * @param  ?string[]  $asins  A list of Amazon Standard Identification Numbers (ASINs).
     */
    public function __construct(
        public readonly TimeInterval $timeInterval,
        public readonly string $timePeriodType,
        public readonly string $marketplaceId,
        public readonly array $programTypes,
        public readonly ?string $aggregationFrequency = null,
        public readonly ?array $asins = null,
    ) {
    }
}

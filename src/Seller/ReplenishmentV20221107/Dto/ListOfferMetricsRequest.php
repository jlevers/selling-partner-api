<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListOfferMetricsRequest extends BaseDto
{
    /**
     * @param  ListOfferMetricsRequestPagination  $pagination Use these parameters to paginate through the response.
     * @param  ListOfferMetricsRequestSort  $sort Use these parameters to sort the response.
     * @param  ListOfferMetricsRequestFilters  $filters Use these parameters to filter results. Any result must match all provided parameters. For any parameter that is an array, the result must match at least one element in the provided array.
     */
    public function __construct(
        public readonly ListOfferMetricsRequestPagination $pagination,
        public readonly ?ListOfferMetricsRequestSort $sort,
        public readonly ListOfferMetricsRequestFilters $filters,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

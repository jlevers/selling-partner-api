<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListOffersRequest extends BaseDto
{
    /**
     * @param  ListOffersRequestPagination  $pagination  Use these parameters to paginate through the response.
     * @param  ListOffersRequestFilters  $filters  Use these parameters to filter results. Any result must match all of the provided parameters. For any parameter that is an array, the result must match at least one element in the provided array.
     * @param  ?ListOffersRequestSort  $sort  Use these parameters to sort the response.
     */
    public function __construct(
        public readonly ListOffersRequestPagination $pagination,
        public readonly ListOffersRequestFilters $filters,
        public readonly ?ListOffersRequestSort $sort = null,
    ) {
    }
}

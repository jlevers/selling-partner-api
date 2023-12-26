<?php

namespace SellingPartnerApi\Seller\SellersV1\Responses;

final readonly class GetMarketplaceParticipationsResponse implements \Saloon\Contracts\DataObjects\WithResponse
{
    use \Saloon\Traits\Responses\HasResponse;

    /**
     * @param  MarketplaceParticipation[]  $marketplaceParticipations List of marketplace participations.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public array $marketplaceParticipations,
        public array $errors,
    ) {
    }
}

<?php

namespace SellingPartnerApi\Seller\SellersV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\SellersV1\Dto\Error;
use SellingPartnerApi\Seller\SellersV1\Dto\MarketplaceParticipation;

final class GetMarketplaceParticipationsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = [
        'payload' => [MarketplaceParticipation::class],
        'errors' => [Error::class],
    ];

    /**
     * @param  MarketplaceParticipation[]|null  $payload  List of marketplace participations.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}

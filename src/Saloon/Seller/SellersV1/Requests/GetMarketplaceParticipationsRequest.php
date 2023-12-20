<?php declare(strict_types=1);

namespace SellingPartnerApi\Saloon\Seller\SellersV1\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

final class GetMarketplaceParticipationsRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/sellers/v1/marketplaceParticipations';
    }
}

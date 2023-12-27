<?php

namespace SellingPartnerApi\Seller\SellersV1\Responses;

use Crescat\SaloonSdkGenerator\Contracts\Deserializable;
use Crescat\SaloonSdkGenerator\Traits\Deserializes;
use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Traits\Responses\HasResponse;

final class GetMarketplaceParticipationsResponse implements Deserializable, WithResponse
{
	use HasResponse;
	use Deserializes;

	/**
	 * @param MarketplaceParticipation[] $marketplaceParticipations List of marketplace participations.
	 * @param Error[] $errors A list of error responses returned when a request is unsuccessful.
	 */
	public function __construct(
		public readonly array $marketplaceParticipations,
		public readonly array $errors,
	) {
	}
}

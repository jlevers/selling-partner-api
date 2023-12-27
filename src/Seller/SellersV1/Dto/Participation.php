<?php

namespace SellingPartnerApi\Seller\SellersV1\Dto;

use Crescat\SaloonSdkGenerator\Contracts\Deserializable;
use Crescat\SaloonSdkGenerator\Traits\Deserializes;

final class Participation implements Deserializable
{
	use Deserializes;

	/**
	 * @param bool $isParticipating
	 * @param bool $hasSuspendedListings Specifies if the seller has suspended listings. True if the seller Listing Status is set to Inactive, otherwise False.
	 */
	public function __construct(
		public readonly bool $isParticipating,
		public readonly bool $hasSuspendedListings,
	) {
	}
}

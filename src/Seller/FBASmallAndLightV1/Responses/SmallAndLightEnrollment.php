<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Responses;

use SellingPartnerApi\Response;

final class SmallAndLightEnrollment extends Response
{
    protected static array $attributeMap = ['sellerSku' => 'sellerSKU'];

    /**
     * @param  string  $marketplaceId  A marketplace identifier.
     * @param  string  $sellerSku  Identifies an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  string  $status  The Small and Light enrollment status of the item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $sellerSku,
        public readonly string $status,
    ) {
    }
}

<?php

namespace SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Reason extends BaseDto
{
    protected static array $complexArrayTypes = ['links' => [Link::class]];

    /**
     * @param  string  $message  A message describing the reason for the restriction.
     * @param  ?string  $reasonCode  A code indicating why the listing is restricted.
     * @param  Link[]|null  $links  A list of path forward links that may allow Selling Partners to remove the restriction.
     */
    public function __construct(
        public readonly string $message,
        public readonly ?string $reasonCode = null,
        public readonly ?array $links = null,
    ) {
    }
}

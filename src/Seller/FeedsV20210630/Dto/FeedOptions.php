<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeedOptions extends BaseDto
{
    public function __construct(string ...$additionalProperties)
    {
        parent::__construct(...$additionalProperties);
    }
}

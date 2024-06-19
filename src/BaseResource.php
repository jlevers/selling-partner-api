<?php

declare(strict_types=1);

namespace SellingPartnerApi;

class BaseResource
{
    public function __construct(
        protected SellingPartnerApi $connector,
    ) {}
}

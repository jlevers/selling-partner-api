<?php

namespace SellingPartnerApi;

class BaseResource
{
    public function __construct(
        protected SellingPartnerApi $connector,
    ) {
    }
}

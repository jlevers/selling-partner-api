<?php

namespace SellingPartnerApi\Seller\ApplicationManagementV20231130;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ApplicationManagementV20231130\Requests\RotateApplicationClientSecret;

class Api extends BaseResource
{
    public function rotateApplicationClientSecret(): Response
    {
        return $this->connector->send(new RotateApplicationClientSecret());
    }
}

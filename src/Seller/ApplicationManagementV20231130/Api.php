<?php

namespace SellingPartnerApi\Seller\ApplicationManagementV20231130;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ApplicationManagementV20231130\Requests\RotateApplicationClientSecret;

class Api extends BaseResource
{
    public function rotateApplicationClientSecret(): Response
    {
        $request = new RotateApplicationClientSecret;

        return $this->connector->send($request);
    }
}

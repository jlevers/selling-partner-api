<?php

namespace SellingPartnerApi\Seller\TokensV20210301;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\TokensV20210301\Dto\CreateRestrictedDataTokenRequest;
use SellingPartnerApi\Seller\TokensV20210301\Requests\CreateRestrictedDataToken;

class Api extends BaseResource
{
    /**
     * @param  CreateRestrictedDataTokenRequest  $createRestrictedDataTokenRequest  The request schema for the createRestrictedDataToken operation.
     */
    public function createRestrictedDataToken(
        CreateRestrictedDataTokenRequest $createRestrictedDataTokenRequest,
    ): Response {
        $request = new CreateRestrictedDataToken($createRestrictedDataTokenRequest);

        return $this->connector->send($request);
    }
}

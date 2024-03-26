<?php

namespace SellingPartnerApi\Seller\AuthorizationV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\AuthorizationV1\Requests\GetAuthorizationCode;

class Api extends BaseResource
{
    /**
     * @param  string  $sellingPartnerId  The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore.
     * @param  string  $developerId  Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central.
     * @param  string  $mwsAuthToken  The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore.
     */
    public function getAuthorizationCode(string $sellingPartnerId, string $developerId, string $mwsAuthToken): Response
    {
        $request = new GetAuthorizationCode($sellingPartnerId, $developerId, $mwsAuthToken);

        return $this->connector->send($request);
    }
}

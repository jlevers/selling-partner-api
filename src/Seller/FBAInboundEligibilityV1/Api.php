<?php

namespace SellingPartnerApi\Seller\FBAInboundEligibilityV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FBAInboundEligibilityV1\Requests\GetItemEligibilityPreview;

class Api extends BaseResource
{
    /**
     * @param  string  $asin  The ASIN of the item for which you want an eligibility preview.
     * @param  string  $program  The program that you want to check eligibility against.
     * @param  ?array  $marketplaceIds  The identifier for the marketplace in which you want to determine eligibility. Required only when program=INBOUND.
     */
    public function getItemEligibilityPreview(string $asin, string $program, ?array $marketplaceIds = null): Response
    {
        $request = new GetItemEligibilityPreview($asin, $program, $marketplaceIds);

        return $this->connector->send($request);
    }
}

<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FBASmallAndLightV1\Dto\SmallAndLightFeePreviewRequest;
use SellingPartnerApi\Seller\FBASmallAndLightV1\Requests\DeleteSmallAndLightEnrollmentBySellerSku;
use SellingPartnerApi\Seller\FBASmallAndLightV1\Requests\GetSmallAndLightEligibilityBySellerSku;
use SellingPartnerApi\Seller\FBASmallAndLightV1\Requests\GetSmallAndLightEnrollmentBySellerSku;
use SellingPartnerApi\Seller\FBASmallAndLightV1\Requests\GetSmallAndLightFeePreview;
use SellingPartnerApi\Seller\FBASmallAndLightV1\Requests\PutSmallAndLightEnrollmentBySellerSku;

class Api extends BaseResource
{
    /**
     * @param  string  $sellerSku  The seller SKU that identifies the item.
     * @param  array  $marketplaceIds  The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only.
     */
    public function getSmallAndLightEnrollmentBySellerSku(string $sellerSku, array $marketplaceIds): Response
    {
        $request = new GetSmallAndLightEnrollmentBySellerSku($sellerSku, $marketplaceIds);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerSku  The seller SKU that identifies the item.
     * @param  array  $marketplaceIds  The marketplace in which to enroll the item. Note: Accepts a single marketplace only.
     */
    public function putSmallAndLightEnrollmentBySellerSku(string $sellerSku, array $marketplaceIds): Response
    {
        $request = new PutSmallAndLightEnrollmentBySellerSku($sellerSku, $marketplaceIds);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerSku  The seller SKU that identifies the item.
     * @param  array  $marketplaceIds  The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only.
     */
    public function deleteSmallAndLightEnrollmentBySellerSku(string $sellerSku, array $marketplaceIds): Response
    {
        $request = new DeleteSmallAndLightEnrollmentBySellerSku($sellerSku, $marketplaceIds);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerSku  The seller SKU that identifies the item.
     * @param  array  $marketplaceIds  The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only.
     */
    public function getSmallAndLightEligibilityBySellerSku(string $sellerSku, array $marketplaceIds): Response
    {
        $request = new GetSmallAndLightEligibilityBySellerSku($sellerSku, $marketplaceIds);

        return $this->connector->send($request);
    }

    /**
     * @param  SmallAndLightFeePreviewRequest  $smallAndLightFeePreviewRequest  Request schema for submitting items for which to retrieve fee estimates.
     */
    public function getSmallAndLightFeePreview(SmallAndLightFeePreviewRequest $smallAndLightFeePreviewRequest): Response
    {
        $request = new GetSmallAndLightFeePreview($smallAndLightFeePreviewRequest);

        return $this->connector->send($request);
    }
}

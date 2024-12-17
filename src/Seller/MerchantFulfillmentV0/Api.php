<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\CreateShipmentRequest;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\GetAdditionalSellerInputsRequest;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\GetEligibleShipmentServicesRequest;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\CancelShipment;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\CreateShipment;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\GetAdditionalSellerInputs;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\GetEligibleShipmentServices;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\GetShipment;

class Api extends BaseResource
{
    /**
     * @param  GetEligibleShipmentServicesRequest  $getEligibleShipmentServicesRequest  Request schema.
     */
    public function getEligibleShipmentServices(
        GetEligibleShipmentServicesRequest $getEligibleShipmentServicesRequest,
    ): Response {
        $request = new GetEligibleShipmentServices($getEligibleShipmentServicesRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The Amazon-defined shipment identifier for the shipment.
     */
    public function getShipment(string $shipmentId): Response
    {
        $request = new GetShipment($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The Amazon-defined shipment identifier for the shipment to cancel.
     */
    public function cancelShipment(string $shipmentId): Response
    {
        $request = new CancelShipment($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateShipmentRequest  $createShipmentRequest  Request schema.
     */
    public function createShipment(CreateShipmentRequest $createShipmentRequest): Response
    {
        $request = new CreateShipment($createShipmentRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  GetAdditionalSellerInputsRequest  $getAdditionalSellerInputsRequest  Request schema.
     */
    public function getAdditionalSellerInputs(
        GetAdditionalSellerInputsRequest $getAdditionalSellerInputsRequest,
    ): Response {
        $request = new GetAdditionalSellerInputs($getAdditionalSellerInputsRequest);

        return $this->connector->send($request);
    }
}

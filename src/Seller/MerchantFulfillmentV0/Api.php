<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\CreateShipmentRequest;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\GetAdditionalSellerInputsRequest;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\GetEligibleShipmentServicesRequest;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\CancelShipment;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\CancelShipmentOld;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\CreateShipment;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\GetAdditionalSellerInputs;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\GetAdditionalSellerInputsOld;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\GetEligibleShipmentServices;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\GetEligibleShipmentServicesOld;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests\GetShipment;

class Api extends BaseResource
{
    /**
     * @param  GetEligibleShipmentServicesRequest  $getEligibleShipmentServicesRequest Request schema.
     */
    public function getEligibleShipmentServicesOld(
        GetEligibleShipmentServicesRequest $getEligibleShipmentServicesRequest,
    ): Response {
        return $this->connector->send(new GetEligibleShipmentServicesOld($getEligibleShipmentServicesRequest));
    }

    /**
     * @param  GetEligibleShipmentServicesRequest  $getEligibleShipmentServicesRequest Request schema.
     */
    public function getEligibleShipmentServices(
        GetEligibleShipmentServicesRequest $getEligibleShipmentServicesRequest,
    ): Response {
        return $this->connector->send(new GetEligibleShipmentServices($getEligibleShipmentServicesRequest));
    }

    /**
     * @param  string  $shipmentId The Amazon-defined shipment identifier for the shipment.
     */
    public function getShipment(string $shipmentId): Response
    {
        return $this->connector->send(new GetShipment($shipmentId));
    }

    /**
     * @param  string  $shipmentId The Amazon-defined shipment identifier for the shipment to cancel.
     */
    public function cancelShipment(string $shipmentId): Response
    {
        return $this->connector->send(new CancelShipment($shipmentId));
    }

    /**
     * @param  string  $shipmentId The Amazon-defined shipment identifier for the shipment to cancel.
     */
    public function cancelShipmentOld(string $shipmentId): Response
    {
        return $this->connector->send(new CancelShipmentOld($shipmentId));
    }

    /**
     * @param  CreateShipmentRequest  $createShipmentRequest Request schema.
     */
    public function createShipment(CreateShipmentRequest $createShipmentRequest): Response
    {
        return $this->connector->send(new CreateShipment($createShipmentRequest));
    }

    /**
     * @param  GetAdditionalSellerInputsRequest  $getAdditionalSellerInputsRequest Request schema.
     */
    public function getAdditionalSellerInputsOld(
        GetAdditionalSellerInputsRequest $getAdditionalSellerInputsRequest,
    ): Response {
        return $this->connector->send(new GetAdditionalSellerInputsOld($getAdditionalSellerInputsRequest));
    }

    /**
     * @param  GetAdditionalSellerInputsRequest  $getAdditionalSellerInputsRequest Request schema.
     */
    public function getAdditionalSellerInputs(
        GetAdditionalSellerInputsRequest $getAdditionalSellerInputsRequest,
    ): Response {
        return $this->connector->send(new GetAdditionalSellerInputs($getAdditionalSellerInputsRequest));
    }
}

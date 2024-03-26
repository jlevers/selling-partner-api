<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto\SubmitInvoiceRequest;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Requests\GetInvoiceStatus;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Requests\GetShipmentDetails;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Requests\SubmitInvoice;

class Api extends BaseResource
{
    /**
     * @param  string  $shipmentId  The identifier for the shipment. Get this value from the FBAOutboundShipmentStatus notification. For information about subscribing to notifications, see the [Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide).
     */
    public function getShipmentDetails(string $shipmentId): Response
    {
        $request = new GetShipmentDetails($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The identifier for the shipment.
     * @param  SubmitInvoiceRequest  $submitInvoiceRequest  The request schema for the submitInvoice operation.
     */
    public function submitInvoice(string $shipmentId, SubmitInvoiceRequest $submitInvoiceRequest): Response
    {
        $request = new SubmitInvoice($shipmentId, $submitInvoiceRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The shipment identifier for the shipment.
     */
    public function getInvoiceStatus(string $shipmentId): Response
    {
        $request = new GetInvoiceStatus($shipmentId);

        return $this->connector->send($request);
    }
}

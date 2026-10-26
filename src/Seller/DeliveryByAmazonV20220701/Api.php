<?php

namespace SellingPartnerApi\Seller\DeliveryByAmazonV20220701;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\DeliveryByAmazonV20220701\Dto\SubmitInvoiceRequest;
use SellingPartnerApi\Seller\DeliveryByAmazonV20220701\Requests\GetInvoiceStatus;
use SellingPartnerApi\Seller\DeliveryByAmazonV20220701\Requests\SubmitInvoice;

class Api extends BaseResource
{
    /**
     * @param  SubmitInvoiceRequest  $submitInvoiceRequest  The request schema for the `submitInvoice` operation.
     * @param  ?string  $orderId  The identifier for the order.
     * @param  ?string  $shipmentId  The identifier for the shipment.
     */
    public function submitInvoice(
        SubmitInvoiceRequest $submitInvoiceRequest,
        ?string $orderId = null,
        ?string $shipmentId = null,
    ): Response {
        $request = new SubmitInvoice($submitInvoiceRequest, $orderId, $shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $marketplaceId  The Amazon store identifier.
     * @param  string  $invoiceType  The invoice's type.
     * @param  string  $programType  The Amazon program that seller is currently enrolled.
     * @param  ?string  $orderId  The order identifier.
     * @param  ?string  $shipmentId  The shipment identifier.
     * @param  ?string  $invoiceId  The invoice access key (NF-e access key for Brazilian invoices). Use this to retrieve the status of a specific invoice.
     */
    public function getInvoiceStatus(
        string $marketplaceId,
        string $invoiceType,
        string $programType,
        ?string $orderId = null,
        ?string $shipmentId = null,
        ?string $invoiceId = null,
    ): Response {
        $request = new GetInvoiceStatus($marketplaceId, $invoiceType, $programType, $orderId, $shipmentId, $invoiceId);

        return $this->connector->send($request);
    }
}

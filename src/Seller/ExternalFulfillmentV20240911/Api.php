<?php

namespace SellingPartnerApi\Seller\ExternalFulfillmentV20240911;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Dto\Package;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Dto\PackageDeliveryStatus;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Dto\Packages;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Dto\ShipLabelsInput;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Dto\ShipmentAcknowledgementRequest;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Requests\CreatePackages;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Requests\GenerateInvoice;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Requests\GenerateShipLabels;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Requests\GetShipment;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Requests\GetShipments;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Requests\ProcessShipment;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Requests\RetrieveInvoice;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Requests\RetrieveShippingOptions;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Requests\UpdatePackage;
use SellingPartnerApi\Seller\ExternalFulfillmentV20240911\Requests\UpdatePackageStatus;

class Api extends BaseResource
{
    /**
     * @param  string  $status  The status of shipment you want to include in the response. To retrieve all new shipments, set this value to `CREATED` or `ACCEPTED`.
     * @param  ?string  $locationId  The Amazon channel location identifier for the shipments you want to retrieve.
     * @param  ?string  $marketplaceId  The marketplace ID associated with the location. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?string  $channelName  The channel name associated with the location.
     * @param  ?\DateTimeInterface  $lastUpdatedAfter  The response includes shipments whose latest update is after the specified time. In [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?\DateTimeInterface  $lastUpdatedBefore  The response includes shipments whose latest update is before the specified time. In [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?int  $maxResults  The maximum number of shipments to include in the response.
     * @param  ?string  $paginationToken  A token that you use to retrieve the next page of results. The response includes `nextToken` when there are multiple pages of results. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     */
    public function getShipments(
        string $status,
        ?string $locationId = null,
        ?string $marketplaceId = null,
        ?string $channelName = null,
        ?\DateTimeInterface $lastUpdatedAfter = null,
        ?\DateTimeInterface $lastUpdatedBefore = null,
        ?int $maxResults = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new GetShipments($status, $locationId, $marketplaceId, $channelName, $lastUpdatedAfter, $lastUpdatedBefore, $maxResults, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The ID of the shipment you want to retrieve.
     */
    public function getShipment(string $shipmentId): Response
    {
        $request = new GetShipment($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The ID of the shipment you want to confirm or reject.
     * @param  ShipmentAcknowledgementRequest  $shipmentAcknowledgementRequest  Information about the shipment and its line items, used to confirm or reject line items.
     * @param  string  $operation  The status of the shipment.
     */
    public function processShipment(
        string $shipmentId,
        ShipmentAcknowledgementRequest $shipmentAcknowledgementRequest,
        string $operation,
    ): Response {
        $request = new ProcessShipment($shipmentId, $shipmentAcknowledgementRequest, $operation);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The ID of the shipment.
     * @param  Packages  $packages  The request schema of the `createPackages` operation.
     */
    public function createPackages(string $shipmentId, Packages $packages): Response
    {
        $request = new CreatePackages($shipmentId, $packages);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The ID of the shipment to which the package belongs.
     * @param  string  $packageId  The ID of the package whose information you want to update.
     * @param  Package  $package  A package that is created to ship one or more of a shipment's line items.
     */
    public function updatePackage(string $shipmentId, string $packageId, Package $package): Response
    {
        $request = new UpdatePackage($shipmentId, $packageId, $package);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The ID of the shipment to which the package belongs.
     * @param  string  $packageId  The ID of the package whose status you want to update.
     * @param  PackageDeliveryStatus  $packageDeliveryStatus  The delivery status of the package.
     * @param  ?string  $status  **DEPRECATED**. Do not use. Package status is defined in the body parameter.
     */
    public function updatePackageStatus(
        string $shipmentId,
        string $packageId,
        PackageDeliveryStatus $packageDeliveryStatus,
        ?string $status = null,
    ): Response {
        $request = new UpdatePackageStatus($shipmentId, $packageId, $packageDeliveryStatus, $status);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The ID of the shipment to which the package belongs.
     * @param  string  $packageId  The ID of the package for which you want to retrieve shipping options.
     */
    public function retrieveShippingOptions(string $shipmentId, string $packageId): Response
    {
        $request = new RetrieveShippingOptions($shipmentId, $packageId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The ID of the shipment whose invoice you want to retrieve.
     */
    public function retrieveInvoice(string $shipmentId): Response
    {
        $request = new RetrieveInvoice($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The ID of the shipment whose invoice you want.
     */
    public function generateInvoice(string $shipmentId): Response
    {
        $request = new GenerateInvoice($shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The ID of the shipment whose shipping labels you want to generate and retrieve.
     * @param  ShipLabelsInput  $shipLabelsInput  Tracking details for multiple packages.
     * @param  string  $operation  Specify whether you want to generate or regenerate a label.
     * @param  ?string  $shippingOptionId  The ID of the shipping option whose shipping labels you want.
     */
    public function generateShipLabels(
        string $shipmentId,
        ShipLabelsInput $shipLabelsInput,
        string $operation,
        ?string $shippingOptionId = null,
    ): Response {
        $request = new GenerateShipLabels($shipmentId, $shipLabelsInput, $operation, $shippingOptionId);

        return $this->connector->send($request);
    }
}

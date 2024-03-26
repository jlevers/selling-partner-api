<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\GetLabelsResponse;

/**
 * getLabels
 */
class GetLabels extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  string  $pageType  The page type to use to print the labels. Submitting a PageType value that is not supported in your marketplace returns an error.
     * @param  string  $labelType  The type of labels requested.
     * @param  ?int  $numberOfPackages  The number of packages in the shipment.
     * @param  ?array  $packageLabelsToPrint  A list of identifiers that specify packages for which you want package labels printed.
     *
     * Must match CartonId values previously passed using the FBA Inbound Shipment Carton Information Feed. If not, the operation returns the IncorrectPackageIdentifier error code.
     * @param  ?int  $numberOfPallets  The number of pallets in the shipment. This returns four identical labels for each pallet.
     * @param  ?int  $pageSize  The page size for paginating through the total packages' labels. This is a required parameter for Non-Partnered LTL Shipments. Max value:1000.
     * @param  ?int  $pageStartIndex  The page start index for paginating through the total packages' labels. This is a required parameter for Non-Partnered LTL Shipments.
     */
    public function __construct(
        protected string $shipmentId,
        protected string $pageType,
        protected string $labelType,
        protected ?int $numberOfPackages = null,
        protected ?array $packageLabelsToPrint = null,
        protected ?int $numberOfPallets = null,
        protected ?int $pageSize = null,
        protected ?int $pageStartIndex = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'PageType' => $this->pageType,
            'LabelType' => $this->labelType,
            'NumberOfPackages' => $this->numberOfPackages,
            'PackageLabelsToPrint' => $this->packageLabelsToPrint,
            'NumberOfPallets' => $this->numberOfPallets,
            'PageSize' => $this->pageSize,
            'PageStartIndex' => $this->pageStartIndex,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/fba/inbound/v0/shipments/{$this->shipmentId}/labels";
    }

    public function createDtoFromResponse(Response $response): GetLabelsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetLabelsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}

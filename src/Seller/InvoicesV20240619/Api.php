<?php

namespace SellingPartnerApi\Seller\InvoicesV20240619;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\InvoicesV20240619\Dto\ExportInvoicesRequest;
use SellingPartnerApi\Seller\InvoicesV20240619\Requests\CreateInvoicesExport;
use SellingPartnerApi\Seller\InvoicesV20240619\Requests\GetInvoice;
use SellingPartnerApi\Seller\InvoicesV20240619\Requests\GetInvoices;
use SellingPartnerApi\Seller\InvoicesV20240619\Requests\GetInvoicesAttributes;
use SellingPartnerApi\Seller\InvoicesV20240619\Requests\GetInvoicesDocument;
use SellingPartnerApi\Seller\InvoicesV20240619\Requests\GetInvoicesExport;
use SellingPartnerApi\Seller\InvoicesV20240619\Requests\GetInvoicesExports;

class Api extends BaseResource
{
    /**
     * @param  string  $marketplaceId  The marketplace identifier.
     */
    public function getInvoicesAttributes(string $marketplaceId): Response
    {
        $request = new GetInvoicesAttributes($marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $invoicesDocumentId  The export document identifier.
     */
    public function getInvoicesDocument(string $invoicesDocumentId): Response
    {
        $request = new GetInvoicesDocument($invoicesDocumentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $marketplaceId  The returned exports match the specified marketplace.
     * @param  ?\DateTimeInterface  $dateStart  The earliest export creation date and time for exports that you want to include in the response. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The default is 30 days ago.
     * @param  ?string  $nextToken  The response includes `nextToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     * @param  ?int  $pageSize  The maximum number of invoices to return in a single call.
     *
     * Minimum: 1
     *
     * Maximum: 100
     * @param  ?\DateTimeInterface  $dateEnd  The latest export creation date and time for exports that you want to include in the response. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The default value is the time of the request.
     * @param  ?string  $status  Return exports matching the status specified.
     */
    public function getInvoicesExports(
        string $marketplaceId,
        ?\DateTimeInterface $dateStart = null,
        ?string $nextToken = null,
        ?int $pageSize = null,
        ?\DateTimeInterface $dateEnd = null,
        ?string $status = null,
    ): Response {
        $request = new GetInvoicesExports($marketplaceId, $dateStart, $nextToken, $pageSize, $dateEnd, $status);

        return $this->connector->send($request);
    }

    /**
     * @param  ExportInvoicesRequest  $exportInvoicesRequest  The information required to create the export request.
     */
    public function createInvoicesExport(ExportInvoicesRequest $exportInvoicesRequest): Response
    {
        $request = new CreateInvoicesExport($exportInvoicesRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $exportId  The unique identifier for the export.
     */
    public function getInvoicesExport(string $exportId): Response
    {
        $request = new GetInvoicesExport($exportId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $marketplaceId  The response includes only the invoices that match the specified marketplace.
     * @param  ?string  $transactionIdentifierName  The name of the transaction identifier filter. If you provide a value for this field, you must also provide a value for the `transactionIdentifierId` field.Use the `getInvoicesAttributes` operation to check `transactionIdentifierName` options.
     * @param  ?int  $pageSize  The maximum number of invoices you want to return in a single call.
     *
     * Minimum: 1
     *
     * Maximum: 200
     * @param  ?\DateTimeInterface  $dateEnd  The latest invoice creation date for invoices that you want to include in the response. Dates are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The default is the current date-time.
     * @param  ?string  $transactionType  The marketplace-specific classification of the transaction type for which the invoice was created. Use the `getInvoicesAttributes` operation to check `transactionType` options.
     * @param  ?string  $transactionIdentifierId  The ID of the transaction identifier filter. If you provide a value for this field, you must also provide a value for the `transactionIdentifierName` field.
     * @param  ?\DateTimeInterface  $dateStart  The earliest invoice creation date for invoices that you want to include in the response. Dates are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The default is 24 hours prior to the time of the request.
     * @param  ?string  $series  Return invoices with the specified series number.
     * @param  ?string  $nextToken  The response includes `nextToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     * @param  ?string  $sortOrder  Sort the invoices in the response in ascending or descending order.
     * @param  ?string  $invoiceType  The marketplace-specific classification of the invoice type. Use the `getInvoicesAttributes` operation to check `invoiceType` options.
     * @param  ?array  $statuses  A list of statuses that you can use to filter invoices. Use the `getInvoicesAttributes` operation to check invoice status options.
     *
     * Min count: 1
     * @param  ?string  $externalInvoiceId  Return invoices that match this external ID. This is typically the Government Invoice ID.
     * @param  ?string  $sortBy  The attribute by which you want to sort the invoices in the response.
     */
    public function getInvoices(
        string $marketplaceId,
        ?string $transactionIdentifierName = null,
        ?int $pageSize = null,
        ?\DateTimeInterface $dateEnd = null,
        ?string $transactionType = null,
        ?string $transactionIdentifierId = null,
        ?\DateTimeInterface $dateStart = null,
        ?string $series = null,
        ?string $nextToken = null,
        ?string $sortOrder = null,
        ?string $invoiceType = null,
        ?array $statuses = null,
        ?string $externalInvoiceId = null,
        ?string $sortBy = null,
    ): Response {
        $request = new GetInvoices($marketplaceId, $transactionIdentifierName, $pageSize, $dateEnd, $transactionType, $transactionIdentifierId, $dateStart, $series, $nextToken, $sortOrder, $invoiceType, $statuses, $externalInvoiceId, $sortBy);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $invoiceId  The invoice identifier.
     * @param  string  $marketplaceId  The marketplace from which you want the invoice.
     */
    public function getInvoice(string $invoiceId, string $marketplaceId): Response
    {
        $request = new GetInvoice($invoiceId, $marketplaceId);

        return $this->connector->send($request);
    }
}

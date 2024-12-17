<?php

namespace SellingPartnerApi\Seller\DataKioskV20231115;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\DataKioskV20231115\Dto\CreateQuerySpecification;
use SellingPartnerApi\Seller\DataKioskV20231115\Requests\CancelQuery;
use SellingPartnerApi\Seller\DataKioskV20231115\Requests\CreateQuery;
use SellingPartnerApi\Seller\DataKioskV20231115\Requests\GetDocument;
use SellingPartnerApi\Seller\DataKioskV20231115\Requests\GetQueries;
use SellingPartnerApi\Seller\DataKioskV20231115\Requests\GetQuery;

class Api extends BaseResource
{
    /**
     * @param  ?array  $processingStatuses  A list of processing statuses used to filter queries.
     * @param  ?int  $pageSize  The maximum number of queries to return in a single call.
     * @param  ?\DateTimeInterface  $createdSince  The earliest query creation date and time for queries to include in the response, in ISO 8601 date time format. The default is 90 days ago.
     * @param  ?\DateTimeInterface  $createdUntil  The latest query creation date and time for queries to include in the response, in ISO 8601 date time format. The default is the time of the `getQueries` request.
     * @param  ?string  $paginationToken  A token to fetch a certain page of results when there are multiple pages of results available. The value of this token is fetched from the `pagination.nextToken` field returned in the `GetQueriesResponse` object. All other parameters must be provided with the same values that were provided with the request that generated this token, with the exception of `pageSize` which can be modified between calls to `getQueries`. In the absence of this token value, `getQueries` returns the first page of results.
     */
    public function getQueries(
        ?array $processingStatuses = null,
        ?int $pageSize = null,
        ?\DateTimeInterface $createdSince = null,
        ?\DateTimeInterface $createdUntil = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new GetQueries($processingStatuses, $pageSize, $createdSince, $createdUntil, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateQuerySpecification  $createQuerySpecification  Information required to create the query.
     */
    public function createQuery(CreateQuerySpecification $createQuerySpecification): Response
    {
        $request = new CreateQuery($createQuerySpecification);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $queryId  The query identifier.
     */
    public function getQuery(string $queryId): Response
    {
        $request = new GetQuery($queryId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $queryId  The identifier for the query. This identifier is unique only in combination with a selling partner account ID.
     */
    public function cancelQuery(string $queryId): Response
    {
        $request = new CancelQuery($queryId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $documentId  The identifier for the Data Kiosk document.
     */
    public function getDocument(string $documentId): Response
    {
        $request = new GetDocument($documentId);

        return $this->connector->send($request);
    }
}

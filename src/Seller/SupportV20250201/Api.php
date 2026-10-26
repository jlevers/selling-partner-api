<?php

namespace SellingPartnerApi\Seller\SupportV20250201;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\SupportV20250201\Dto\ListCasesRequest;
use SellingPartnerApi\Seller\SupportV20250201\Requests\GetCase;
use SellingPartnerApi\Seller\SupportV20250201\Requests\ListCases;
use SellingPartnerApi\Seller\SupportV20250201\Requests\ListContacts;

class Api extends BaseResource
{
    /**
     * @param  ListCasesRequest  $listCasesRequest  The request body for the listCases operation.
     */
    public function listCases(ListCasesRequest $listCasesRequest): Response
    {
        $request = new ListCases($listCasesRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $caseId  The case identifier.
     */
    public function getCase(string $caseId): Response
    {
        $request = new GetCase($caseId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $caseId  The case identifier.
     * @param  ?int  $maxResults  The maximum number of results to include in the response.
     * @param  ?string  $nextToken  A token to retrieve the next page of results. The response includes `nextToken` when the number of results exceeds the specified `maxResults` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     * @param  ?string  $sortOrder  Sort the returned contacts by `createdDate` in either ascending or descending order.
     */
    public function listContacts(
        string $caseId,
        ?int $maxResults = null,
        ?string $nextToken = null,
        ?string $sortOrder = null,
    ): Response {
        $request = new ListContacts($caseId, $maxResults, $nextToken, $sortOrder);

        return $this->connector->send($request);
    }
}

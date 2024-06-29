<?php

namespace SellingPartnerApi\Vendor\InvoicesV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\InvoicesV1\Dto\SubmitInvoicesRequest;
use SellingPartnerApi\Vendor\InvoicesV1\Requests\SubmitInvoices;

class Api extends BaseResource
{
    /**
     * @param  SubmitInvoicesRequest  $submitInvoicesRequest  The request schema for the `submitInvoices` operation.
     */
    public function submitInvoices(SubmitInvoicesRequest $submitInvoicesRequest): Response
    {
        $request = new SubmitInvoices($submitInvoicesRequest);

        return $this->connector->send($request);
    }
}

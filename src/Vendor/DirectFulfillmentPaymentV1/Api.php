<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto\SubmitInvoiceRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Requests\SubmitInvoice;

class Api extends BaseResource
{
    /**
     * @param  SubmitInvoiceRequest  $submitInvoiceRequest The request schema for the submitInvoice operation.
     */
    public function submitInvoice(SubmitInvoiceRequest $submitInvoiceRequest): Response
    {
        return $this->connector->send(new SubmitInvoice($submitInvoiceRequest));
    }
}

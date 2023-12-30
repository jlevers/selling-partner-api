<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto\GenerateOrderScenarioRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Requests\GenerateOrderScenarios;
use SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Requests\GetOrderScenarios;

class Api extends BaseResource
{
    /**
     * @param  GenerateOrderScenarioRequest  $generateOrderScenarioRequest The request body for the generateOrderScenarios operation.
     */
    public function generateOrderScenarios(GenerateOrderScenarioRequest $generateOrderScenarioRequest): Response
    {
        return $this->connector->send(new GenerateOrderScenarios($generateOrderScenarioRequest));
    }

    /**
     * @param  string  $transactionId The transaction identifier returned in the response to the generateOrderScenarios operation.
     */
    public function getOrderScenarios(string $transactionId): Response
    {
        return $this->connector->send(new GetOrderScenarios($transactionId));
    }
}

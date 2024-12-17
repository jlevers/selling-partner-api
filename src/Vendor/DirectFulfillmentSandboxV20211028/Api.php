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
     * @param  GenerateOrderScenarioRequest  $generateOrderScenarioRequest  The `generateOrderScenarios` request body.
     */
    public function generateOrderScenarios(GenerateOrderScenarioRequest $generateOrderScenarioRequest): Response
    {
        $request = new GenerateOrderScenarios($generateOrderScenarioRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $transactionId  The transaction identifier returned in the response for the `generateOrderScenarios` operation.
     */
    public function getOrderScenarios(string $transactionId): Response
    {
        $request = new GetOrderScenarios($transactionId);

        return $this->connector->send($request);
    }
}

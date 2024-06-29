<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto\SubmitInventoryUpdateRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Requests\SubmitInventoryUpdate;

class Api extends BaseResource
{
    /**
     * @param  string  $warehouseId  Identifier for the warehouse for which to update inventory.
     * @param  SubmitInventoryUpdateRequest  $submitInventoryUpdateRequest  The request body for the `submitInventoryUpdate` operation.
     */
    public function submitInventoryUpdate(
        string $warehouseId,
        SubmitInventoryUpdateRequest $submitInventoryUpdateRequest,
    ): Response {
        $request = new SubmitInventoryUpdate($warehouseId, $submitInventoryUpdateRequest);

        return $this->connector->send($request);
    }
}

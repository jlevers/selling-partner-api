<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CreateScheduledPackagesResponse extends BaseResponse
{
    /**
     * @param  Package[]  $scheduledPackages A list of packages. Refer to the `Package` object.
     * @param  RejectedOrder[]  $rejectedOrders A list of orders we couldn't scheduled on your behalf. Each element contains the reason and details on the error.
     * @param  string  $printableDocumentsUrl A pre-signed URL for the zip document containing the shipping labels and the documents enabled for your marketplace.
     */
    public function __construct(
        public readonly array $scheduledPackages,
        public readonly array $rejectedOrders,
        public readonly string $printableDocumentsUrl,
    ) {
    }
}

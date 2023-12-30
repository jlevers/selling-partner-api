<?php

namespace SellingPartnerApi\Seller\FBAInboundEligibilityV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundEligibilityV1\Dto\ItemEligibilityPreview;

final class GetItemEligibilityPreviewResponse extends BaseResponse
{
    /**
     * @param  ItemEligibilityPreview  $payload The response object which contains the ASIN, marketplaceId if required, eligibility program, the eligibility status (boolean), and a list of ineligibility reason codes.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ItemEligibilityPreview $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}

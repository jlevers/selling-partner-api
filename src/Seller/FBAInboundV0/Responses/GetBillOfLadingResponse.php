<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\BillOfLadingDownloadUrl;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\Error;

final class GetBillOfLadingResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?BillOfLadingDownloadUrl  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?BillOfLadingDownloadUrl $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}

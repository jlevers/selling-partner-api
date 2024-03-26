<?php

namespace SellingPartnerApi\Seller\TokensV20210301\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CreateRestrictedDataTokenResponse extends BaseResponse
{
    /**
     * @param  ?string  $restrictedDataToken  A Restricted Data Token (RDT). This is a short-lived access token that authorizes calls to restricted operations. Pass this value with the x-amz-access-token header when making subsequent calls to these restricted resources.
     * @param  ?int  $expiresIn  The lifetime of the Restricted Data Token, in seconds.
     */
    public function __construct(
        public readonly ?string $restrictedDataToken = null,
        public readonly ?int $expiresIn = null,
    ) {
    }
}

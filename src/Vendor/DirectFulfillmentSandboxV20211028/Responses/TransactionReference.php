<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Responses;

use SellingPartnerApi\Response;

final class TransactionReference extends Response
{
    /**
     * @param  ?string  $transactionId
     */
    public function __construct(
        public readonly ?string $transactionId = null,
    ) {
    }
}

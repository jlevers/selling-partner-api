<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class TransactionReference extends Dto
{
    /**
     * @param  ?string  $transactionId  GUID assigned by Buyer to identify this transaction. This value can be used with the Transaction Status API to return the status of this transaction.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
    ) {
    }
}

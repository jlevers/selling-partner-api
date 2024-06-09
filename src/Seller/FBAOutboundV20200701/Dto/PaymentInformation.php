<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class PaymentInformation extends Dto
{
    /**
     * @param  string  $paymentTransactionId  The transaction identifier of this payment.
     * @param  string  $paymentMode  The transaction mode of this payment.
     * @param  DateTime  $paymentDate
     */
    public function __construct(
        public readonly string $paymentTransactionId,
        public readonly string $paymentMode,
        public readonly \DateTime $paymentDate,
    ) {
    }
}

<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PaymentExecutionDetailItem extends BaseDto
{
    protected static array $attributeMap = ['payment' => 'Payment', 'paymentMethod' => 'PaymentMethod'];

    /**
     * @param  Money  $payment  The monetary value of the order.
     * @param  string  $paymentMethod  A sub-payment method for a COD order.
     *
     * Possible values:
     * * `COD`: Cash On Delivery.
     * * `GC`: Gift Card.
     * * `PointsAccount`: Amazon Points.
     * * `Invoice`: Invoice.
     */
    public function __construct(
        public readonly Money $payment,
        public readonly string $paymentMethod,
    ) {
    }
}

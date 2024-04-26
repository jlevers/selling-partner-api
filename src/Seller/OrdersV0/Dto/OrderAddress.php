<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class OrderAddress extends Dto
{
    protected static array $attributeMap = [
        'amazonOrderId' => 'AmazonOrderId',
        'buyerCompanyName' => 'BuyerCompanyName',
        'shippingAddress' => 'ShippingAddress',
        'deliveryPreferences' => 'DeliveryPreferences',
    ];

    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ?string  $buyerCompanyName  Company Name of the Buyer.
     * @param  ?Address  $shippingAddress  The shipping address for the order.
     * @param  ?DeliveryPreferences  $deliveryPreferences  Contains all of the delivery instructions provided by the customer for the shipping address.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly ?string $buyerCompanyName = null,
        public readonly ?Address $shippingAddress = null,
        public readonly ?DeliveryPreferences $deliveryPreferences = null,
    ) {
    }
}

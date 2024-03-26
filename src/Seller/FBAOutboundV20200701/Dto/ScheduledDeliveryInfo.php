<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ScheduledDeliveryInfo extends BaseDto
{
    protected static array $complexArrayTypes = ['deliveryWindows' => [DeliveryWindow::class]];

    /**
     * @param  string  $deliveryTimeZone  The time zone of the destination address for the fulfillment order preview. Must be an IANA time zone name. Example: Asia/Tokyo.
     * @param  DeliveryWindow[]  $deliveryWindows  An array of delivery windows.
     */
    public function __construct(
        public readonly string $deliveryTimeZone,
        public readonly array $deliveryWindows,
    ) {
    }
}

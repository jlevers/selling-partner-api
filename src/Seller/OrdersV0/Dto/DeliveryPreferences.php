<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class DeliveryPreferences extends Dto
{
    protected static array $attributeMap = [
        'dropOffLocation' => 'DropOffLocation',
        'preferredDeliveryTime' => 'PreferredDeliveryTime',
        'otherAttributes' => 'OtherAttributes',
        'addressInstructions' => 'AddressInstructions',
    ];

    /**
     * @param  ?string  $dropOffLocation  Drop-off location selected by the customer.
     * @param  ?PreferredDeliveryTime  $preferredDeliveryTime  The time window when the delivery is preferred.
     * @param  ?string[]  $otherAttributes  Enumerated list of miscellaneous delivery attributes associated with the shipping address.
     * @param  ?string  $addressInstructions  Building instructions, nearby landmark or navigation instructions.
     */
    public function __construct(
        public readonly ?string $dropOffLocation = null,
        public readonly ?PreferredDeliveryTime $preferredDeliveryTime = null,
        public readonly ?array $otherAttributes = null,
        public readonly ?string $addressInstructions = null,
    ) {
    }
}

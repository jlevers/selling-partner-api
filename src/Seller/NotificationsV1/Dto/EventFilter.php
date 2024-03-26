<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class EventFilter extends BaseDto
{
    /**
     * @param  string  $eventFilterType  An eventFilterType value that is supported by the specific notificationType. This is used by the subscription service to determine the type of event filter. Refer to the section of the [Notifications Use Case Guide](doc:notifications-api-v1-use-case-guide) that describes the specific notificationType to determine if an eventFilterType is supported.
     * @param  ?AggregationSettings  $aggregationSettings  A container that holds all of the necessary properties to configure the aggregation of notifications.
     * @param  ?string[]  $marketplaceIds  A list of marketplace identifiers to subscribe to (e.g. ATVPDKIKX0DER). To receive notifications in every marketplace, do not provide this list.
     * @param  ?string[]  $orderChangeTypes  A list of order change types to subscribe to (e.g. BuyerRequestedChange). To receive notifications of all change types, do not provide this list.
     */
    public function __construct(
        public readonly string $eventFilterType,
        public readonly ?AggregationSettings $aggregationSettings = null,
        public readonly ?array $marketplaceIds = null,
        public readonly ?array $orderChangeTypes = null,
    ) {
    }
}

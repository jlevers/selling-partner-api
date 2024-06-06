<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use SellingPartnerApi\Dto;

final class ProcessingDirective extends Dto
{
    /**
     * @param  ?EventFilter  $eventFilter  A `notificationType` specific filter. This object contains all of the currently available filters and properties that you can use to define a `notificationType` specific filter.
     */
    public function __construct(
        public readonly ?EventFilter $eventFilter = null,
    ) {
    }
}

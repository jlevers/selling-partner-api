<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AppIntegrationsV20240401\Responses;

use SellingPartnerApi\Response;

final class CreateNotificationResponse extends Response
{
    /**
     * @param  ?string  $notificationId  The unique identifier assigned to each notification.
     */
    public function __construct(
        public readonly ?string $notificationId = null,
    ) {}
}

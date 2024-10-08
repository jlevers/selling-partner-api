<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AppIntegrationsV20240401\Dto;

use SellingPartnerApi\Dto;

final class CreateNotificationRequest extends Dto
{
    /**
     * @param  string  $templateId  The unique identifier of the notification template you used to onboard your application.
     * @param  array[]  $notificationParameters  The dynamic parameters required by the notification templated specified by `templateId`.
     * @param  ?string  $marketplaceId  An encrypted marketplace identifier for the posted notification.
     */
    public function __construct(
        public string $templateId,
        public array $notificationParameters,
        public ?string $marketplaceId = null,
    ) {}
}

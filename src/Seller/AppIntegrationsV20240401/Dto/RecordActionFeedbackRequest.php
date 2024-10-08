<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AppIntegrationsV20240401\Dto;

use SellingPartnerApi\Dto;

final class RecordActionFeedbackRequest extends Dto
{
    /**
     * @param  string  $feedbackActionCode  The unique identifier for each notification status.
     */
    public function __construct(
        public string $feedbackActionCode,
    ) {}
}

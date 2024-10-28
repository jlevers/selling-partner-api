<?php

declare(strict_types=1);

namespace SellingPartnerApi\Enums;

use SellingPartnerApi\Traits\EnumTrait;

enum GrantlessScope: string
{
    use EnumTrait;

    case NOTIFICATIONS = 'sellingpartnerapi::notifications';
    case TOKEN_MIGRATION = 'sellingpartnerapi::migration';
    case ROTATE_TOKEN = 'sellingpartnerapi::client_credentials:rotation';
}

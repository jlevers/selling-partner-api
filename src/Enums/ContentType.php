<?php

declare(strict_types=1);

namespace SellingPartnerApi\Enums;

use SellingPartnerApi\Traits\EnumTrait;

enum ContentType: string
{
    use EnumTrait;

    case CSV = 'text/csv';
    case JSON = 'application/json';
    case PDF = 'application/pdf';
    case PLAIN = 'text/plain';
    case TAB = 'text/tab-separated-values';
    case XLSX = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
    case XML = 'text/xml';
}

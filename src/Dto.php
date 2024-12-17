<?php

declare(strict_types=1);

namespace SellingPartnerApi;

use SellingPartnerApi\Contracts\Deserializable;
use SellingPartnerApi\Traits\Deserializes;
use SellingPartnerApi\Traits\HasArrayableAttributes;

class Dto implements Deserializable
{
    use Deserializes;
    use HasArrayableAttributes;
}

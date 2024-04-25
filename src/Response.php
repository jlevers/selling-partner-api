<?php

declare(strict_types=1);

namespace SellingPartnerApi;

use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Traits\Responses\HasResponse;
use SellingPartnerApi\Contracts\Deserializable;
use SellingPartnerApi\Traits\Deserializes;

abstract class Response implements Deserializable, WithResponse
{
    use Deserializes;
    use HasResponse;
}

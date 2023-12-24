<?php

declare(strict_types=1);

namespace SellingPartnerApi\Authentication;

use DateTime;

class AccessToken
{
    /**
     * @param  string  $token  Access token to use
     * @param  DateTime  $expires  UTC datetime when the token expires
     */
    public function __construct(public string $token, public DateTime $expiresAt)
    {
    }

    public function expired(): bool
    {
        return $this->expiresAt < (new DateTime());
    }
}

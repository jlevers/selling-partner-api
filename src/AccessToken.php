<?php declare(strict_types=1);

namespace SellingPartnerApi;

use DateTime;

class AccessToken
{
    public string $accessToken;
    public DateTime $expiresAt;

    /**
     * @param string  $accessToken  Access token to use
     * @param DateTime  $expires  UTC datetime when the token expires
     */
    public function __construct(string $accessToken, DateTime $expiresAt)
    {
        $this->accessToken = $accessToken;
        $this->expiresAt = $expiresAt;
    }

    public function expired(): bool
    {
        return $this->expiresAt < (new DateTime());
    }
}

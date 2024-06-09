<?php

declare(strict_types=1);

namespace SellingPartnerApi\Authentication;

use SellingPartnerApi\Contracts\TokenCache;

class InMemoryTokenCache implements TokenCache
{
    /** @var AccessTokenAuthenticator[] */
    private static array $tokens = [];

    public function get(string $key): AccessTokenAuthenticator|false
    {
        $authenticator = self::$tokens[$key] ?? false;
        if (! $authenticator || $authenticator->hasExpired()) {
            return false;
        }

        return $authenticator;
    }

    public function set(string $key, AccessTokenAuthenticator $authenticator): void
    {
        self::$tokens[$key] = $authenticator;
    }

    public function forget(string $key): void
    {
        unset(self::$tokens[$key]);
    }

    public function clear(): void
    {
        self::$tokens = [];
    }
}

<?php

declare(strict_types=1);

namespace SellingPartnerApi\Contracts;

use SellingPartnerApi\Authentication\AccessTokenAuthenticator;

interface TokenCache
{
    /**
     * Get an authenticator (with any tokens) from the cache. Return false if the key is missing or expired.
     */
    public function get(string $key): AccessTokenAuthenticator|false;

    /**
     * Set a value in the cache.
     */
    public function set(string $key, AccessTokenAuthenticator $authenticator): void;

    /**
     * Remove a value from the cache.
     */
    public function forget(string $key): void;

    /**
     * Clear the cache.
     */
    public function clear(): void;
}

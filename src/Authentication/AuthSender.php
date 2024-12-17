<?php

declare(strict_types=1);

namespace SellingPartnerApi\Authentication;

use GuzzleHttp\Client;
use Saloon\Http\Senders\GuzzleSender;

class AuthSender extends GuzzleSender
{
    public function __construct(?Client $client = null)
    {
        if (! $client) {
            parent::__construct();
        }
    }
}

<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use SellingPartnerApi\Dto;

final class GetMessagingActionResponse extends Dto
{
    protected static array $attributeMap = ['links' => '_links', 'embedded' => '_embedded'];

    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Links  $links
     * @param  ?Embedded  $embedded
     * @param  ?MessagingAction  $payload  A simple object containing the name of the template.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Links $links = null,
        public readonly ?Embedded $embedded = null,
        public readonly ?MessagingAction $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}

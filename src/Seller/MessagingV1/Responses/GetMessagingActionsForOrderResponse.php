<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\MessagingV1\Dto\Embedded;
use SellingPartnerApi\Seller\MessagingV1\Dto\ErrorList;
use SellingPartnerApi\Seller\MessagingV1\Dto\Links;

final class GetMessagingActionsForOrderResponse extends Response
{
    protected static array $attributeMap = ['links' => '_links', 'embedded' => '_embedded'];

    /**
     * @param  ?Links  $links  The links response that is associated with the specified `amazonOrderId`.
     * @param  ?Embedded  $embedded  The messaging actions response that is associated with the specified `amazonOrderId`.
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Links $links = null,
        public readonly ?Embedded $embedded = null,
        public readonly ?ErrorList $errors = null,
    ) {}
}

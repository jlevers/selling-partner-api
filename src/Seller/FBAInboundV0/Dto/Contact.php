<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Contact extends BaseDto
{
    /**
     * @param  string  $name The name of the contact person.
     * @param  string  $phone The phone number of the contact person.
     * @param  string  $email The email address of the contact person.
     * @param  string  $fax The fax number of the contact person.
     */
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $phone = null,
        public readonly ?string $email = null,
        public readonly ?string $fax = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

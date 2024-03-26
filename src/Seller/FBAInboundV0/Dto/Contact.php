<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Contact extends BaseDto
{
    protected static array $attributeMap = ['name' => 'Name', 'phone' => 'Phone', 'email' => 'Email', 'fax' => 'Fax'];

    /**
     * @param  string  $name  The name of the contact person.
     * @param  string  $phone  The phone number of the contact person.
     * @param  string  $email  The email address of the contact person.
     * @param  ?string  $fax  The fax number of the contact person.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $phone,
        public readonly string $email,
        public readonly ?string $fax = null,
    ) {
    }
}

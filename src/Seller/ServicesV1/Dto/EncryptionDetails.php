<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class EncryptionDetails extends BaseDto
{
    /**
     * @param  string  $standard The encryption standard required to encrypt or decrypt the document contents.
     * @param  string  $initializationVector The vector to encrypt or decrypt the document contents using Cipher Block Chaining (CBC).
     * @param  string  $key The encryption key used to encrypt or decrypt the document contents.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $standard,
        public readonly string $initializationVector,
        public readonly string $key,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

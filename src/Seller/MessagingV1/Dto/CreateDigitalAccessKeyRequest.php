<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use SellingPartnerApi\Dto;

final class CreateDigitalAccessKeyRequest extends Dto
{
    protected static array $complexArrayTypes = ['attachments' => Attachment::class];

    /**
     * @param  ?string  $text  The text that is sent to the buyer. Only links that are related to the digital access key are allowed. Do not include HTML or email addresses. The text must be written in the buyer's preferred language, which you can retrieve from the `GetAttributes` operation.
     * @param  Attachment[]|null  $attachments  Attachments that you want to include in the message to the buyer.
     */
    public function __construct(
        public ?string $text = null,
        public ?array $attachments = null,
    ) {}
}

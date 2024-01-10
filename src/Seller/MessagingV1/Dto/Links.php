<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Links extends BaseDto
{
    protected static array $complexArrayTypes = ['actions' => [LinkObject::class]];

    /**
     * @param  LinkObject  $self A Link object.
     * @param  LinkObject[]  $actions Eligible actions for the specified amazonOrderId.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly LinkObject $self,
        public readonly ?array $actions = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

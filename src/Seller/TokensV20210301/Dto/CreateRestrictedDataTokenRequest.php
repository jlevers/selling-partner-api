<?php

namespace SellingPartnerApi\Seller\TokensV20210301\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateRestrictedDataTokenRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['restrictedResources' => [RestrictedResource::class]];

    /**
     * @param  RestrictedResource[]  $restrictedResources  A list of restricted resources.
     *                                                     Maximum: 50
     * @param  ?string  $targetApplication  The application ID for the target application to which access is being delegated.
     */
    public function __construct(
        public readonly array $restrictedResources,
        public readonly ?string $targetApplication = null,
    ) {
    }
}

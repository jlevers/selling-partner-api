<?php

namespace SellingPartnerApi\Seller\TokensV20210301\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateRestrictedDataTokenRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['restrictedResources' => [RestrictedResource::class]];

    /**
     * @param  ?string  $targetApplication The application ID for the target application to which access is being delegated.
     * @param  RestrictedResource[]  $restrictedResources A list of restricted resources.
     * Maximum: 50
     */
    public function __construct(
        public readonly ?string $targetApplication = null,
        public readonly ?array $restrictedResources = null,
    ) {
    }
}

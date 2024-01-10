<?php

namespace SellingPartnerApi\Seller\SolicitationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetSchemaResponse extends BaseDto
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Links  $links
     * @param  ?Schema  $payload A JSON schema document describing the expected payload of the action. This object can be validated against <a href=http://json-schema.org/draft-04/schema>http://json-schema.org/draft-04/schema</a>.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?Links $links = null,
        public readonly ?Schema $payload = null,
        public readonly ?array $errors = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}

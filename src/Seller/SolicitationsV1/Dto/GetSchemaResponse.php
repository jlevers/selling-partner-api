<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SolicitationsV1\Dto;

use SellingPartnerApi\Dto;

final class GetSchemaResponse extends Dto
{
    protected static array $attributeMap = ['links' => '_links'];

    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Links  $links
     * @param  ?array[]  $payload  A JSON schema document describing the expected payload of the action. This object can be validated against <a href=http://json-schema.org/draft-04/schema>http://json-schema.org/draft-04/schema</a>.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Links $links = null,
        public readonly ?array $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}

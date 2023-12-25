<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator;

use cebe\openapi\spec\Operation;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Data\Generator\Method;
use Crescat\SaloonSdkGenerator\Parsers\OpenApiParser;
use Illuminate\Support\Str;

class Parser extends OpenApiParser
{
    // public static function build($content): self
    // {
    //     // TODO: Use this method to run customizations on the models?
    //     return parent::build($content);
    // }

    protected function parseEndpoint(Operation $operation, $pathParams, string $path, string $method): ?Endpoint
    {
        return new Endpoint(
            name: trim($operation->operationId ?: $operation->summary ?: ''),
            method: Method::parse($method),
            pathSegments: Str::of($path)->replace('{', ':')->remove('}')->trim('/')->explode('/')->toArray(),
            // In the real-world, people USUALLY only use one tag...
            collection: ($operation->tags[0].strtoupper($this->openApi->info->version)) ?? null,
            response: null, // TODO: implement "definition" parsing
            description: $operation->description,
            queryParameters: $this->mapParams($operation->parameters, 'query'),
            // TODO: Check if this differs between spec versions
            pathParameters: $pathParams + $this->mapParams($operation->parameters, 'path'),
            bodyParameters: [], // TODO: implement "definition" parsing
        );
    }
}

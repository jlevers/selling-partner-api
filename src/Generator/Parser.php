<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator;

use cebe\openapi\Reader;
use cebe\openapi\ReferenceContext;
use cebe\openapi\spec\Operation;
use cebe\openapi\spec\Paths;
use cebe\openapi\spec\Responses;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Data\Generator\Method;
use Crescat\SaloonSdkGenerator\Parsers\OpenApiParser;
use Illuminate\Support\Str;

class Parser extends OpenApiParser
{
    public static function build($content): static
    {
        $spec = Str::endsWith($content, '.json')
            ? Reader::readFromJsonFile(fileName: realpath($content), resolveReferences: ReferenceContext::RESOLVE_MODE_ALL)
            : Reader::readFromYamlFile(fileName: realpath($content), resolveReferences: ReferenceContext::RESOLVE_MODE_ALL);

        $paths = new Paths([]);
        foreach ($spec->paths as $name => $path) {
            foreach ($path->getOperations() as $method => $operation) {
                $responses = new Responses([]);
                foreach ($operation->responses as $code => $response) {
                    if (! $response->content) {
                        continue;
                    }

                    $content = [];
                    foreach ($response->content as $contentType => $mediaType) {
                        // Sometimes Amazon puts response payload examples in the response content list,
                        // which is not valid OpenAPI spec
                        if ($contentType === 'payload') {
                            continue;
                        }
                        $content[$contentType] = $mediaType;
                    }
                    $response->content = $content;
                    $responses->addResponse($code, $response);
                }
                $operation->responses = $responses;
                $path->{$method} = $operation;
            }
            $paths->addPath($name, $path);
        }
        $spec->paths = $paths;

        return new static($spec);
    }

    protected function parseEndpoint(Operation $operation, $pathParams, string $path, string $method): ?Endpoint
    {
        return new Endpoint(
            name: trim($operation->operationId ?: $operation->summary ?: ''),
            method: Method::parse($method),
            pathSegments: Str::of($path)->replace('{', ':')->remove('}')->trim('/')->explode('/')->toArray(),
            // In the real-world, people USUALLY only use one tag...
            collection: ($operation->tags[0].strtoupper($this->openApi->info->version)) ?? null,
            responses: $this->mapResponses($operation->responses),
            description: $operation->description,
            queryParameters: $this->mapParams($operation->parameters, 'query'),
            // TODO: Check if this differs between spec versions
            pathParameters: $pathParams + $this->mapParams($operation->parameters, 'path'),
            bodyParameters: [], // TODO: implement "definition" parsing
        );
    }
}

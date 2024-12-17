<?php

declare(strict_types=1);

namespace SellingPartnerApi\Traits;

use DateTimeInterface;
use ReflectionClass;
use SellingPartnerApi\Exceptions\InvalidAttributeTypeException;

trait HasArrayableAttributes
{
    use HasComplexArrayTypes;

    protected static string $datetimeFormat = 'Y-m-d\TH:i:s\Z';

    /**
     * @var array{string, string}
     *
     * A mapping of internal attribute names to their original names per the API specification.
     */
    protected static array $attributeMap = [];

    public function toArray(): array
    {
        $constructor = (new ReflectionClass(static::class))->getConstructor();
        if (! $constructor) {
            throw new InvalidAttributeTypeException('Class to be deserialized must have a constructor');
        }
        $reflectionParams = $constructor->getParameters() ?? [];

        $attributeTypes = [];
        foreach ($reflectionParams as $param) {
            $name = $param->getName();
            $type = $param->getType()->getName();

            // `array` could either be read as a simple PHP array, or a typed array that
            // we want to deserialize into an array of objects
            if ($type === 'array') {
                $type = static::getArrayType($name);
            }

            $attributeTypes[$name] = $type;
        }

        $asArray = [];
        foreach ($attributeTypes as $name => $type) {
            $attributeAsArray = $this->valueToArray($this->{$name}, $type);
            if ($name === 'additionalProperties') {
                $asArray = array_merge($asArray, $attributeAsArray);
            } else {
                $originalName = static::$attributeMap[$name] ?? $name;
                $asArray[$originalName] = $attributeAsArray;
            }
        }

        return array_filter($asArray, fn ($v) => $v !== null);
    }

    public function valueToArray(mixed $value, array|string $type): mixed
    {
        if (is_null($value)) {
            return null;
        } elseif ($value instanceof DateTimeInterface) {
            return $value->format(static::$datetimeFormat);
        } elseif (is_string($type)) {
            if (class_exists($type)) {
                return $value->toArray();
            }

            return $value;
        } elseif (is_array($type)) {
            // Handle optional complex array types
            if ($value === null) {
                return null;
            }

            $arrayified = [];
            foreach ($value as $item) {
                $arrayified[] = $this->valueToArray($item, $type[0]);
            }

            return $arrayified;
        }

        throw new InvalidAttributeTypeException("Unrecognized attribute type `$type`");
    }
}

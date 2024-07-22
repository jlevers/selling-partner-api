<?php

declare(strict_types=1);

namespace SellingPartnerApi\Traits;

use DateTime;
use ReflectionClass;
use ReflectionUnionType;
use SellingPartnerApi\Exceptions\InvalidAttributeTypeException;

trait Deserializes
{
    use HasComplexArrayTypes;

    public static function deserialize(mixed $data): mixed
    {
        if (is_null($data)) {
            return null;
        }

        $reflectionClass = new ReflectionClass(static::class);
        $constructor = $reflectionClass->getConstructor();
        if (! $constructor) {
            throw new InvalidAttributeTypeException('Class to be deserialized must have a constructor');
        }
        $reflectionParams = $constructor->getParameters() ?? [];

        $attributeTypes = [];
        $deserializedParams = [];
        foreach ($reflectionParams as $param) {
            $name = $param->getName();
            $paramType = $param->getType();

            // Handle Union Types
            if ($paramType instanceof ReflectionUnionType) {
                $types = array_map(fn($t) => $t->getName(), $paramType->getTypes());
            } else {
                $types = [$paramType->getName()];
            }

            // Handle array types separately
            if (in_array('array', $types)) {
                $types = array_map(fn($t) => $t === 'array' ? static::getArrayType($name) : $t, $types);
            }

            $attributeTypes[$name] = $types;
        }

        $hasAttributeMap = $reflectionClass->hasProperty('attributeMap');
        $attributeMap = $hasAttributeMap
            ? array_flip($reflectionClass->getProperty('attributeMap')->getValue())
            : [];
        $unknownKeys = [];

        foreach ($data as $rawKey => $value) {
            $key = $rawKey;
            if ($hasAttributeMap) {
                $key = $attributeMap[$rawKey] ?? $key;
            }

            if (! array_key_exists($key, $attributeTypes)) {
                $unknownKeys[] = $key;
                continue;
            }
            $deserializedParams[$key] = static::deserializeValue($value, $attributeTypes[$key]);
        }

        if (count($unknownKeys) > 0) {
            $cls = static::class;
            echo "Warning: Unknown keys when deserializing into $cls: " . implode(', ', $unknownKeys) . "\n";
        }

        return new static(...$deserializedParams);
    }

    protected static function deserializeValue(mixed $value, array|string $types): mixed
    {
        foreach ($types as $type) {
            if ($type === 'null' && $value === null) {
                return null;
            }

            if ($type === 'array') {
                return $value;
            }

            // Handle simple types
            $_value = match ($type) {
                'int' => (int) $value,
                'float' => (float) $value,
                'bool' => (bool) $value,
                'string' => (string) $value,
                'date', 'datetime' => DateTime::createFromFormat(DateTime::RFC3339, $value),
                'mixed' => $value,
                'null' => null,
                default => chr(0),
            };

            if ($_value !== chr(0)) {
                return $_value;
            }

            // Handle complex array types
            if (is_array($type)) {
                $typeLen = count($type);
                if ($typeLen !== 1) {
                    throw new InvalidAttributeTypeException(
                        "Complex array type must have a single value (the type of the array items), $typeLen given"
                    );
                }

                $deserialized = [];
                foreach ($value as $item) {
                    $deserialized[] = static::deserializeValue($item, [$type[0]]);
                }

                return $deserialized;
            }

            // Handle complex types
            if (! class_exists($type)) {
                throw new InvalidAttributeTypeException("Class `$type` does not exist");
            } elseif ($type === DateTime::class) {
                return DateTime::createFromFormat(DateTime::RFC3339, $value);
            }

            // Deserialize complex type
            $deserialized = $type::deserialize($value);
            return $deserialized;
        }

        throw new InvalidAttributeTypeException("Invalid types `$types`");
    }
}

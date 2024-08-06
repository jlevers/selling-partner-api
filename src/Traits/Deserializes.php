<?php

declare(strict_types=1);

namespace SellingPartnerApi\Traits;

use DateTime;
use DateTimeInterface;
use DateTimeZone;
use ReflectionClass;
use SellingPartnerApi\Exceptions\InvalidAttributeTypeException;
use SellingPartnerApi\Exceptions\UnknownDatetimeFormatException;

trait Deserializes
{
    use HasComplexArrayTypes;

    protected static array $validDatetimeFormats = [
        'Y-m-d\TH:i:s\Z',
        DATE_ATOM,
        'Y-m-d\TH:i:s.vp',
        'Y-m-d\TH:i\Z',
        'Y-m-d',
    ];

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
            $type = $param->getType()->getName();

            // `array` could either be read as a simple PHP array, or a typed array that
            // we want to deserialize into an array of objects
            if ($type === 'array') {
                $type = static::getArrayType($name);
            }

            $attributeTypes[$name] = $type;
        }

        $hasAttributeMap = $reflectionClass->hasProperty('attributeMap');
        $attributeMap = $hasAttributeMap
            ? array_flip($reflectionClass->getProperty('attributeMap')->getValue())
            : [];

        foreach ($data as $rawKey => $value) {
            $key = $rawKey;
            if ($hasAttributeMap) {
                $key = $attributeMap[$rawKey] ?? $key;
            }

            if (! array_key_exists($key, $attributeTypes)) {
                continue;
            }
            $deserializedParams[$key] = static::deserializeValue($value, $attributeTypes[$key]);
        }

        return new static(...$deserializedParams);
    }

    protected static function deserializeValue(mixed $value, array|string $type): mixed
    {
        if (is_string($type)) {
            // Not using SimpleType enum to avoid needing to import the enum in the generated code
            $_value = match ($type) {
                'int' => (int) $value,
                'float' => (float) $value,
                'bool' => (bool) $value,
                'string' => (string) $value,
                'date', 'datetime' => static::convertValueToDateTime($value),
                'array', 'mixed' => $value,
                'null' => null,
                default => chr(0),
            };

            if ($_value !== chr(0)) {
                return $_value;
            }

            if (! class_exists($type) && ! interface_exists($type)) {
                throw new InvalidAttributeTypeException("Neither the Class nor Interface `$type` exists");
            } elseif ($type == DateTimeInterface::class) {
                return static::convertValueToDateTime($value);
            }

            $deserialized = $type::deserialize($value);

            return $type::deserialize($value);
        } elseif (is_array($type)) {
            if ($value === null) {
                return null;
            }

            $deserialized = [];
            foreach ($value as $item) {
                $deserialized[] = static::deserializeValue($item, $type[0]);
            }

            return $deserialized;
        }

        throw new InvalidAttributeTypeException("Invalid type `$type`");
    }

    protected static function convertValueToDateTime(string $value): DateTime
    {
        foreach (static::$validDatetimeFormats as $validDatetimeFormat) {
            try {
                $returnValue = DateTime::createFromFormat(
                    $validDatetimeFormat,
                    $value,
                    new DateTimeZone('UTC')
                );
                // Only return a valid object, else try again until failure
                if ($returnValue instanceof DateTimeInterface) {
                    return $returnValue;
                }

                continue;
            } catch (\Exception) {
                // continue with the next format if there's one
                continue;
            }
        }

        throw new UnknownDatetimeFormatException("The value `$value` uses a unknown DateTime format.");
    }
}

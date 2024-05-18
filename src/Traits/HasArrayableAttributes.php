<?php

declare(strict_types=1);

namespace SellingPartnerApi\Traits;

use DateTime;
use ReflectionClass;
use SellingPartnerApi\Exceptions\InvalidAttributeTypeException;

trait HasArrayableAttributes
{
    use HasComplexArrayTypes;

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
                $originalName = $this->attributeMap[$name] ?? $name;
                $asArray[$originalName] = $attributeAsArray;
            }
        }

        return $asArray;
    }

    public function valueToArray(mixed $value, array|string $type): mixed
    {
        if (is_null($value)) {
            return null;
        } elseif ($value instanceof DateTime) {
            return $this->toZuluString($value);
        } elseif (is_string($type)) {
            if (class_exists($type)) {
                return $value->toArray();
            }

            return $value;
        } elseif (is_array($type)) {
            $typeLen = count($type);

            if ($typeLen !== 1) {
                throw new InvalidAttributeTypeException(
                    "Complex array type must have a single value (the type of the array items), $typeLen given"
                );
            }

            $arrayified = [];
            foreach ($value as $item) {
                $arrayified[] = $this->valueToArray($item, $type[0]);
            }

            return $arrayified;
        }

        throw new InvalidAttributeTypeException("Unrecognized attribute type `$type`");
    }

    private function toZuluString(\DateTime $dateTime)
    {
        $dt = clone $dateTime;
        $dt->setTimezone(new \DateTimeZone("UTC"));

        return $dt->format('Y-m-d\TH:i:s\Z');
    }
}

<?php

namespace Crescat\SaloonSdkGenerator;

use ReflectionClass;
use ReflectionProperty;
use DateTime;

abstract class BaseDto implements \JsonSerializable
{
    protected static array $complexArrayTypes = [];
    protected static array $attributeMap = [];

    // No constructor - let child classes handle their own typed constructors

    public function toArray(): array
    {
        $result = [];
        $reflection = new ReflectionClass($this);
        
        foreach ($reflection->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
            if ($property->isStatic()) {
                continue;
            }
            
            $key = $property->getName();
            if (!$property->isInitialized($this)) {
                continue;
            }
            
            $value = $property->getValue($this);
            
            if ($value === null) {
                continue;
            }
            
            // Convert property name to camelCase for JSON
            $jsonKey = $this->toCamelCase($key);
            
            if ($value instanceof self) {
                $result[$jsonKey] = $value->toArray();
            } elseif ($value instanceof DateTime) {
                $result[$jsonKey] = $value->format('Y-m-d\TH:i:s\Z');
            } elseif (is_array($value)) {
                $result[$jsonKey] = array_map(function ($item) {
                    if ($item instanceof self) {
                        return $item->toArray();
                    } elseif ($item instanceof DateTime) {
                        return $item->format('Y-m-d\TH:i:s\Z');
                    }
                    return $item;
                }, $value);
            } else {
                $result[$jsonKey] = $value;
            }
        }
        
        return $result;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    protected function toCamelCase(string $string): string
    {
        // Convert snake_case or PascalCase to camelCase
        $string = str_replace('_', '', ucwords($string, '_'));
        return lcfirst($string);
    }
}


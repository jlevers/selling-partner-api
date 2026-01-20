<?php

namespace Crescat\SaloonSdkGenerator;

use ReflectionClass;
use ReflectionProperty;
use DateTime;

abstract class BaseResponse implements \JsonSerializable
{
    protected static array $complexArrayTypes = [];
    protected static array $attributeMap = [];

    // No constructor - let child classes handle their own typed constructors

    /**
     * Deserialize JSON data into a response object
     */
    public static function deserialize(array $data, string $class): self
    {
        $reflection = new ReflectionClass($class);
        $constructor = $reflection->getConstructor();
        
        if (!$constructor) {
            return new $class();
        }
        
        $params = [];
        foreach ($constructor->getParameters() as $param) {
            $paramName = $param->getName();
            
            // Try different key formats (camelCase, snake_case, PascalCase)
            $value = $data[$paramName] 
                ?? $data[self::toSnakeCase($paramName)] 
                ?? $data[ucfirst($paramName)] 
                ?? null;
            
            if ($value === null && $param->isDefaultValueAvailable()) {
                $params[] = $param->getDefaultValue();
            } else {
                $params[] = $value;
            }
        }
        
        return $reflection->newInstanceArgs($params);
    }

    /**
     * Convert camelCase to snake_case
     */
    protected static function toSnakeCase(string $string): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $string));
    }

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
            
            if (is_object($value) && method_exists($value, 'toArray')) {
                $result[$jsonKey] = $value->toArray();
            } elseif ($value instanceof DateTime) {
                $result[$jsonKey] = $value->format('Y-m-d\TH:i:s\Z');
            } elseif (is_array($value)) {
                $result[$jsonKey] = array_map(function ($item) {
                    if (is_object($item) && method_exists($item, 'toArray')) {
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






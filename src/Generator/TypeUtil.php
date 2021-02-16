<?php

namespace Ujamii\OpenImmo\Generator;

class TypeUtil
{
    /**
     * @param string $type
     *
     * @return string
     */
    public static function getTypeForSerializer(string $type): string
    {
        $isPlural = substr($type, -2) == '[]';
        $singular = str_replace('[]', '', $type);
        switch ($singular) {

            case 'string':
            case 'float':
            case 'int':
            case 'array':
            case 'boolean':
            case 'dateTime':
            case '\DateTime':
                $type = $singular;
                break;

            case 'decimal':
                $type = 'float';
                break;

            default:
                $ns   = 'Ujamii\\OpenImmo\\API\\';
                $type = $ns . $singular;
                break;

        }

        if ($isPlural) {
            $type = 'array<' . $type . '>';
        }

        return $type;
    }

    /**
     * @param string $input
     * @param bool $lcFirst
     * @param array<string> $separators
     *
     * @return string
     */
    public static function camelize(string $input, $lcFirst = false, $separators = ['-', '_']): string
    {
        $camel = str_replace($separators, '', ucwords($input, implode('', $separators)));
        if ($lcFirst) {
            $camel = lcfirst($camel);
        }

        return $camel;
    }
}
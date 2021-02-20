<?php

namespace Ujamii\OpenImmo\Generator;

use GoetasWebservices\XML\XSDReader\Schema\Type\ComplexType;
use GoetasWebservices\XML\XSDReader\Schema\Type\ComplexTypeSimpleContent;
use GoetasWebservices\XML\XSDReader\Schema\Type\Type;

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
                $type = $singular;
                break;

            case 'positiveInteger':
                $type = 'int';
                break;

            case 'bool':
            case 'boolean':
                $type = 'bool';
                break;

            case 'dateTime':
            case '\DateTime':
                $type = 'DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>';
                break;

            case 'date':
                $type = 'DateTime<\'Y-m-d\'>';
                break;

            case 'decimal':
                $type = 'float';
                break;

            case 'kontakt':
            case 'base64Binary':
                $type = 'string';
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
     * @param string $propertyType
     *
     * @return string
     */
    public static function getValidPhpType(string $propertyType): string
    {
        switch ($propertyType) {

            case 'decimal':
                $propertyType = 'float';
                break;

            case 'boolean':
                $propertyType = 'bool';
                break;

            case 'positiveInteger':
                $propertyType = 'int';
                break;

            case 'date':
            case 'dateTime':
                $propertyType = '\DateTime';
                break;

            case 'kontakt':
            case 'base64Binary':
                $propertyType = 'string';
                break;
        }

        return $propertyType;
    }

    /**
     * @param Type $typeFromXsd
     * @param string|null $propertyName
     *
     * @return string|null
     */
    public static function extractTypeForPhp(Type $typeFromXsd, ?string $propertyName = null): ?string
    {
        $type = 'string';

        if ($typeFromXsd->getName() != '') {
            $type = $typeFromXsd->getName();
        } else {
            if ($typeFromXsd instanceof ComplexType) {
                if (null !== $propertyName) {
                    return ucfirst($propertyName);
                }
            } else {
                if ($typeFromXsd instanceof ComplexTypeSimpleContent) {
                    // is default string
                } else {
                    if ($typeFromXsd->getRestriction()->getBase() != '') {
                        $type = $typeFromXsd->getRestriction()->getBase()->getName();
                    }
                }
            }
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
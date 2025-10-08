<?php

namespace Ujamii\OpenImmo\Generator;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Property;

class CodeGenUtil
{
    public const DESCRIPTION_PART_DELIMTER = PHP_EOL;

    /**
     * Adds a new description part to the given class property.
     */
    public static function addDescriptionPart(Property $classProperty, string $descriptionPart, string $separator = self::DESCRIPTION_PART_DELIMTER): void
    {
        if ('' === trim($descriptionPart)) {
            return;
        }
        $comment = $classProperty->getComment() ?? '';
        if ('' === trim($comment)) {
            $currentDescriptionParts = [];
        } else {
            $currentDescriptionParts = explode($separator ?: self::DESCRIPTION_PART_DELIMTER, $comment);
        }
        $currentDescriptionParts[] = $descriptionPart;
        $classProperty->setComment(implode($separator, $currentDescriptionParts));
    }

    public static function generateGetterAndSetter(Property $property, ClassType $class, bool $fluentApi = true, bool $nullable = false): void
    {
        self::generateGetter($property, $class, $nullable);
        self::generateSetter($property, $class, $fluentApi, $nullable);
    }

    public static function generateGetter(Property $property, ClassType $class, bool $nullable): void
    {
        $propertyType = $property->getType();
        $returnsArray = $propertyType === 'array';
        $getter       = $class->addMethod('get' . ucfirst($property->getName()));
        if ($returnsArray) {
            $getterCode = 'return $this->' . $property->getName() . ';';
            $getter->setBody($getterCode)
                   ->setReturnType('array')
                   ->addComment('Returns array of ' . str_replace('[]', '', $propertyType))
                   ->setReturnNullable(false);
        } else {
            $getterCode = 'return $this->' . $property->getName() . ';';
            $getter->setBody($getterCode)
                   ->setReturnType($propertyType)
                   ->setReturnNullable($nullable);
        }
    }

    public static function generateSetter(Property $property, ClassType $class, bool $fluentApi, bool $nullable): void
    {
        $setter   = $class->addMethod('set' . ucfirst($property->getName()));
        $propertyType = $property->getType();
        $isPlural = $propertyType === 'array';

        $setter->addParameter($property->getName())
                                 ->setType($isPlural ? 'array' : $propertyType)
                                 ->setNullable($isPlural ? false : $nullable);

        $setterCode = '$this->' . $property->getName() . ' = $' . $property->getName() . ';';
        if ($fluentApi) {
            $setter->setReturnType('\\' . TypeUtil::OPENIMMO_NAMESPACE . $class->getName());
            $setterCode .= PHP_EOL . 'return $this;';
        }
        $setter->setBody($setterCode);
    }

    public static function getAnnotationFromProperty(Property $property, string $annotation): ?string
    {
        $commentLines = explode(self::DESCRIPTION_PART_DELIMTER, $property->getComment() ?? '');
        foreach ($commentLines as $commentLine) {
            if (strpos($commentLine, "@{$annotation}") === 0) {
                return str_replace("@{$annotation} ", '', $commentLine);
            }
        }

        return null;
    }
}

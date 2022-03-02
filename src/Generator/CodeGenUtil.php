<?php

namespace Ujamii\OpenImmo\Generator;

use gossi\codegen\model\PhpClass;
use gossi\codegen\model\PhpMethod;
use gossi\codegen\model\PhpParameter;
use gossi\codegen\model\PhpProperty;
use gossi\docblock\tags\TagFactory;

class CodeGenUtil
{
    /**
     * Adds a new description part to the given class property.
     *
     * @param PhpProperty $classProperty
     * @param string $descriptionPart
     * @param string $separator
     *
     * @return void
     */
    public static function addDescriptionPart(PhpProperty $classProperty, string $descriptionPart, string $separator = ', '): void
    {
        if ('' === trim($descriptionPart)) {
            return;
        }
        if ('' === trim($classProperty->getTypeDescription())) {
            $currentDescriptionParts = [];
        } else {
            $currentDescriptionParts = explode($separator ?: ',', $classProperty->getTypeDescription());
        }
        $currentDescriptionParts[] = $descriptionPart;
        $classProperty->setTypeDescription(implode($separator, $currentDescriptionParts));
    }

    /**
     * @param PhpProperty $property
     * @param PhpClass $class
     * @param bool $fluentApi
     * @param bool $nullable
     */
    public static function generateGetterAndSetter(PhpProperty $property, PhpClass $class, bool $fluentApi = true, bool $nullable = true): void
    {
        self::generateSetter($property, $class, $fluentApi, $nullable);
        self::generateGetter($property, $class, $nullable);
    }

    /**
     * @param PhpProperty $property
     * @param PhpClass $class
     * @param bool $nullable
     */
    public static function generateGetter(PhpProperty $property, PhpClass $class, bool $nullable): void
    {
        $returnsArray = substr($property->getType(), -2) === '[]';
        $getter       = PhpMethod::create('get' . ucfirst($property->getName()));
        if ($returnsArray) {
            $getterCode = 'return $this->' . $property->getName() . ' ?? [];';
            $getter->setBody($getterCode);
            $getter->setType('array');
            $getter->setDescription('Returns array of ' . str_replace('[]', '', $property->getType()));
            $getter->setNullable(false);
        } else {
            $getterCode = 'return $this->' . $property->getName() . ';';
            $getter->setBody($getterCode);
            $getter->setType($property->getType());
            $getter->setNullable($nullable);
        }
        $class->setMethod($getter);
    }

    /**
     * @param PhpProperty $property
     * @param PhpClass $class
     * @param bool $fluentApi
     * @param bool $nullable
     */
    public static function generateSetter(PhpProperty $property, PhpClass $class, bool $fluentApi, bool $nullable): void
    {
        $setter   = PhpMethod::create('set' . ucfirst($property->getName()));
        $isPlural = substr($property->getType(), -2) === '[]';

        $parameter = PhpParameter::create($property->getName())
                                 ->setType($isPlural ? 'array' : $property->getType())
                                 ->setNullable($isPlural ? false : $nullable)
                                 ->setDescription('Setter for ' . $property->getName());
        $setter->addParameter($parameter);
        $setterCode = '$this->' . $property->getName() . ' = $' . $property->getName() . ';';
        if ($fluentApi) {
            $setterCode .= PHP_EOL . 'return $this;';
            $setter->getDocblock()->appendTag(TagFactory::create('return', $class->getName()));
        }
        $setter->setBody($setterCode);
        $class->setMethod($setter);
    }
}

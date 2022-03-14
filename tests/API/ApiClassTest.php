<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\Tests\API;

use Nette\PhpGenerator\ClassType;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Finder\Finder;
use Ujamii\OpenImmo\Generator\TypeUtil;

class ApiClassTest extends TestCase
{
    /**
     * Instead of creating 100+ test classes containing almost the same code for all
     * the api class objects (basically just DTOs), this could easily be automated, so here we go.
     */
    public function testClassProperty()
    {
        $finder = new Finder();
        $finder->files()->name('*.php')->in('src/API/');

        foreach ($finder as $file) {
            /** @var ClassType $phpClass */
            $phpClass = ClassType::fromCode(file_get_contents($file->getRealPath()));
            foreach ($phpClass->getProperties() as $property) {
                $this->automateTestClassProperties($phpClass->getName(), $property->getName(), $property->getType());
            }
        }
    }

    /**
     * This automation creates a new instance of the given class and tests the
     * setter and getter for the given property.
     *
     * @param string $className
     * @param string $propertyName
     * @param string $type
     */
    protected function automateTestClassProperties(string $className, string $propertyName, string $type)
    {
        $typeWithNs = TypeUtil::OPENIMMO_NAMESPACE . $className;
        $subject = new $typeWithNs();
        $testValue = $this->getExampleData($type);
        $return = $subject->{'set' . ucfirst($propertyName)}($testValue);
        $this->assertEquals($testValue, $subject->{'get' . ucfirst($propertyName)}());
        $this->assertEquals($subject, $return);
    }

    /**
     * @param string $type
     *
     * @return array|bool|bool[]|\DateTime|\DateTime[]|float|float[]|int|int[]|object|object[]|string|string[]
     */
    protected function getExampleData(string $type)
    {
        $isPlural = substr($type, -2) === '[]';
        $singular = str_replace('[]', '', $type);
        switch ($singular) {
            case 'string':
                $value = 'foobar';
                break;

            case 'float':
                $value = (float) mt_rand() / (float) mt_getrandmax();
                break;

            case 'int':
                $value = random_int(0, 10000);
                break;

            case 'bool':
                $value = (bool) random_int(0, 2);
                break;

            case 'array':
                $value = [42];
                break;

            case '\\DateTime':
                $value = new \DateTime();
                break;

            default:
                $value = new $singular();
        }

        if ($isPlural) {
            $value = [$value];
        }
        return $value;
    }
}

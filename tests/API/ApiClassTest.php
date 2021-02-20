<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\Tests\API;

use gossi\codegen\model\PhpClass;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Finder\Finder;
use Ujamii\OpenImmo\API;

class ApiClassTest extends TestCase
{
    public function testClassProperty()
    {
        $finder = new Finder();
        $finder->files()->name('*.php')->in('src/API/');

        foreach ($finder as $file) {
            $phpClass = PhpClass::fromFile($file->getRealPath());
            foreach ($phpClass->getProperties() as $property) {
                $this->automateTestClassProperties($phpClass->getName(), $property->getName(), $property->getType());
            }
        }
    }

    protected function automateTestClassProperties(string $className, string $propertyName, string $type = 'string')
    {
        $typeWithNs = "Ujamii\\OpenImmo\\API\\{$className}";
        $subject = new $typeWithNs;
        $testValue = $this->getExampleData($type);
        $return = $subject->{'set' . ucfirst($propertyName)}($testValue);
        $this->assertEquals($testValue, $subject->{'get' . ucfirst($propertyName)}());
        $this->assertEquals($subject, $return);
    }

    protected function getExampleData(string $type)
    {
        $isPlural = substr($type, -2) == '[]';
        $singular = str_replace('[]', '', $type);
        switch ($singular) {
            case 'string':
                $value = 'foobar';
                break;

            case 'float':
                $value = (float) mt_rand() / (float) mt_getrandmax();
                break;

            case 'int':
                $value = (int) mt_rand(0, 10000);
                break;

            case 'bool':
                $value = (bool) mt_rand(0, 2);
                break;

            case '\\DateTime':
                $value = new \DateTime();
                break;

            default:
                $typeWithNs = "Ujamii\\OpenImmo\\API\\{$singular}";
                $value = new $typeWithNs();
        }

        if ($isPlural) {
            $value = [$value];
        }
        return $value;
    }

}
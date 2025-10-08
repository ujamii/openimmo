# OpenImmo PHP library

[![Packagist](https://img.shields.io/packagist/v/ujamii/openimmo.svg?colorB=green&style=flat)](https://packagist.org/packages/ujamii/openimmo)
[![Minimum PHP Version](https://img.shields.io/badge/php-8.1%2B-8892BF.svg?style=flat)](https://php.net/)
[![Continuous Integration](https://github.com/ujamii/openimmo/actions/workflows/php.yml/badge.svg)](https://github.com/ujamii/openimmo/actions)
[![codecov](https://codecov.io/gh/ujamii/openimmo/branch/master/graph/badge.svg?token=97D799UX1B)](https://codecov.io/gh/ujamii/openimmo)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fujamii%2Fopenimmo%2Fmaster)](https://dashboard.stryker-mutator.io/reports/github.com/ujamii/openimmo/master)

OpenImmo and the OpenImmo logo are registered trademarks of the [OpenImmo e.V.](http://www.openimmo.de)
Neither is this package an official distribution nor am I associated with this organisation!

This library just wraps the OpenImmo XML format with some PHP8 classes.
If you need support for PHP <= 8.1, see version 1.x of this package. Version 2 is for PHP >=8.2 only.

There is an official library available at http://www.openimmo.de/go.php/p/22/support20.htm which costs 95 EUR excl. VAT and is 
"compatible with PHP5 and tested with PHP 8.1" (end quote).
To completely convince you, you will only be allowed to see the code **after** you have paid and they have a no-refund policy. 

**Important notes**

1. I don't want to include **real world xml examples** into this distribution package due to possible license and privacy issues. Thus, some tests are automatically
skipped, if the xml files are not found in the examples directory!
The "Open" in OpenImmo has nothing to do with Open Source (I have been told via email).

1. From a software architecture point of view, using the **German names** for everything in the codebase feels bad for every developer, I know. I feel the same. 
And I still use the German labels in the codebase nevertheless. Simple reason: I value maintainability and readability more than sticking to the rules no matter what.
So to be consistent in names for properties, classes and with xml/xsd properties and to make it easy to actually know what you're talking about when debugging this project,
I decided to take the burden of using German names but I think it is worth it.

1. Also, dealing with this kind of data is probably done in more complex and big projects than in small and very agile ones, I suppose. Hence I actively chose not to
be **cutting edge** with all the fancy features new PHP versions provide. I will maintain the currently supported [PHP versions](https://www.php.net/supported-versions.php)
because I assume those type of projects have some more compatibility constraints to match and I don't want to bring another tight requirement in with this library.
I you deeply want to have all the modern things in here, feel free to fork and open a PR, so everyone can benefit from it. You're very welcome!

## TODOs

- add test cases, especially for the example file provided with the official download package.

## Installation

```shell
composer req ujamii/openimmo
```

## Integrations

If you like to use this API as base for an integration into a CMS or Framework, feel free to contact me, I will link it here.

- Integration into TYPO3 CMS, [extension "openimmo"](https://github.com/ujamii/openimmo-typo3)
- NEOS CMS, [package "Ujamii.OpenImmoNeos"](https://github.com/ujamii/openimmo-neos)
- [Laravel-Package](https://github.com/innobraingmbh/laravel-openimmo)

## Usage

### Writing OpenImmo XML

```php
// just create the elements you need in your xml and use the set-methods to fill in values.
$nutzungsart = new Nutzungsart();
$nutzungsart
    ->setWohnen(true)
    ->setGewerbe(false)
    ->setAnlage(false)
    ->setWaz(false);

$serializer = \JMS\Serializer\SerializerBuilder::create()->build();
echo $serializer->serialize($nutzungsart, 'xml');
```

will produce

```xml
<nutzungsart WOHNEN="true" GEWERBE="false" ANLAGE="false" WAZ="false" />
```

Nested elements are created just as easy. Classes, properties, constants and parameters are named as corresponding items in the xsd file.
They are just converted to camelCase to comply with PHP standards.

```php
$infrastrktur = new Infrastruktur();
$infrastrktur
    ->setZulieferung(false)
    ->setAusblick((new Ausblick())->setBlick(Ausblick::BLICK_BERGE))
    ->setDistanzenSport([
        new DistanzenSport(DistanzenSport::DISTANZ_ZU_SPORT_SEE, 15)
    ])
    ->setDistanzen([
        new Distanzen(Distanzen::DISTANZ_ZU_HAUPTSCHULE, 22)
    ]);
    
$serializer = \JMS\Serializer\SerializerBuilder::create()->build();
echo $serializer->serialize($infrastrktur, 'xml');
```

will generate

```xml
<infrastruktur>
	<ausblick blick="BERGE" />
	<distanzen distanz_zu="HAUPTSCHULE" >22.0</distanzen>
	<distanzen_sport distanz_zu_sport="SEE" >15.0</distanzen_sport>
	<zulieferung>false</zulieferung>
</infrastruktur>
```

### Reading OpenImmo XML

Reading data from xml into a easy-to-use object structure is also pretty straightforward. This example will generate a list of
objects (addresses).

```php
$xmlString = file_get_contents('./example/foobar.xml');
/* @var $openImmo \Ujamii\OpenImmo\API\Openimmo */
$openImmo = $serializer->deserialize($xmlString, \Ujamii\OpenImmo\API\Openimmo::class, 'xml');

/* @var $anbieter \Ujamii\OpenImmo\API\Anbieter */
foreach ($openImmo->getAnbieter() as $anbieter) {
    /* @var $immobilie \Ujamii\OpenImmo\API\Immobilie */
    foreach ($anbieter->getImmobilie() as $immobilie) {
        echo PHP_EOL . vsprintf('%s %s, %s %s', [
                $immobilie->getGeo()->getStrasse(),
                $immobilie->getGeo()->getHausnummer(),
                $immobilie->getGeo()->getPlz(),
                $immobilie->getGeo()->getOrt(),
            ]);
    }
}
```

### Writing JSON (since v0.10)

Although the OpenImmo standard just describes an XML version, there may be cases when you want to generate JSON from the given data.
Sadly, there is [an issue](https://github.com/schmittjoh/serializer/issues/1251) with custom types, scalar values and JSON serialization in the JMS serializer.
However, it is still possible to write JSON format with the [Symfony serializer component](https://symfony.com/doc/current/components/serializer.html).

```shell
composer require symfony/serializer
```

Generating JSON then works like this:

```php
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

$openImmoObject = null; // this may be any object of one of the API classes from this package
$encoders    = [new JsonEncoder()];
$normalizers = [
    new DateTimeNormalizer(),
    new GetSetMethodNormalizer()
];
$serializerContext = [
    AbstractObjectNormalizer::SKIP_NULL_VALUES       => true,
    AbstractObjectNormalizer::PRESERVE_EMPTY_OBJECTS => false,
    'json_encode_options'                            => \JSON_PRESERVE_ZERO_FRACTION
];

$serializer = new Serializer($normalizers, $encoders);
$jsonContent = $this->serializer->serialize($openImmoObject, JsonEncoder::FORMAT, $serializerContext);
```

### Possible issues

#### DateTime format not working

Some tools may generate DateTime values in the xml, which cause errors like

```
Fatal error: Uncaught JMS\Serializer\Exception\RuntimeException: Invalid datetime "2020-08-07T11:56:39.1242974+02:00", expected one of the format "Y-m-d\TH:i:sP", "Y-m-d\TH:i:s".
```

This can be caused by a different precision for the microsecond part (1242974) of this value. As the default PHP precision may be lower
that the one of the tool, which the xml was generated with. If this problem occurs with the data you use, you can add a handler, included
in this package, to the serializer like this:

```php
use JMS\Serializer\Handler\HandlerRegistryInterface;
use Ujamii\OpenImmo\Handler\DateTimeHandler;

$builder = \JMS\Serializer\SerializerBuilder::create();
$builder
    ->configureHandlers(function(HandlerRegistryInterface $registry) {
        $registry->registerSubscribingHandler(new DateTimeHandler());
    })
;
$serializer = $builder->build();
```

### Update API classes with a new OpenImmo version 

1. Install composer package.
2. Download OpenImmo files from [their website](http://www.openimmo.de/go.php/p/24/download.htm) (extract into the example folder). Their license agreement denies redistribution of the xsd file.
3. `php -f generate-api.php` will fill the `src/API` directory with new classes.
4. `composer dumpautoload` to update the autoloading.
5. Done.

### Running tests

1. `composer run phpunit`

## License and Contribution

[GPLv3](LICENSE)

As this is OpenSource, you are very welcome to contribute by reporting bugs, improve the code, write tests or 
whatever you are able to do to improve the project.

If you want to do me a favour, buy me something from my [Amazon wishlist](https://www.amazon.de/registry/wishlist/2C7LSRMLEAD4F).

### Thank you!

- [Qbus Internetagentur GmbH](https://www.qbus.de/) for your code contribution

# OpenImmo PHP library

[![Packagist](https://img.shields.io/packagist/v/ujamii/openimmo.svg?colorB=green&style=flat)](https://packagist.org/packages/ujamii/openimmo)

OpenImmo and the OpenImmo logo are registered trademarks of the [OpenImmo e.V.](http://www.openimmo.de)
Neither is this package an official distribution nor am I associated with this organisation!

This library just wraps the OpenImmo XML format with some PHP7 classes.

There is an official library available at http://www.openimmo.de/go.php/p/22/support20.htm which costs 95 EUR excl. VAT and is PHP5 only. 
To completely convince you, you will only be allowed to see the code **after** you have paid and they have a no-refund policy. 

**Important note**

I am not allowed to include real world xml examples into this distribution package due to license restrictions. Thus, some tests are automatically
skipped, if the xml files are not found in the examples directory!
Do not be fooled by "Open" in OpenImmo ;-)

## TODOs

- solve all TODOs in code
- add test cases, especially for the example file provided with the official download package.

## Installation

```shell
composer req ujamii/openimmo
```

## Usage

1. Install composer package.
2. Done :-)

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
$openImmo = $this->serializer->deserialize($xmlString, \Ujamii\OpenImmo\API\Openimmo::class, 'xml');

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


### Update API classes with a new OpenImmo version 

1. Install composer package.
2. Download OpenImmo files from [their website](http://www.openimmo.de/go.php/p/24/download.htm) (extract into the example folder). Their license agreement denies redistribution of the xsd file.
3. `php -f generate-api.php` will fill the `src/API` directory with new classes.
4. `composer dumpautoload` to update the autoloading.
5. Done.

### Running tests

1. `vendor/bin/phpunit -c .`

## License and Contribution

[GPLv3](LICENSE)

As this is OpenSource, you are very welcome to contribute by reporting bugs, improve the code, write tests or 
whatever you are able to do to improve the project.

If you want to do me a favour, buy me something from my [Amazon wishlist](https://www.amazon.de/registry/wishlist/2C7LSRMLEAD4F).
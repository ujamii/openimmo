# OpenImmo PHP library

OpenImmo and the OpenImmo logo are registered trademarks of the [OpenImmo e.V.](http://www.openimmo.de)
Neither is this package an official distribution nor am I associated with this organisation!

This library wraps the OpenImmo XML format with some PHP 7 classes.

## TODOs

- add/generate JMS Serializer config for reading and writing xml files.
- add test cases, especially for the example file provided with the official download package.

## Installation

```shell
composer req ujamii/openimmo
```

## Usage

1. Install composer package. 
2. Done.

### Update API classes with a new OpenImmo version 

1. Install composer package.
2. Download OpenImmo files from [their website](http://www.openimmo.de/go.php/p/24/download.htm) (extract into the example folder). Their license agreement denies redistribution of the xsd file.
3. `php -f generate-api.php` will fill the `src/API` directory with new classes.
4. `composer dumpautoload` to update the autoloading.
5. Done.

### Running tests

1. `vendor/bin/phpunit -c .`

## License

[GPLv3](LICENSE)

If you want to do me a favour, buy me something from my [Amazon wishlist](https://www.amazon.de/registry/wishlist/2C7LSRMLEAD4F).
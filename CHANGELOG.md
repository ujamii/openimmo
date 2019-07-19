## 0.3.0 (July 19, 2019)
  - [DOC] added contribution hint
  - Merge pull request #1 from qbus-agentur/nullable-getter-returndeclarations
	  - Properly support arrays of simple types
	  - Rebuild API for nullable setters
	  - Generate nullable setters for optional elements/attributes
	  - Renegerate API for non-nullable attribute return types
	  - Add support for non-nullable attributes
	  - Regenerate for non-nullable change
	  - Do not generate nullable return type for required elements
	  - Regenerate API for non-nullable array change
	  - Do not generate nullable array return types
	  - Rebuild API classes for nullable return type declarations
	  - Use nullable return type declarations, as value may be be unpopulated
	  - Add trailing spaces, TODO: remove
	  - Update to php-code-generator dev-master to support setNullable for php methods
  - [DOC] added integration list

## 0.2.0 (February 19, 2019)
  - [TASK] some methods are static now, so usage from outside is possible
  - [DOC] added some more author information
  - [DOC] added better short description
  - [DOC] added packagist badge

## 0.1.1 (February 05, 2019)
  - [DOC] changed license id for packagist compliance

## 0.1.0 (February 05, 2019)
  - [DOC] added some usage examples 
  - [TEST] tests with xml file requirements are automatically skiped if the files are not present (license restrictions)
  - [TEST] re-added skipped test
  - [FEATURE] added description to classes (see https://github.com/goetas-webservices/xsd-reader/pull/43)
  - [TASK] do not use constructor to start the generation process, but dedicated method
  - [TEST] fixed array type
  - [BUGFIX] fixed wrong Type annotations for arrays 
  - [BUGFIX] fixed type datetime annoations
  - [TASK] target folder is configurable 
  - [DOC] added some comments
  - [BUGFIX] added type annotations 
  - [TASK] added some tests
  - [TASK] added test files
  - [FEATURE] added constructors to ComplexTypeSimpleContent for more convenience
  - [BUGFIX] added missing special cases for ComplexTypeSimpleContent
  - [BUGFIX] mind the CAPITAL attribute names
  - [TASK] make use of constants
  - [BUGFIX] improved type detection
  - [FEATURE] added optional/required texts 
  - [FEATURE] added constants for allowed strings
  - [DOC] added WIP hint
  - [BUGFIX] added missing handling for datetime 
  - [BUGFIX] attributes vs. elements in xml
  - [DOC] added run tests command
  - [FEATURE] added serializer and phpunit tests
  - [BUGFIX] fixed wrong return type if type is array
  - [TASK] just some refactoring
  - [DOC] added package to generated classes 
  - [FEATURE] added PHP7 return types 
  - [TASK] move generation packges to require-dev in composer
  - [DOC] added some documentation
  - [FEATURE] added first working version of generating API code out of the xsd schema file


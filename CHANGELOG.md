## 1.0.0 (March 14, 2022)
  - Merge pull request #46 from ujamii/feature/nette-code-generator
  - [DOC] raised min php version to 7.4 
  - [TASK] lowered required MSI
  - [TASK] added some more checks for the default constructor values
  - [TASK] raised scrutinizer score by fixing some type issues
  - [TASK] raised versions of phpstan and rector, closes #36
  - [BUGFIX] use lower MSI for 7.4 compat
  - [BUGFIX] use correct nette class for visibility constants
  - [WIP][FEATURE] switch from gossi/php-code-generator to nette/php-generator as the package does not seem to be developed anymore
  - Merge pull request #44 from ujamii/dependabot/github_actions/actions/checkout-3
  - Bump actions/checkout from 2.4.0 to 3
  - Merge pull request #43 from ujamii/dependabot/github_actions/shivammathur/setup-php-2.17.1
  - Merge pull request #45 from ujamii/task/drop-php-73
  - [TASK] drop PHP 7.3 support, closes #25
  - Bump shivammathur/setup-php from 2.16.0 to 2.17.1
  - Merge pull request #40 from andypost/24-php81
  - Merge pull request #38 from ujamii/dependabot/github_actions/actions/cache-2.1.7
  - Merge pull request #39 from ujamii/dependabot/github_actions/shivammathur/setup-php-2.16.0
  - Add PHP 8.1 to CI
  - Bump shivammathur/setup-php from 2.15.0 to 2.16.0
  - Bump actions/cache from 2.1.6 to 2.1.7
  - Merge pull request #37 from ujamii/dependabot/github_actions/actions/checkout-2.4.0
  - Bump actions/checkout from 2.3.4 to 2.4.0
  - Merge pull request #34 from ujamii/dependabot/github_actions/shivammathur/setup-php-2.15.0
  - Bump shivammathur/setup-php from 2.14.0 to 2.15.0
  - Merge pull request #33 from ujamii/dependabot/github_actions/codecov/codecov-action-2.1.0
  - Bump codecov/codecov-action from 2.0.3 to 2.1.0
  - Merge pull request #32 from ujamii/dependabot/github_actions/shivammathur/setup-php-2.14.0
  - Bump shivammathur/setup-php from 2.13.0 to 2.14.0
  - Merge pull request #30 from ujamii/dependabot/github_actions/codecov/codecov-action-2.0.3
  - Bump codecov/codecov-action from 2.0.2 to 2.0.3
  - Merge pull request #29 from ujamii/dependabot/github_actions/shivammathur/setup-php-2.13.0
  - Bump shivammathur/setup-php from 2.12.0 to 2.13.0
  - Merge pull request #26 from ujamii/dependabot/github_actions/shivammathur/setup-php-2.12.0
  - Merge pull request #28 from ujamii/dependabot/github_actions/codecov/codecov-action-2.0.2
  - Bump codecov/codecov-action from 2.0.1 to 2.0.2
  - Merge pull request #27 from ujamii/dependabot/github_actions/codecov/codecov-action-2.0.1
  - Bump codecov/codecov-action from 1.5.2 to 2.0.1
  - Bump shivammathur/setup-php from 2.11.0 to 2.12.0

## 0.10.0 (July 01, 2021)
  - [DOC] added description and example of howto create json output
  - [TEST] renamed tests cases to prepare for Symfony serializer usage
  - [BUGFIX] not nullable object properties have appropriate default values now
  - [TEST] added test for symfony serializer with json encoder

## 0.9.3 (June 30, 2021)
  - [BUGFIX] dont remove phpdoc tags with rector for backwards compat in the api generation process
  - [BUGFIX] dont remove phpdoc tags with phpcsfixer for backwards compat in the api generation process
  - [TEST] add new constant name with spaces
  - [CLEANUP] removed unused import
  - [CI] fixed build pipeline
  - [CLEANUP] removed old rules
  - Merge pull request #23 from ujamii/dependabot/github_actions/codecov/codecov-action-1.5.2
  - Bump codecov/codecov-action from 1.5.0 to 1.5.2

## 0.9.2 (May 28, 2021)
  - Merge pull request #18 from ujamii/dependabot/github_actions/actions/checkout-2.3.4
  - Merge pull request #17 from ujamii/dependabot/github_actions/codecov/codecov-action-1.5.0
  - Merge pull request #15 from ujamii/dependabot/github_actions/shivammathur/setup-php-2.11.0
  - Merge pull request #21 from ujamii/dependabot/composer/friendsofphp/php-cs-fixer-tw-2.18or-tw-3.0
  - Merge pull request #22 from ujamii/dependabot/github_actions/actions/cache-2.1.6
  - Bump actions/cache from 2.1.4 to 2.1.6
  - Update friendsofphp/php-cs-fixer requirement from ^2.18 to ^2.18 || ^3.0
  - Merge pull request #19 from ujamii/dependabot/composer/rector/rector-tw-0.9.31or-tw-0.11.0
  - Update rector/rector requirement from ^0.9.31 to ^0.9.31 || ^0.11.0
  - Bump actions/checkout from 2 to 2.3.4
  - Bump codecov/codecov-action from 1 to 1.5.0
  - Bump shivammathur/setup-php from 2 to 2.11.0
  - Merge pull request #13 from ujamii/dependabot/github_actions/actions/cache-v2.1.4
  - Bump actions/cache from v2 to v2.1.4
  - Update dependabot.yml
  - added dependabot config
  - [DOC] added PHP8 to composer description
  - Merge pull request #12 from ujamii/feature/rector
  - [TEST] also run rector on tests directory
  - [TEST] added rector to the project

## 0.9.1 (February 25, 2021)
  - [TEST] lowered the msi score as the infection job randomly finds new mutants although no code change has been made

## 0.9.0 (February 25, 2021)
  - Merge pull request #11 from ujamii/feature/php8
  - [TEST] added a comment to a bool assertion
  - [TEST] added class use assertions
  - [TEST] fixed class namespace
  - [TEST] test classes are now included in the phpstan job
  - [CLEANUP] move remaining static methods from ApiGenerator to a new CodeGenUtil class
  - [TEST] added some tests for the example xml file
  - [DOC] adjusted readme as PHP8 seems to work without issues
  - [TASK] test ci build with php 8.0

## 0.8.1 (February 23, 2021)
  - Merge pull request #10 from ujamii/task/build-structure
  - [TEST] kill one more mutant
  - [TEST] kill two more mutants
  - [TEST] kill one more mutant with another test
  - [DOC] added PHP8 todo
  - [FEATURE] added php-cs-fixer to generate-api task
  - [TEST] as the last mutant was killed successfully, we can raise the min msi to 100
  - [TEST] added test to kill one more mutant
  - [FEATURE] added php-cs-fixer and applied PSR-12 rules to src and test files
  - [BUGFIX] fixed config path for infection in composer.json
  - [DOC] added missing script descriptions in composer.json
  - [TASK] reorganized build files to meet standards

## 0.8.0 (February 21, 2021)
  - Merge pull request #9 from ujamii/feature/coverage-badge
  - [DOC] added coverage badge
  - [TEST] added coverage upload to github actions
  - [TEST] fixed version constraint for php 7.3
  - [TEST] one more mutant showed up
  - [TEST] increased threads for infection
  - [TEST] added missing stryker key env variable
  - [TEST] killed last mutant
  - [TEST] run infection only on php 7.4, as 7.3 compatible version does not support github logger
  - [TEST] fixed infection constraint
  - [TEST] added infection logs
  - [TEST] killed some more mutants
  - [DOC] added some badges
  - [TEST] killed some more mutants
  - [TEST] as we now have 100% coverage, lets kill the last mutants
  - [TEST] added some docs to this special test
  - [TEST] replaced generated single test files with one test to rule them all
  - [TEST] limited infection results to covered code
  - [BUGFIX] removed unreachable code as ComplexTypeMixed can not have properties, only attributes in xsd schema
  - Merge pull request #8 from ujamii/refactoring-typeutil
  - [TEST] added test, so TypeUtil has 100% coverage now
  - [TEST] refactored the property config helper
  - [TEST] added test case with datetime
  - [TASK] moved some type related code to the typeutil to simplify the generator class
  - Merge pull request #7 from ujamii/feature/matrix-test
  - [TEST] divided ci build into 2 jobs
  - [TEST] some config changes in github actions
  - [TEST] lowered min version of infection to run on php 7.3
  - [TEST] set php matrix to currently supported 7 versions
  - [TEST] test cases are now compatible to phpunit 9
  - [TEST] added matrix test
  - [TEST] removed comma
  - [TEST] removed generation during ci build
  - [TEST] fixed typo
  - [TEST] test github workflow actions
  - [TEST] test github workflow actions
  - [TEST] test github workflow actions
  - Update php.yml
  - test github ci features
  - [TEST] added test
  - [TEST] added test
  - [TEST] refactored tests to minimize duplicate code
  - [TEST] added test
  - [TEST] added comment
  - [!!!] "bool" is now consequently used instead of "boolean". Although this makes now  difference for the serializer and IDEs, it may break packages parsing the doc blocks.
  - [TEST] code format
  - [TEST] renamed test methods
  - [TEST] added tests
  - [TEST] restructured scripts section in composer.json
  - [TEST] separated autoload for prod and dev
  - [TEST] added tests
  - [CLEANUP] removed unused feature
  - [TEST] added tests
  - [TEST] refactored the test cases
  - [TEST] refactored the test case structure
  - [TEST] added infection testing
  - [TEST] added more tests
  - [DOC] as all the TODOs are solved now, I can remove this from the docs *yay!*

## 0.7.0 (February 16, 2021)
  - [BUGFIX] solved dependency problems
  - [TASK] refactoring to simplify generator class
  - [TEST] added some tests
  - [FEATURE] classes with up to 6 properties now have constructor methods for convenience
  - [TEST] added some tests
  - [TASK] solved last TODO (UserDefinedExtend was not fully functional)
  - [FEATURE] classes with up to 5 properties now have constructor methods for convenience
  - [TASK] added type description for minInclusive and maxInclusive restrictions
  - [TASK] added type description for fractionDigits and minLength restrictions
  - [TASK] added example docblock tag for fractionDigits restriction
  - [BUGFIX] fixed wrong return type in DateTimeHandler::serializeDateTimeToXml
  - [TASK] some minor refactoring
  - [BUGFIX] fixed wrong expected type in datetime handler
  - [TEST] added composer run command for phpunit
  - [DOC] closes #5
  - [TEST] added phpstan and did some improvements

## 0.6.0 (November 26, 2020)
  - Merge branch 'bugfix/issue-3'
  - [DOC] fixed typo
  - [TEST] added new real world test data
  - [WIP][FEATURE] added new custom type to fix #3
  - Merge branch 'master' into bugfix/issue-3
  - [DOC] added NEOS CMS package link
  - Merge branch 'master' into bugfix/issue-3
  - [WIP][BUGFIX] possible solution for #3. As the ElementDef does not provide any information about the "mixed=true" attribute of the xsd node, we have to generate the $value property for every class, although this is not correct.

## 0.5.0 (August 28, 2020)
  - [FEATURE] added DateTime handler class to serializer to prevent errors with differences in datetime values from xml
  - [TEST] removed get/setValue from test cases as this feature was only added in the bugfix/issue-3 branch
  - [TASK] added some tests

## 0.4.0 (March 10, 2020)
  - Merge branch 'feature/multiple-date-formats'
  - [FEATURE] with https://github.com/schmittjoh/serializer/pull/1108 merged now, multiple date formats are supported here as well
  - [TASK] fixed typo 
  - [TASK] fixed wrong type hint
  - [TASK] also works with jms/serializer^3.4 
  - [TASK] running the tests can now also be done by `composer run tests`

## 0.3.1 (September 04, 2019)
  - [TASK] updated composer packages and re-generated api classes
  - Merge pull request #2 from qbus-agentur/fix-api-regeneration
  - composer.json: Include pull request #64 of gossi/php-code-generator to fix api (re)generation

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


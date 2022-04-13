## Introduction 

This is a repository intended to serve as a starting point if you want to bootstrap a project in PHP. 
 
It could be useful if you want to start from scratch a kata or a little exercise or project. The idea is that you don't have to worry about the boilerplate, just run `composer create-project codelytv/php-bootstrap your-project-name` and there you go:
* Latest versions of PHP and PHPUnit
* Best practices applied:
  * [`README.md`][link-readme] (badges included)
  * [`LICENSE`][link-license]
  * [`composer.json`][link-composer-json]
  * [`phpunit.xml`][link-phpunit]
  * [`.gitignore`][link-gitignore]
  * [`.editorconfig`][link-editorconfig]
  * [`.travis.yml`][link-travis-yml]
  * [`.scrutinizer.yml`][link-scrutinizer]
* Some useful resources to start coding


### Using Composer

Start completely from scratch without having to delete this bootstrap project Git history:

1. If you don't have it already, [install Composer](https://getcomposer.org/download/).
2. Create your project based on the [Packagist project](https://packagist.org/packages/codelytv/php-bootstrap). This will also download the project dependencies: `composer create-project overwolf/php-bootstrap your-project-name`.
3. Move to the project directory: `cd your-project-name`
4. Run all the checks: `composer test`. This will do some checks that you can perform with isolated commands: 
    1. [PHP Parallel Lint](https://github.com/JakubOnderka/PHP-Parallel-Lint): `composer lint`.
    2. [PHP Style Check](https://github.com/squizlabs/PHP_CodeSniffer): `composer style`. If you want to fix style issues automatically: `composer fix-style`.
    3. [PHP Unit](https://phpunit.de/): `composer phpunit`.
5. Create your own repository:
    1. Initialize your own Git repository: `git init`
    2. Add the bootstrap files: `git add .`
    3. Commit: `git commit -m "Initial commit with project boilerplate"`
    4. Add your remote repository: `git remote add origin git@github.com:your-username/your-project-name`
    5. Upload your local commits to the new remote repo: `git push -u origin master`
6. Start coding! 

## Helpful resources

### PHP 7

* [PHP 7 new features](http://php.net/manual/en/migration70.new-features.php)
* [Scalar type declarations example](https://github.com/tpunt/PHP7-Reference#scalar-type-declarations)
* [Return type declarations example](https://github.com/tpunt/PHP7-Reference#return-type-declarations)

### PHPUnit

* [Introduction to writing tests for PHPUnit](https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html)
* [Testing exceptions with PHPUnit](https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.exceptions)
* [PHPUnit assertions](https://phpunit.de/manual/current/en/appendixes.assertions.html)

### Refactoring

* [Refactoring.guru Code Smells catalog](https://refactoring.guru/smells/smells)
* [Refactoring.guru Refactorings catalog](https://refactoring.guru/catalog)
* [SourceMaking Refactorings catalog](https://sourcemaking.com/refactoring)
# CodeIgniter 4 Application Template

This repository includes:

- [CodeIgniter](https://github.com/codeigniter4/CodeIgniter4) 4.1.2-dev
  - [Translations for CodeIgniter 4 System Messages](https://github.com/codeigniter4/translations) dev-develop
- [PHPUnit](https://github.com/sebastianbergmann/phpunit) 9.5.2
- [Liaison Revision](https://github.com/paulbalandan/liaison-revision) 1.x-dev
- [bear/qatools](https://github.com/bearsunday/BEAR.QATools) 1.9.12

## Requirements

- [PHP 7.3](https://www.php.net/releases/7_3_0.php) or later
  - [intl](http://php.net/manual/en/intl.requirements.php)
  - [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
  - json (enabled by default - don't turn it off)
  - [mbstring](http://php.net/manual/en/mbstring.installation.php)
  - [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
  - xml (enabled by default - don't turn it off)

## How to Install

### Composer

```sh-session
$ composer create-project kenjis/ci4-app-template your-project
```

### Git

```sh-session
$ git clone https://github.com/kenjis/ci4-app-template.git your-project
$ cd your-project/
$ composer install
$ git checkout -b main
```

## How to Update

```sh-session
$ composer update
```

## Changes from the CI4 Default Configuration

- CSRF filter is enabled. [app/Config/Filters.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Filters.php#L32).
- Auto-Discovery of services is disabled. [app/Config/Modules.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Modules.php#L51).
- `Config\Services` extends `CodeIgniter\Config\Services`. [app/Config/Services.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Services.php#L20).

## Available Commands

```
composer test              // Run PHPUnit
composer cs-fix            // Fix the coding style
composer cs                // Check the coding style
composer sa                // Run static analysis
composer run-script --list // List all commands
```

## Related Projects for CodeIgniter 4.x

- [CodeIgniter 3 to 4 Upgrade Helper](https://github.com/kenjis/ci3-to-4-upgrade-helper)
- [CodeIgniter Simple and Secure Twig](https://github.com/kenjis/codeigniter-ss-twig)
- [CodeIgniter3-like Captcha](https://github.com/kenjis/ci3-like-captcha)
- [PHPUnit Helper](https://github.com/kenjis/phpunit-helper)
- [docker-codeigniter-apache](https://github.com/kenjis/docker-codeigniter-apache)

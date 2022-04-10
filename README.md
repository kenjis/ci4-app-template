# CodeIgniter 4 Application Template

This template changes the default configuration of CI4 more secure.

This repository includes:

- [CodeIgniter](https://github.com/codeigniter4/CodeIgniter4) 4.2.0-dev
  - [Translations for CodeIgniter 4 System Messages](https://github.com/codeigniter4/translations) dev-develop
- [PHPUnit](https://github.com/sebastianbergmann/phpunit) 9.5.20
- [Liaison Revision](https://github.com/paulbalandan/liaison-revision) 1.1.0
- [bear/qatools](https://github.com/bearsunday/BEAR.QATools) 1.10.0

## Requirements

- [PHP 7.4](https://www.php.net/releases/7_4_0.php) or later
  - [intl](http://php.net/manual/en/intl.requirements.php)
  - [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
  - json (enabled by default - don't turn it off)
  - [mbstring](http://php.net/manual/en/mbstring.installation.php)
  - [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
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

## How to Use

### CSRF

- You must set CSRF token field in your form manually. See https://codeigniter4.github.io/CodeIgniter4/libraries/security.html#html-forms

### CSP

- You must set CSP when you need. See https://codeigniter4.github.io/CodeIgniter4/outgoing/response.html#content-security-policy
- You need to use `csp_script_nonce()` and `csp_style_nonce()` for inline contents. See https://codeigniter4.github.io/CodeIgniter4/outgoing/response.html#inline-content

## Changes from the CI4 Default Configuration

### Services

- Auto-Discovery of services is disabled. [app/Config/Modules.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Modules.php#L51).
- `Config\Services` extends `CodeIgniter\Config\Services`. [app/Config/Services.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Services.php#L20).

### Configs

- Auto Routing is disabled. [app/Config/Routes.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Routes.php#L24). (Since v4.2.0, CI4 is also disabled by default.)
- `Config\CURLRequest::$shareOptions` is disabled. [app/Config/CURLRequest.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/CURLRequest.php#L21).
- Using Session based CSRF protection. [app/Config/Security.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Security.php#L18).
- CSRF protection `$tokenRandomize` is enabled. [app/Config/Security.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Security.php#L29).
- CSP is enabled. [app/Config/App](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/App.php#L464).
- CSP `$autoNonce` is disabled. [app/Config/ContentSecurityPolicy](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/ContentSecurityPolicy.php#L187).

### Filters

- CSRF filter is enabled. [app/Config/Filters.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Filters.php#L57-L60).
- InvalidChars filter is enabled. [app/Config/Filters.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Filters.php#L38).
- SecureHeaders filter is enabled. [app/Config/Filters.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Filters.php#L43).

### Features

- `Config\Feature::$multipleFilters` is enabled. [app/Config/Feature.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Feature.php#L26).

### Others

- Using `develop` version CI4. [app/Config/Paths.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Paths.php#L28).

## Available Commands

```
composer test              // Run PHPUnit
composer cs-fix            // Fix the coding style
composer cs                // Check the coding style
composer sa                // Run static analysis
composer run-script --list // List all commands
```

## Related Projects for CodeIgniter 4.x

- [CodeIgniter4 Attribute Routes](https://github.com/kenjis/ci4-attribute-routes)
- [CodeIgniter 3 to 4 Upgrade Helper](https://github.com/kenjis/ci3-to-4-upgrade-helper)
- [CodeIgniter Simple and Secure Twig](https://github.com/kenjis/codeigniter-ss-twig)
- [CodeIgniter3-like Captcha](https://github.com/kenjis/ci3-like-captcha)
- [PHPUnit Helper](https://github.com/kenjis/phpunit-helper)
- [docker-codeigniter-apache](https://github.com/kenjis/docker-codeigniter-apache)

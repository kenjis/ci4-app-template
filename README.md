# CodeIgniter 4 Application Template

This template changes the default configuration of CI4 more secure.

This repository includes:

- [CodeIgniter](https://github.com/codeigniter4/CodeIgniter4) 4.4.5
  - [Translations for CodeIgniter 4 System Messages](https://github.com/codeigniter4/translations) dev-develop
  - [CodeIgniter DevKit](https://github.com/codeigniter4/devkit) 1.2.0
- [PHPUnit](https://github.com/sebastianbergmann/phpunit) 9.6.16
- [Tatter\Patches](https://github.com/tattersoftware/codeigniter4-patches) 2.1.0
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

Update Composer packages:

```sh-session
$ composer update
```

Update your CodeIgniter4 project files:

```sh-session
$ php spark revision:update
```

## How to Use

### Services

- All Services must be manually added to `app/Config/Services.php`, even if third-party CI4 packages have their own Services.

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

- BaseURL's `index.php` is removed.
  - [app/Config/Routing.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/App.php#L45)
- Auto Routing (Improved) is enabled. 
  - [app/Config/Routing.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Routing.php#L91) and [app/Config/Feature.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Feature.php#L31)
  - See https://codeigniter4.github.io/CodeIgniter4/incoming/routing.html#auto-routing-improved
- `Config\CURLRequest::$shareOptions` is disabled. (Since v4.4.0, this is set by default.)
  - [app/Config/CURLRequest.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/CURLRequest.php#L21). 
  - See https://codeigniter4.github.io/CodeIgniter4/libraries/curlrequest.html#sharing-options
- MySQLi's `numberNative` is enabled.
  - [app/Config/Database.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Database.php#L45)
  - See https://codeigniter4.github.io/CodeIgniter4/database/configuration.html#explanation-of-values
- Using Session-based CSRF protection. 
  - [app/Config/Security.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Security.php#L18). 
  - See https://codeigniter4.github.io/CodeIgniter4/libraries/security.html#csrf-protection-methods
- CSRF protection `$tokenRandomize` is enabled. 
  - [app/Config/Security.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Security.php#L29). 
  - See https://codeigniter4.github.io/CodeIgniter4/libraries/security.html#token-randomization
- CSP is enabled. 
  - [app/Config/App](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/App.php#L464). 
  - See https://codeigniter4.github.io/CodeIgniter4/outgoing/response.html#turning-csp-on
- CSP `$autoNonce` is disabled. 
  - [app/Config/ContentSecurityPolicy](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/ContentSecurityPolicy.php#L187). 
  - See https://codeigniter4.github.io/CodeIgniter4/outgoing/response.html#inline-content
- Strict Validation Rules are used. (Since v4.3.0, this is set by default.)
  - [app/Config/Validation.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Validation.php#L24-L27). 
  - See https://codeigniter4.github.io/CodeIgniter4/libraries/validation.html#traditional-and-strict-rules

### Filters

- CSRF filter is enabled. 
  - [app/Config/Filters.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Filters.php#L57-L60). 
  - See https://codeigniter4.github.io/CodeIgniter4/libraries/security.html#enable-csrf-protection
- InvalidChars filter is enabled. 
  - [app/Config/Filters.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Filters.php#L38). 
  - See https://codeigniter4.github.io/CodeIgniter4/incoming/filters.html#invalidchars
- SecureHeaders filter is enabled. 
  - [app/Config/Filters.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Filters.php#L43). 
  - See https://codeigniter4.github.io/CodeIgniter4/incoming/filters.html#secureheaders

### Features

- `Config\Feature::$multipleFilters` is enabled. 
  - [app/Config/Feature.php](https://github.com/kenjis/ci4-app-template/blob/ci4-app-template/app/Config/Feature.php#L26). 
  - See https://codeigniter4.github.io/CodeIgniter4/incoming/routing.html#applying-filters

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

### Libraries

- [CodeIgniter 3 to 4 Upgrade Helper](https://github.com/kenjis/ci3-to-4-upgrade-helper)
- [CodeIgniter3-like Captcha](https://github.com/kenjis/ci3-like-captcha)
- [PHPUnit Helper](https://github.com/kenjis/phpunit-helper)
- [CodeIgniter4 Attribute Routes](https://github.com/kenjis/ci4-attribute-routes)
- [CodeIgniter Simple and Secure Twig](https://github.com/kenjis/codeigniter-ss-twig)
- [CodeIgniter4 Viewi Demo](https://github.com/kenjis/ci4-viewi-demo)

### Tutorials

- [CodeIgniter 4 News Tutorial](https://github.com/kenjis/ci4-news)
- [CodeIgniter 4 Validation Tutorial](https://github.com/kenjis/ci4-validation-tutorial)
- [CodeIgniter4 Code Modules Test](https://github.com/kenjis/ci4-modules-test)
- [CodeIgniter 4 File Upload](https://github.com/kenjis/ci4-file-upload)

### Building Development Environment

- [CodeIgniter4 Application Template](https://github.com/kenjis/ci4-app-template)
- [CodeIgniter4 Composer Installer](https://github.com/kenjis/ci4-composer-installer)
- [docker-codeigniter-apache](https://github.com/kenjis/docker-codeigniter-apache)

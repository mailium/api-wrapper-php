# PHP wrapper class for Mailium API v3

[![Latest Stable Version](https://poser.pugx.org/mailium/php-api-wrapper/v/stable.svg)](https://packagist.org/packages/mailium/php-api-wrapper) [![Monthly Downloads](https://poser.pugx.org/mailium/php-api-wrapper/d/monthly.png)](https://packagist.org/packages/mailium/php-api-wrapper) [![License](https://poser.pugx.org/mailium/php-api-wrapper/license.svg)](https://packagist.org/packages/mailium/php-api-wrapper)

For more details about API v3, please visit our help section at https://github.com/mailium/php-api-wrapper

* [Installation](#installation)
* [Demo](#demo)
* [Documentation](#documentation)

## Installation
Simply add the package to your `composer.json` file and run `composer update`.

```
"mailium/php-api-wrapper": "dev-master"
```

Or go to your project directory where the `composer.json` file is located and type:

```sh
composer require "mailium/php-api-wrapper"
```

## Demo

```php
  $mailiumApi = new Mailium\MailiumAPI3('YOUR_API3_KEY', 'SUBDOMAIN', 'json');
  $mailiumApi->run('List.GetList',array());

  print_r($mailiumApi->Result);
```

## Documentation

https://github.com/mailium/php-api-wrapper

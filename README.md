# PHP wrapper class for Mailium API v3

[![Latest Stable Version](https://poser.pugx.org/mailium/api-wrapper-php/v/stable.svg)](https://packagist.org/packages/mailium/api-wrapper-php) [![Monthly Downloads](https://poser.pugx.org/mailium/api-wrapper-php/d/monthly.png)](https://packagist.org/packages/mailium/api-wrapper-php) [![License](https://poser.pugx.org/mailium/api-wrapper-php/license.svg)](https://packagist.org/packages/mailium/api-wrapper-php)

For more details about API v3, please visit our help section at https://github.com/mailium/api-wrapper-php

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


Either ACCESS_TOKEN or API_KEY must be set.
```php
  $mailiumApi = new Mailium\API\MailiumAPI3('ACCESS_TOKEN', 'YOUR_API3_KEY', 'SUBDOMAIN', 'json');
  $mailiumApi->run('List.GetList',array());

  print_r($mailiumApi->Result);
```

## Documentation

https://github.com/mailium/api-wrapper-php

# Sharedcount PHP Wrapper

## Introduction

PHP wrapper for the Sharedcount.com API.

## Installation

    composer require handelsgids/sharedcount

## Example

```php
<?php

require 'vendor/autoload.php';

use Handelsgids\Sharedcount\Sharedcount;

$sharedcount = new Sharedcount('yourapikeygoeshere');
$facebookShares = $sharedcount
    ->getByUrl('https://www.handelsgids.be')
    ->getFacebook()
    ->getShareCount()
;

```

The above example will output:
```
5008
```

## Configuration

Make sure to define whether or not you have a free or paid subscription.

The default is free. Use the following line to set a paying subscription.

```php
$sharedcount = new Sharedcount('yourapikeygoeshere', Sharedcount::SUBSCRIPTION_PAYING);
```

## Running tests

Set your Sharedcount API key in phpunit.xml and run  ```composer test```.

## License

Handelsgids Sharedcount PHP Wrapper is open-sourced software licensed under the [MIT license](LICENSE).

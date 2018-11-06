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

## Running tests

```composer test```

## License

Handelsgids Sharedcount PHP Wrapper is open-sourced software licensed under the [MIT license](LICENSE).

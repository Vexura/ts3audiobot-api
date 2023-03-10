TS3AudioBot PHP API Client
=======================
This **PHP 7.2+** library allows you to communicate with the VPNResellers-API.

[![Latest Stable Version](http://poser.pugx.org/vexura/ts3audiobot-api/v)](https://packagist.org/packages/vexura/ts3audiobot-api) [![Total Downloads](http://poser.pugx.org/vexura/ts3audiobot-api/downloads)](https://packagist.org/packages/vexura/ts3audiobot-api) [![Latest Unstable Version](http://poser.pugx.org/vexura/vpnresellers-api/v/unstable)](https://packagist.org/packages/vexura/ts3audiobot-api) [![License](http://poser.pugx.org/vexura/ts3audiobot-api/license)](https://packagist.org/packages/vexura/vpnresellers-api) [![PHP Version Require](http://poser.pugx.org/vexura/ts3audiobot-api/require/php)](https://packagist.org/packages/vexura/ts3audiobot-api)

> You can find the full API documentation [here](https://api.vpnresellers.com/docs/v3_1)!
## Getting Started

Recommended installation is using **Composer**!

In the root of your project execute the following:
```sh
$ composer require vexura/ts3audiobot-api
```

Or add this to your `composer.json` file:
```json
{
    "require": {
        "vexura/ts3audiobot-api": "^1.0"
    }
}
```

Then perform the installation:
```sh
$ composer install --no-dev
```

### Examples

Creating the VPNResellersAPI main object:
```php
<?php
// Require the autoloader
require_once 'vendor/autoload.php';
// Use the library namespace
use TS3AudioBotAPI\TS3AudioBotAPI;
// Then simply pass your API-Token when creating the API client object.
$client = new TS3AudioBotAPI('host','API-Token');
// Then you are able to perform a request
var_dump($client->server()->show(1, 1));
?>
```
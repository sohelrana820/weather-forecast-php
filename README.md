# weather-forecast-php
weather-forecast-php is php wrapper implementation of [Dark Sky](https://darksky.net) Api (formerly [Forecast.io](http://forecast.io))

## Installation
Installation is really easy through [composer](http://getcomposer.org)
```
composer require sohelrana820/weather-forecast-php
```

## Usage

```php
<?php

use SohelRana820\Forecast\Forecast;

$forecast = new Forecast(API_KEY);
$forecast->setLatitude(DEFAULT_LATITUDE);
$forecast->setLongitude(DEFAULT_LATITUDE);
$response = $forecast->request();

// Retrieve the current data
var_dump($response->getCurrentlyData());

// Retrieve the hourly data
var_dump($response->getHourlyData());

// Retrieve the daily data
var_dump($response->getDailyData());

// Retrieve weather flags
var_dump($response->getFlags());

 ```
 
### How to set optional parameters.
 
This library allow to set all of their optional parameters (lng, units, etc)
 ```php
 <?php
 $forecast->setOptions($optionsArray = ['units' => 'si']);
 ```
 You can pass all optional parameter as array . See there all optional parameter [official documentation](https://darksky.net/dev/docs).
 test

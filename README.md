# Polyline Decoder Package
A Laravel composer package to decode Google Polyline strings into an array of GPS coordinate pairs. Compatible with PHP 7.4 or higher.

## Installation
Run the following command in the root of your project directory:
```shell
composer require endlessmiles/polyline-decoder
```

## Use
The package is very simple to use:
```php
$coordinates = Polyline::decode($polylineString);
```

The function returns an array of pairs of latitude and longitude:
```php
[
    [latitute_float1, longitude_float1],
    [latitute_float2, longitude_float2],
    [latitute_float3, longitude_float3],
]
```
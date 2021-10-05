# Laravel get enum values
Helper function for get tables enum values in Laravel.

[![License](https://poser.pugx.org/gegetchkori/laravel_get_enum_values/license)](https://packagist.org/packages/gegetchkori/laravel_get_enum_values)
[![Total Downloads](https://poser.pugx.org/gegetchkori/laravel_get_enum_values/downloads)](https://packagist.org/packages/gegetchkori/laravel_get_enum_values)
[![Monthly Downloads](https://poser.pugx.org/gegetchkori/laravel_get_enum_values/d/monthly)](https://packagist.org/packages/gegetchkori/laravel_get_enum_values)
[![Daily Downloads](https://poser.pugx.org/gegetchkori/laravel_get_enum_values/d/daily)](https://packagist.org/packages/gegetchkori/laravel_get_enum_values)


![Laravel get enum values](https://banners.beyondco.de/Laravel%20get%20enum%20values.png?theme=light&packageManager=composer+require&packageName=gegetchkori%2Flaravel_get_enum_values&pattern=architect&style=style_1&description=Helper+function+for+get+tables+enum+values+in+Laravel.&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)


# Requirements

| name | version |
| ---- | ------- |
| `php`  | `^7.1` or `^8.0` |
| `laravel` | from `5.7.*` to `^8.0` |



# Installation

Run this command on terminal in your project root:

```bash
composer require gegetchkori/laravel_get_enum_values
```

Then run this command on terminal in your project root:

```bash
php artisan vendor:publish --provider="Gegetchkori\LaravelGetEnumValues\GetEnumValuesServiceProvider"
```

# Usage

Configure .env file, create migration, put into enum type column and run this command:

```bash
php artisan make:controller EnumValuesController
```

Create some function and call this method from helpers.php

```php
public function test() 
{
  $enumoption = General::getEnumValues('table_name','column_name');
  
  return $enumoption;
}
```

Create appropriate route in web.php

# Result

Returned data type 

```
array
```

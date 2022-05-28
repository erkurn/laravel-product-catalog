# Laravel Product Catalog

[![Latest Version on Packagist](https://img.shields.io/packagist/v/erkurn/laravel-product-catalog.svg?style=flat-square)](https://packagist.org/packages/erkurn/laravel-product-catalog)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/erkurn/laravel-product-catalog/run-tests?label=tests)](https://github.com/erkurn/laravel-product-catalog/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/erkurn/laravel-product-catalog/Check%20&%20fix%20styling?label=code%20style)](https://github.com/erkurn/laravel-product-catalog/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/erkurn/laravel-product-catalog.svg?style=flat-square)](https://packagist.org/packages/erkurn/laravel-product-catalog)

Multi Purpose Product Catalogs, Inspired By Wordpress Post And Wordpress Custom Fiels (Meta)

## Installation

You can install the package via composer:

```bash
composer require erkurn/laravel-product-catalog
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-product-catalog-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-product-catalog-config"
```

This is the contents of the published config file:

```php
return [
    // Override Product Model For Extends Features, like Adding Spatie Media Library or Slug Generator
    'model' =>  \Erkurn\LaravelProductCatalog\Models\ProductCatalog::class,
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-product-catalog-views"
```

## Todo
- [x] create product catalog
- [x] sync metas data
- [x] search by meta name and value
- [x] search by meta values
- [x] search by sku
- [x] get product collections by status
- [ ] make product variants
- [ ] add simple pricing


## Usage

```php
TODO
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rezza Kurniawan](https://github.com/erkurn)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

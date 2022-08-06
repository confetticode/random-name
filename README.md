<h1 style="text-align: center;">Random Name</h1>

<p style="text-align: center;">
    <a href="https://github.com/confetticode/random-name/actions">
        <img src="https://github.com/confetticode/random-name/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/confetticode/random-name">
        <img src="https://img.shields.io/packagist/dt/confetticode/random-name" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/confetticode/random-name">
        <img src="https://img.shields.io/packagist/v/confetticode/random-name" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/confetticode/random-name">
        <img src="https://img.shields.io/github/license/confetticode/random-name" alt="License">
    </a>
</p>

This is a very simple package that helps you generate random names for any kind of entities, such as VPS or docker containers.

## Requirements

- PHP ^8.0

## Installation

You can install the package via composer:

```bash
composer require confetticode/random-name
```

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

echo random_name(); // golick-suspicious
```

## Testing

```bash
composer run test
```

## Contributing

1. Clone this repository
2. Checkout a new branch from master.
3. Make any changes that you need.
4. Ensure all tests pass by running this command.
5. Finally, submit your pull request.

## License

The MIT License (MIT). Please see [License File](./LICENSE.md) for more information.

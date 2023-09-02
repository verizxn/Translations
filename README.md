![PHP Composer build](https://github.com/verizxn/Translations/actions/workflows/php.yml/badge.svg)

# Translations
A library that allows you to localize your projects in various languages.

## Installation
```bash
$ composer install
```

## Add library to your project
In your `composer.json` require the project:
```json
{
    ...
    "repositories": [
        {
            "type": "vcs",
            "url":  "https://github.com/verizxn/Translations"
        }
    ],
    "require": {
        "verizxn/translations": "dev-main"
    }
}
```

## Usage
Check the example file on `tests/index.php`.

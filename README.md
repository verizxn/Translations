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
			"url":  "https://github.com/VERlZON/Translations"
		}
	],
	...
	"require": {
		"verlzon/translations": "dev-main"
	}
}
```

## Usage
Check `example.php` and `translations/en.json`.
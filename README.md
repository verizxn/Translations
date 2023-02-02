# Translations
A free library that allows you to create your projects and localize it in various languages.

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
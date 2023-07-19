<?php

require_once __DIR__.'/vendor/autoload.php';

$strings = new verizxn\Translations\Translations('en'); // Set language
$strings->loadFromJSON('en', __DIR__.'/translations/en.json'); // Import English strings from json
$strings->loadFromArray('it', [
    'test' => 'Questo è un test in: $var.'
]); // Import Italian strings from array

echo $strings->getString('test', ['php']).PHP_EOL; // Prints in english

$strings->language = 'it'; //switch language into italian
echo $strings->getString('test', ['php']).PHP_EOL; // Prints in italian
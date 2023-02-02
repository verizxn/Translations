<?php

require_once __DIR__.'/vendor/autoload.php';

// Load strings from file
$english = file_get_contents(__DIR__.'/translations/en.json');
$english = json_decode($english, true);

// Load the strings
$translations = ['default' => $english, 'en' => $english];

$strings = new Verlzon\Translations\Translations($translations, 'en');
echo $strings->getString('test').PHP_EOL;
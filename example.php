<?php

require_once __DIR__.'/translations.php';

$strings = new Translations('en');
echo $strings->getString('test');
<?php

namespace Verlzon\Translations;

class Translations {
	private $strings = [];
	public $language = 'en';

	public function __construct($language = 'en'){
		$this->language = $language;
	}

	public function loadFromJSON($language, $filePath){
		$strings = file_get_contents($filePath);
		$strings = json_decode($strings, true);
		$this->strings[$language] = $strings;
	}

	public function loadFromArray($language, $array){
		$this->strings[$language] = $array;
	}

	public function getString($name, $vars = []){
		$text = (isset($this->strings[$this->language][$name]))?$this->strings[$this->language][$name]:$this->strings['en'][$name];

		if(stripos($text, '$var') !== false){
			preg_match_all('/\$var/', $text, $matches, PREG_OFFSET_CAPTURE);
			$matches = array_reverse($matches[0]);
			$vars = array_reverse($vars);
			for($i = 0; $i < count($matches); $i++){
				$match = $matches[$i][1];
				$var = $vars[$i];
				$text = substr_replace($text, $var, $match, 4);
			}
		}
		
		return $text;
	}

}
<?php

class Translations {
	private $strings = [];
	private $defaults = [];

	public function __construct($language){
		if(!file_exists(__DIR__."/translations/$language.json")) $language = 'en';
		
		$this->strings = $this->loadStrings($language);
		$this->defaults = $this->loadStrings('en');
	}

	public function loadStrings($language){
		$strings = file_get_contents(__DIR__."/translations/$language.json");
		return json_decode($strings, true);
	}

	public function getString($name, $vars = []){
		$text = (isset($this->strings[$name]))?$this->strings[$name]:$this->defaults[$name];

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
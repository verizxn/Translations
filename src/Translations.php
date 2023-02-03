<?php

namespace Verlzon\Translations;

class Translations {
	private $translations = [];
	private $strings = [];
	private $defaults = [];

	public function __construct($translations, $language){
		$this->translations = $translations;
		$this->strings = $this->translations[$language];
		$this->defaults = $this->translations['default'];
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
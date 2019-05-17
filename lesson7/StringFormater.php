<?php
	// Напишите класс который с помощтю магических методов будет делать манипуляции над строками.
	class StringFormater{
		private $store = [];
		public function __get($key){
			return $this->store[$key];
		}
		public function __set($key, $value){
			$this->store[$key] = strtoupper($value); 
		}
	}

	$stringFormater = new StringFormater();
	$stringFormater->name = 'uSeRnaMe';
	echo $stringFormater->name; // вывести USERNAME
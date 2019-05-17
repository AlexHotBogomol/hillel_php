<?php
	// Напишите класс который будет фильтровать массив путем удаления его элементов. Только с использованием магических методов!.
	class Filter{
		private $array;
		public function __construct($array){
			$this->array = $array;
		}
		public function __call($name, $arguments){
			switch ($name){
				case "getNumbers":
					$result = [];
					foreach ($this->array as $value) {
						if(is_numeric($value)){
							$result[] = $value;
						}
					}
					return $result;
					break;
				case "getStrings":
					$result = [];
					foreach ($this->array as $value) {
						if(is_string($value)){
							$result[] = $value;
						}
					}
					return $result;
					break;
				default:
					return "Мы не готовы к такому!";
			}
		}
	}

	$filter = new Filter(['f', 2, 't', 7, 2, 'k']);
	var_dump($filter->getNumbers()); //[2,7,2]
	var_dump($filter->getStrings()); // ['f', 't', 'k']

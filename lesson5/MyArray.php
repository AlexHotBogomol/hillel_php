<?php
	// Создайте класс который будет принимать массив целых чисел при создании объекта класса и сортировать их (можно использовать PHPешный sort()), также создайте свойсвтво где этот массив будет хранится и метод для получения этого свойства.
	class MyArray{
		public $array;

		function __construct($array){
			$this->array = $array;
			sort($this->array);
		}

		public function getArray(){
			return $this->array;
		}
	}

	$myArray = new MyArray([2, -3, 4, 10, -2, 1, 0]);
	var_dump($myArray->getArray());
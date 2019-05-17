<?php
	// Напишите класс который умеет заменять в строке пробелы на знак +, а строку приводить в нижний регистр . 
	class Concatenator{
		static public function __callStatic($name, $arguments){
			return str_replace(" ", "+", $arguments[0]);
		}
	}

	$concatenated = Concatenator::prepareString('I am concatenated');
	echo $concatenated; // i+am+concatenated
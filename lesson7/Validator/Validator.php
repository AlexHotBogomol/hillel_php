<?php
	class EmptyStringException extends Exception{

	}
	class InvalidInputTypeException extends Exception{

	}

	class Validator{
		static public function  is_empty_string($string){
			if(trim($string) == ""){
				throw new EmptyStringException("Эта строка пустая!!!");
			}
		}
		static public function  is_correct_type($string, $type){
			switch ($type){
				case "string":
					$char_array = str_split($string);
					sort($char_array);
					if (is_numeric($char_array[0])){
						throw new InvalidInputTypeException("В этом поле не должно быть чисел");
					}
					break;
				case "integer":
					$char_array = str_split($string);
					sort($char_array);
					if(!is_numeric($char_array[count($char_array)-1])){
						throw new InvalidInputTypeException("В этом поле должны быть только цифры");
					}
					break;
				default : 
					return "something go wrong";
			}
		}
	}
<?php
	/*Создайте класс и реализуйте метод который будет делать плоский массив из ассоциативного
	Пример: [1,[2,3,null,4],[null],5]
	Результат: [1,2,3,4,5]*/

	class ArrayConverter 
	{
		static function convert_array($array)
		{
			$result = [];
			foreach ($array as $value) {
				if(is_array($value)){
					foreach ($value as $value_item) {
						if(!is_null($value_item)){
						 	$result[] = $value_item;
						}
					}
				}else if(!is_null($value)){
					$result[] = $value;
				}
			}
			return $result;
		}
	}

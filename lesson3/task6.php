<?php
	// Написать функцию для получения первого и последнего элемента массива
	
	function get_first_and_last($array){
		return [$array[0], $array[count($array)-1]];
	}

	$array = [1,2,3,4,56,7,8,9,-1,2, "2132", 2, '123'];

	var_dump(get_first_and_last($array));
	echo "<hr>";

	// Дано фрагмент кода
	// Написать функцию для удаления последней запятой, т.е результат работы фунции должна быть строка вида "1,2,3,4,5,6"
	$array = [1,2,3,4,5,6,'','',''];
	$items = implode(',', $array);
	function remove_unnecessary_separator($string){
		$array = explode(',', $string);
		$i = 0;
		while($i < count($array)){
			if($array[$i] === ''){
				array_splice($array, $i, 1);
			}
			$i++;
		}
		unset($array[count($array)-1]);
		return implode(',', $array);
	}
	echo remove_unnecessary_separator($items);
	echo "<hr>";

	// Написать функцию которая будет удалять дубли и пустые значения (0, '', null) из массива 
	function remove_unnecessary($array){
		$result =[];
		$special_symbols = [0, "", NULL];
		$i = 0;
		while($i < count($array)){
			if(in_array($array[$i], $special_symbols)){
				array_splice($array, $i, 1);
			}else{
				$i++;
			}
		}
		// return array_unique($array, SORT_REGULAR);
		foreach ($array as $key => $value) {
			if(!(in_array($value, $result))){
				$result[] = $value;
			}
		}
		return $result;
	}
	var_dump(remove_unnecessary([1,2,"", '', 0, 2, 2, NULL, 3]));
	echo "<hr>";

	// Написать функцию для сортировки пузырьком, шпаргалка по алгоритму тут 

	$array = [2, 1, -3, 12, 8, 9, 10, -2, -3, 0, 4,12, 3];
	// $array = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0, -1, -2];

	function simple_sorting($array){
	/*	for($i=0; $i<count($array); $i++){
			for($j=0; $j<count($array); $j++){
				if($array[$i] < $array[$j]){
					$n = $array[$j];
					$array[$j] = $array[$i];
					$array[$i] = $n;
				}
			}
		}*/
		for($i=0; $i<count($array)-1; $i++){
			$swap_count = 0;
			for($j=1; $j<count($array); $j++){
				if($array[$j-1] > $array[$j]){
					$n = $array[$j];
					$array[$j] = $array[$j-1];
					$array[$j-1] = $n;
					$swap_count++;
				}		
			}
			if($swap_count === 0){
				break;
			}
		}
		return $array;
	}
	var_dump(simple_sorting($array));
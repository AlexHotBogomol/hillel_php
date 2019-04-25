<?php 
	declare(strict_types=1);
	/*Написать фунцию для нахожения минимального и максимального значения элементов массива.
	Использовать стандартные функции языка типа min($array) и max($array) запрещенно.*/

	function min_max_in_arr(array $arr, string $position){
    $result = $arr[0];
    switch ($position) {
    	case 'max':
    		foreach ($arr as $value) {
    			$result = $result < $value ? $value : $result;
    		}
    		return $result;
    	case 'min':
    		foreach ($arr as $value) {
    			$result = $result > $value ? $value : $result;
    		}
    		return $result;
    	default:
    		return "Arguments aren't correct";
    }
	} 

	echo min_max_in_arr([1, 2, -4, 5, 100], 'min');
	echo "<br>";
	echo min_max_in_arr([1, 2, -4, 5, 100], 'max');
	echo "<hr>";
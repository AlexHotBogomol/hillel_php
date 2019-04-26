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

    // Написать функцию для определение является ли строка палиндромом или нет. Функция должна возвращать булевое значение.
    //  Палиндром это строка которая читается одинаково с конца как и с начала. Например "Мадам", "Шалаш", "Аргентина манит негра"
    function is_palindrome(string $string){
        $string = str_replace(' ', '', $string);
        $string = strtolower($string);
        $string_length = strlen($string);
        for($i = 0; $i < $string_length/2; $i++){
            if($string[$i] !=  $string[$string_length-1-$i]){
                return false;
            }
        }
        return true;
    }
    echo is_palindrome("Argentina manit negra");
    echo "<br>";
    echo is_palindrome("madam");
    echo "<br>";
    echo is_palindrome("mad1am");
    echo "<hr>";

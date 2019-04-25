<?php 
	/*Написать функцию для расчета факториала. Функция должна принимать аргумент например n, 
	которым является целое и не отрицательное число (проверки можете сделать по желанию),
	 и должна 	возвращать результат - вычисленный факториал.*/
	declare(strict_types=1);

	function get_factorial(int $num){
	 	if($num<0){
	 		return "Incorrect argument";
	 	}else if($num==0){
	 		return 1;
	 	}else{
	 		for($i=1, $result=1; $i<=$num; $i++){
	 			$result *= $i;
	 		}
	 		return $result;
	 	}
	}

	echo get_factorial(5);
	echo "<br>";
	echo get_factorial(0);
	echo "<br>";
	echo get_factorial(-20);
	echo "<hr>";

	/*Написать функцию которая разворачивает строку в обратном порядке, например строка “пример” если ее развернуть обратно будет “ремирп”.
	Здесь я хочу напомнить что вы можете работать с строкой как с массивом
	Как подсказка которая касается конкретного задания, вам надо использовать какую то переменную как переменную накопитель.*/

	function get_expand_string(string $string){
		$i = strlen($string);
		$result = "";
		while($i > 0){
			$result .= $string[$i-1];
			$i--;
		}
		return $result;
	}
	echo get_expand_string("Hello");
	echo "<hr>";

	/*Написать функцию для линейного поиска элемента в массиве. 
	Линейный поиск, это поиск элемента путем перебора. Ваша функция должна принимать два аргумента 1) массива в котором вы что то ищите, и 2) значение которое вы ищите.

	Функция должна возвращать индекс элемента массива который был найден.*/

	function find_element_in_arr(array $arr, $element){
		foreach ($arr as $key => $value) {
			if($value === $element){
				return $key;
			}
		}
	}
	echo find_element_in_arr([1, "2", true, "wow", "2t"], "wow");
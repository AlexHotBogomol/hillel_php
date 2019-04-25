<?php
	declare(strict_types=1);
 /*Напишите функцию, которая будет переводить цельсии в фаренгейты и наоборот.*/
	define("CELC_COEF", 0.55);
	define("FAREN_COEF", 1.8);
	 
	function convert_degrees(float $degrees, string $convert_type){
	 	if($convert_type === "C"){
	 		return ($degrees - 32) * CELC_COEF;
	 	}
	  else if($convert_type === "F"){
	  	return ($degrees * FAREN_COEF) + 32;
	  }  
	}
  
  echo convert_degrees(36.6, "F");
  echo "<br>";
  echo convert_degrees(120, "C");
  echo "<hr>";

 /* Ваша задача написать простой калькулятор используя функции, ваш калькулятор должен уметь складывать, делить, умножать и вычитать числа.
	Вам нужно создать функцию с именем, к примеру, calculator. Функция должна на вход принимать следующие аргументы:

	Операция - строковое значение (например, 'sum', 'subtract,', 'divide', 'multiply')
	Число1 - любое число типа int или float
	Число2 - любое число типа int или float */

	function calculator(string $operation, float $num1, float $num2){
    switch($operation) {
    	case "sum":
    		return $num1 + $num2;
    	case "subtract":
    	  return $num1 - $num2;
  	  case "divide":
  	  	if(!$num2){
  	  		return "You can't divide by zero";
  	  	}else{
    	  	return $num1 / $num2;
  	  	}
  	  case "multiply":
    	  return $num1 * $num2;
    	default:
    		return "Your operation isn't correct";
    }
	}

	function calculator_ver2(string $operation, float ...$numbers){
		$result = $numbers[0];
		array_splice($numbers, 0, 1);
    switch($operation) {
    	case "sum":
    		foreach($numbers as $number){
    			$result += $number;
    		}
    		return $result;
    	case "subtract":
    	  foreach($numbers as $number){
    			$result -= $number;
    		}
    		return $result;
  	  case "divide":
  	  	foreach($numbers as $number){
  	  		if(!$number){
  	  			return "You can't divide by zero";
  	  		}else{
  	  			$result =  $result / $number;
  	  		}
    		}
    		return $result;
  	  case "multiply":
    	  foreach($numbers as $number){
    			$result *= $number;
    		}
    		return $result;
    	default:
    		return "Your operation isn't correct";
    }
	}

	echo calculator("sum", 10, 2.5);
	echo "<br>";
	echo calculator("subtract", 10, 2.5);
	echo "<br>";
	echo calculator("divide", 10, 2.5);
	echo "<br>";
	echo calculator("divide", 10, 0);
	echo "<br>";
	echo calculator("multiply", 10, 2.5);
	echo "<br>";
	echo calculator("adasdy", 10, 2.5);
	echo "<hr>";

	echo calculator_ver2("sum", 10, 2.5, 3, 0, 7);
	echo "<br>";
	echo calculator_ver2("subtract", 10, 2.5, 25, -4);
	echo "<br>";
	echo calculator_ver2("divide", 10, 2.5, 1, 2, 3);
	echo "<br>";
	echo calculator_ver2("divide", 10, 5, 0);
	echo "<br>";
	echo calculator_ver2("multiply", 10, 2.5, 1, 2);
	echo "<br>";
	echo calculator_ver2("adasdy", 10, 2.5);
	echo "<hr>";

	/*Написать функцию которая будет валидировать (проверять на правильность) данные.
	Функция должна принимать следующие аргументы:
	Аргумент1 - первый аргумент, может быть числом
	Аргумент2 - второй аргумент, может быть числом или строкой
	Операция - операция проверки, может иметь следующие значения:

	“lessthan’ - проверить что Аргумент1 меньше Аргумент2
	‘greaterthan’ - проверить что Аргумент1 больше Аргумент2
	‘equals’  - проверить что Аргумент1 равен Аргумент2*/

	function validate(int $var1, $var2, string $operation){
		if(!(gettype($var2) === "string" || gettype($var2) === "integer")){
			return "Second argument isn't correct";
		}
		if(gettype($var2) === "string"){
			$var2 = strlen($var2);
		}
		switch ($operation) {
			case 'lessthan':
				return ($var1 < $var2) ? "true" : "false";
			case 'greaterthan':
				return ($var1 > $var2) ? "true" : "false";
			case 'equals':
				return ($var1 == $var2) ? "true" : "false";
			default:
				return "Your operation isn't correct";
		}
	}

	echo validate(1, 2, "lessthan"); // должно быть true
	echo "<br>";
	echo validate(1, 2, "greaterthan"); // должно быть false
	echo "<br>";
	echo validate(4, "test", "equals"); // должно быть true
	echo "<br>";
	echo validate(5, "test", "lessthan"); //должно быть false
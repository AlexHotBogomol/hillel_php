<?php
	// Создайте класс Math и реализйте метод calcFactorial($number) который будет расчитывать факториал целых чисел
	// Дополните класс Math из предыдущего задание и реализуйте метод для простого калькулятора
	class Math{
		public static function calcFactorial($number){
			if(gettype($number)!="integer" || $number<0 ){
		 		return "Incorrect argument";
		 	}else if($number==0){
		 		return 1;
		 	}else{
		 		for($i=1, $result=1; $i<=$number; $i++){
		 			$result *= $i;
		 		}
		 		return $result;
		 	}
		}
		public static function calculator($operation, $num1, $num2){
	    switch($operation) {
	    	case "Addition":
	    		return $num1 + $num2;
	    	case "Subtraction":
	    	  return $num1 - $num2;
	  	  case "Division":
	  	  	if(!$num2){
	  	  		return "You can't divide by zero";
	  	  	}else{
	    	  	return $num1 / $num2;
	  	  	}
	  	  case "Multiplication":
	    	  return $num1 * $num2;
	    	default:
	    		return "Your operation isn't correct";
	    }
		}
	}

	echo Math::calcFactorial(5);
	echo "<br>";
	echo Math::calcFactorial(-1);
	echo "<br>";
	echo Math::calcFactorial(0);
	echo "<br>";
	echo Math::calcFactorial("sdad");
	echo "<hr>";

	echo Math::calculator("Addition", 10, 2.5);
	echo "<br>";
	echo Math::calculator("Subtraction", 10, 2.5);
	echo "<br>";
	echo Math::calculator("Division", 10, 2.5);
	echo "<br>";
	echo Math::calculator("Division", 10, 0);
	echo "<br>";
	echo Math::calculator("Multiplication", 10, 2.5);
	echo "<br>";
	echo Math::calculator("adasdy", 10, 2.5);
	echo "<hr>";
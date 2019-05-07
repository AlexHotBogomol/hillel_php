<?php
function calculator(string $operation, float $num1, float $num2){
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

  define("CELC_COEF", 0.55);
  define("FAREN_COEF", 1.8);
   
  function convert_degrees(float $degrees, string $convert_type){
    if($convert_type === "Celsius"){
      return ($degrees - 32) * CELC_COEF;
    }
    else if($convert_type === "Fahrenheit"){
      return ($degrees * FAREN_COEF) + 32;
    }  
  }
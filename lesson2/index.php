<?php
// Создать переменную которая хранит ваше имя и вывести ее значение используя echo или print
$name = "Sasha";
echo $name;

echo "<hr>";

// Используя echo или print и одинарные кавычки, нужно вывести строку с следующим содержимым: 
//  'This is a concatenated string' . Cлово concatenated следует поместить в переменную.
$var = 'concatenated';
echo 'This is a ' . $var . ' string';

echo "<hr>";


/* Создать несколько переменных с различным типом данных содержимого и вывести на экран тип переменной. Подсказка: в PHP для получения типа переменной существует функция gettype($varibleName), которая возвращает тип переменной. Вывод должен быть в виде:

 Variable $a is string
 Variable $b is integer
 Variable $c is boolean
 Variable $d is double
*/

$a = "Hello world!";
$b = 1996;
$c = true;
$d = 25.6;

echo 'Variable $a is ' . gettype($a) . "<br>";  
echo 'Variable $b is ' . gettype($b) . "<br>"; 
echo 'Variable $c is ' . gettype($c) . "<br>"; 
echo 'Variable $d is ' . gettype($d); 

/*Пытался сделать через функцию но не понял как вывести имя переменной вместо $variable

function print_variable_type($variable){
	echo 'Variable $variable is ' . gettype($variable);  
}
print_variable_type($a);
echo "<br>";
print_variable_type($b);
echo "<br>";
print_variable_type($c);
echo "<br>";
print_variable_type($d);

*/

echo "<hr>";

/*Имеется массив со словами:

$words = array('scripting', 'development', 'PHP', 'especially');

Нужно написать скрипт который используя массив со словами выведет строку

'PHP is a popular general-purpose scripting language that is especially suited to web development'*/

$words = array('scripting', 'development', 'PHP', 'especially');
echo "$words[2] is a popular general-purpose $words[0] language that is $words[3] suited to web $words[1]";


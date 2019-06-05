<?php
	/*Реализуйте следующий функционал:
	С помощью паттерна абстрактная фабрика реализуйте функционал создания двух видов роботов: гражданского и военного. 	Каждый из роботов имеет следующие способности:

	При включении (создания) роботу присваивается имя, состоящие из трех латинских букв в верхнем регистре и четырех цифр.
	Робот может быть сброшен на заводские установки, тогда его имя стирается
	Робот может быть переинициализирован, тогда ему заново присваивается случайное имя*/

	// class Generator{
	// 	CONST LETTERS = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	// 	static function generate_name(){
			
	// 	}
	// }

	abstract class Robot{
		public function reset(){
			$this->name = "";
		}
		public function reboot(){
			$this->name = "asdasd";
		}
	}

	class CivRobot extends Robot{
		public $name;
	}

	class MilRobot extends Robot{
		public $name;
	}

	abstract class FactoryAbstract{
	    public function create($type, $name){
	        switch ($type) {
	            case'Civ':
	               $robot = new CivRobot();
	               $robot->name = $name;
	               return $robot;
	            case'Mil':
	                $robot = new MilRobot();
	                $robot->name = $name;
	               return $robot;
	            default:
	            	return "Error";
	         }
	     }
	 }
 
	 class Factory extends FactoryAbstract
	 {

	 }
	 
	 $factory = new Factory();
	 $robot1 = $factory->create('Civ', "sasha");
	 $robot2 = $factory->create('Mil', "masha");
	 echo $robot1->name;

	 echo $robot2->name;
	 $robot2->reboot();
	 echo $robot2->name;


<?php
	/*Реализуйте следующий функционал:
	С помощью паттерна абстрактная фабрика реализуйте функционал создания двух видов роботов: гражданского и военного. 	Каждый из роботов имеет следующие способности:

	При включении (создания) роботу присваивается имя, состоящие из трех латинских букв в верхнем регистре и четырех цифр.
	Робот может быть сброшен на заводские установки, тогда его имя стирается
	Робот может быть переинициализирован, тогда ему заново присваивается случайное имя*/

	class SomeGenerator
	{
		private const LETTERS = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

		public static function generate_name()
		{
			$name = "";
			for($i = 0; $i < 8; $i++){
				if($i < 3){
					$name .= self::LETTERS[rand(0, strlen(self::LETTERS))];
				}else{
					$name .= rand(0, 9);
				}
			}
			return $name;
		}
	}

	abstract class Robot
	{
		public function __construct()
		{
			$this->name = SomeGenerator::generate_name();
		}

		public function getName()
		{
			return $this->$name;
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function reset()
		{
			$this->name = "";
		}

		public function reboot()
		{
			$this->name = SomeGenerator::generate_name();
		}
	}

	class CivRobot extends Robot
	{
		public $name;
		public $chassis = false;
		public $head = false;
		public $body = false;
	}

	class MilRobot extends Robot
	{
		public $name;
		public $chassis = false;
		public $head = false;
		public $body = false;
		public $weapon = false;
	}

	abstract class FactoryAbstract
	{
	    public function create(string $type)
	    {
	        switch ($type) {
	            case'Civ':
	               $robot = new CivRobot();
	               return $robot;
	            case'Mil':
	                $robot = new MilRobot();
	                return $robot;
	            default:
	            	return "Error";
	         }
	     }
	 }
 
	 class Factory extends FactoryAbstract
	 {

	 }
	 
	 


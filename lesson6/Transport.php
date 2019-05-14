<?php
	/*Спроектируйте классы и интерфейсы, который будут описывать транспортные средства. Например:
	а) автомобиль движется за счет мотора, имеет 4 колеса
	б) велосипед использует мускульную силу, имеет два колеса
	в) танк движется за счет мотора, имеет две гусеницы и умеет стрелять*/

	abstract class baseTransport{
		protected $speed;
		protected $motor_type;
		public function __construct($start_speed, $motor_type){
			$this -> speed = $start_speed;
			$this -> motor_type = $motor_type;
		}
		abstract public function accelerate($value);
		abstract public function decelerate($value);
		abstract public function getMotorType();
		abstract public function getCurrentSpeed();
	}

	interface hasWheels{
		public function getWheelCount();
	}

	interface hasСaterpillar{
		public function getСaterpillar();
	}

	interface hasDoors{
		public function getDoorsCount();
	}

	interface canShoot{
		public function fire();
	}

	class Transport extends baseTransport{
		public function __construct($start_speed, $motor_type){
			parent::__construct($start_speed, $motor_type);
		}
		public function accelerate($value){
			$this->speed+=$value;
			return 'Скорость поднялась до ' . $this->speed;
		}
		public function decelerate($value){
			$this->speed-=$value;
			if($this->speed < 0){
				$this->speed = 0;
			}
			return 'Скорость снижена до ' . $this->speed;
		}
		public function getMotorType(){
			return $this->motor_type;
		}
		public function getCurrentSpeed(){
			return $this->speed;
		}
	}

	class Car extends Transport implements hasWheels, hasDoors{
		private $wheels_count;
		private $doors_count;
		public function __construct($start_speed, $motor_type, $wheels_count, $doors_count){
			parent::__construct($start_speed, $motor_type);
			$this->wheels_count = $wheels_count;
			$this->doors_count = $doors_count;
		}
		public function getWheelCount(){
			return $this->wheels_count;
		}
		public function getDoorsCount(){
			return $this->doors_count;
		}
	}

	class Bike extends Transport implements hasWheels{
		private $wheels_count;
		public function __construct($start_speed, $motor_type, $wheels_count){
			parent::__construct($start_speed, $motor_type);
			$this->wheels_count = $wheels_count;
		}
		public function getWheelCount(){
			return $this->wheels_count;
		}
	}

	class Tank extends Transport implements hasСaterpillar, canShoot{
		private $Сaterpillar_tracks_count;
		public function __construct($start_speed, $motor_type, $Сaterpillar_tracks_count){
			parent::__construct($start_speed, $motor_type);
			$this -> Сaterpillar_tracks_count = $Сaterpillar_tracks_count;
		}
		public function getСaterpillar(){
			return $this -> Сaterpillar_tracks_count;
		}
		public function fire(){
			return "Бах";
		}
	}

	$car = new Car(60, "мотор", 4, 4);
	echo $car->getWheelCount() . "<br>"; //вернет количество колес
	echo $car->getDoorsCount() . "<br>"; // вернет количество дверей
	echo $car->getMotorType() . "<br>"; // вернет тип двигателя: мотор или мускулы
	echo $car->accelerate(10) . "<br>"; // установить скорость 10 км/ч
	echo $car->decelerate(5); // уменьшить скорость до 5 км/ч

	echo "<hr>";

	$bike = new Bike(20, "мускулы", 2);
	echo $bike->getWheelCount() . "<br>"; //вернет количество колес
	echo $bike->getMotorType() . "<br>"; // вернет тип двигателя: мотор или мускулы
	echo $bike->accelerate(10) . "<br>"; // установить скорость 10 км/ч
	echo $bike->decelerate(5); // уменьшить скорость до 5 км/ч

	echo "<hr>";

	$tank = new Tank(50, "мотор", 200);
	echo $tank->getСaterpillar() . "<br>"; //вернет количество траков гусеницы
	echo $tank->getMotorType() . "<br>"; // вернет тип двигателя: мотор или мускулы
	echo $tank->accelerate(10) . "<br>"; // установить скорость 10 км/ч
	echo $tank->decelerate(5) . "<br>"; // уменьшить скорость до 5 км/ч
	echo $tank->fire(); // сделать выстрел, "Бах"

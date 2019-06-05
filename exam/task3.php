<?php
	/*Создайте класс который будет высчитывать “космический” возраст на:

	Земля: орбитальный период 365.25 земных дней, или 31557600 секунд
	Меркурий: орбитальный период 0.2408467 земных лет
	Венера: орбитальный период 0.61519726 земных лет
	Марс: орбитальный период 1.8808158 земных лет
	Юпитер: орбитальный период 11.862615 земных лет
	Сатурн: орбитальный период 29.447498 земных лет
	Уран: орбитальный период 84.016846 земных лет
	Нептуне: орбитальный период 164.79132 земных лет

	Например, вы прожили 1,000,000,000 секунд, то на Земле ваш возраст бы составил: 31.69 лет.
	Аргумент метода может принимать как время в секундах, так и годах*/


	class AgeCalculator {
		const EARTH_DAYS = 365.25;
		const EARTH_PERIOD = 1;
		const MERC_PERIOD = 0.2408467;
		const VENUS_PERIOD = 0.61519726;
		const MARS_PERIOD = 1.8808158;
		const UPI_PERIOD = 11.862615;
		const SATURN_PERIOD = 29.447498;
		const URAN_PERIOD = 84.016846;
		const NEPTUN_PERIOD = 164.79132;
		static function calculate_age($seconds, $planet){
			switch ($planet) {
				case 'Earth':
					$years = $seconds/60/60/24/(self::EARTH_DAYS * self::EARTH_PERIOD) ;
					break;
				case 'Merc':
					$years = $seconds/60/60/24/(self::EARTH_DAYS * self::MERC_PERIOD) ;
					break;
				case 'Venus':
					$years = $seconds/60/60/24/(self::EARTH_DAYS * self::VENUS_PERIOD) ;
					break;
				case 'Mars':
					$years = $seconds/60/60/24/(self::EARTH_DAYS * self::MARS_PERIOD) ;
					break;
				case 'Upi':
					$years = $seconds/60/60/24/(self::EARTH_DAYS * self::UPI_PERIOD) ;
					break;
				case 'Saturn':
					$years = $seconds/60/60/24/(self::EARTH_DAYS * self::SATURN_PERIOD) ;
					break;
				case 'Uran':
					$years = $seconds/60/60/24/(self::EARTH_DAYS * self::URAN_PERIOD) ;
					break;
				case 'Neptun':
					$years = $seconds/60/60/24/(self::EARTH_DAYS * self::NEPTUN_PERIOD) ;
					break;
			}
			return $years;
		}
	}

	echo AgeCalculator::calculate_age(315360000, "Merc");
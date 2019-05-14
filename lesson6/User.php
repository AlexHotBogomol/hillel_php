<?php
	/*Создайте абстрактный класс User который содержит абстрактный метод getRole() который должен выводить роль пользователя, например admin, viewer, moderator и тд.
	Создайте классы Admin, Viewer, Moderator, которые наследуют класс User и реализуйте абстрактныей метод getRole() который будет возвращать роль пользователя (подсказка имя класса == имени роли в нижнем регистре).
	Так же позаботьтеся о методах которые будут получать и сохранять информацию о пользователе.
	Не забудьте о модификаторах доступа, а так же о силе наследования.*/

	abstract class User{
		abstract public function getRole();
	}

	class EveryUser extends User{
		public function getRole(){
			return strtolower(get_class($this));
		}
	}

	class Admin extends EveryUser{}

	class Moderator extends EveryUser{}

	class Viewer extends EveryUser{}

	$admin = new Admin();
	echo $admin -> getRole() . "<br>"; 
	$moderator = new Moderator();
	echo $moderator -> getRole() . "<br>";; 
	$viewer = new Viewer();
	echo $viewer -> getRole() . "<br>";; 

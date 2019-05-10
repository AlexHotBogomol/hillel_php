<?php
	/*Создайте класс Into и реализуйте метод getClassName() который должен вывести имя класса в котором вызывается метода, используйте магическую константу для получения имени класса*/
	class Into{
		public function getClassName(){
			return __CLASS__;
		}
	} 

	$into = new Into();
	echo $into -> getClassName();
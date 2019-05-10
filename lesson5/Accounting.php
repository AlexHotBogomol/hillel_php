<?php
/** Создайте класс Accounting (например часть бухгальерской программы) и реализуйте следующий функционал:
метод для получения данных о пользователе, например ФИО, номер счета, сколько начисленно, сколько вычтенно налогов и тд на ваше усмотрение, данные должны быть представленны в массиве. 
метод для добавление новых записей в массив с данными о пользователе
метод для удаление записи о пользователе
метод для редактирования записи о пользователе
метод который считает количество налогов которые будут вычтенны из ЗП*/

class Accounting{
	public $workers = [];

	public function add_worker($id, $FIO, $account_number, $income, $tax){
		$this->workers[$id] = [
			"FIO" => $FIO,
			"account_number" => $account_number,
			"income" => $income,
			"tax" => $tax,
		];
	}
	public function remove_worker_by_id($id){
		unset($this->workers[$id]);
	}
	public function edit_worker_by_id($id, $property, $value){
		$this->workers[$id][$property] = $value;
	}
	public function get_worker_by_id($id){
		return $this->workers[$id];
	}
	public function get_tax_by_id($id){
		return $this->workers[$id]["income"] * $this->workers[$id]["tax"] / 100;
	}
}

$accounting = new Accounting();
$accounting -> add_worker("1" ,"Zakablukov Sasha", 123456, 1000, 10);
$accounting -> add_worker("2" ,"vasya", 123456, 1000, 15);
$accounting -> add_worker("3" ,"masha", 123456, 1000, 10);
// var_dump($accounting -> get_worker_by_id("3"));
$accounting -> remove_worker_by_id("2");
$accounting -> edit_worker_by_id("3", "FIO", "petya");
echo "<pre>";
var_dump($accounting -> workers);
echo "</pre>";
echo $accounting -> get_tax_by_id("1");
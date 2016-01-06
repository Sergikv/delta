<?php
// Ввод массивов данных для создания модели главной таблицы (для Сведений)

//Массив 1-строки заголовка

$title_table_1 = array (
	"name" => array(
				"№",
				"Наименование участника закупки",
				"1. Стоимостные характеристики",
				"2. Нестоимостные характеристики"),
	"col" => array(1, 1, 1, 3),
	"row" => array(2, 2, 1, 1)
		);

$title_table_2 = array (
	"name" => array(
				"1.1. Цена контракта",
				"2.1. Качественные, функциональные и экологические характеристики объекта закупки",
				"2.2. Квалификация участников закупки, в том числе наличие у них финансовых ресурсов, оборудования и других материальных ресурсов, принадлежащих им на праве собственности или на ином законном основании, опыта работы, связанного с предметом контракта, и деловой репутации, специалистов и иных работников определенного уровня квалификации"),
	"col" => array(1, 1, 2),
	"row" => array(1, 1, 1)
		);

$title_table_3 = array (
	"name" => array(
				"Значимость критериев:",
				"60%",
				"20%",
				"20%"),
	"col" => array(2, 1, 1, 2),
	"row" => array(3, 3, 1, 1)
		);

$title_table_4 = array (
	"name" => array(
				"2.1.1. Организационно-технологическая схема оказания услуг",
				"60%",
				"40%"),
	"col" => array(1, 1, 1),
	"row" => array(2, 1, 1)
		);

$title_table_5 = array (
	"name" => array(
				"2.2.1. Опыт участника по успешной поставке товара,выполнения работ, оказанию услуг сопоставимого характера",
				"2.2.2. Деловая репутация участника закупки"),
	"col" => array(1, 1),
	"row" => array(1, 1)
		);

$title_table_6 = array (
	"name" => array(
				"Стартовые (предельные) значения критериев:",
				"920 000 руб.",
				"Максимум до 100 баллов",
				"Максимум до 100 баллов",
				"Максимум до 100 баллов"),
	"col" => array(2, 1, 1, 1, 1),
	"row" => array(1, 1, 1, 1, 1)
		);

$title_table_7 = array (
	"name" => array(
				"1",
				"&nbsp;",
				"&nbsp;",
				"&nbsp;",
				"&nbsp;",				
				"&nbsp;"),
	"col" => array(1, 1, 1, 1, 1, 1),
	"row" => array(1, 1, 1, 1, 1, 1)
		);

print  "Длина массива:" . count($title_table_1);
print  "<br>Общая Длина массива:" . $q=count($title_table_1, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_1);
print  "<br><br> Длина массива:" . count($title_table_2);
print  "<br>Общая  Длина массива:" . $q=count($title_table_2, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_2);
print  "<br><br> Длина массива:" . count($title_table_3);
print  "<br>Общая  Длина массива:" . $q=count($title_table_3, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_3);
print  "<br><br> Длина массива:" . count($title_table_4);
print  "<br>Общая  Длина массива:" . $q=count($title_table_4, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_4);
print  "<br><br> Длина массива:" . count($title_table_5);
print  "<br>Общая  Длина массива:" . $q=count($title_table_5, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_5);
print  "<br><br> Длина массива:" . count($title_table_6);
print  "<br>Общая  Длина массива:" . $q=count($title_table_6, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_6);
print  "<br><br> Длина массива:" . count($title_table_7);
print  "<br>Общая  Длина массива:" . $q=count($title_table_7, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_7);
/* function __autoload($class_name) {
    include 'Сlasses/' . $class_name . '.php';
}

$obj  = new MyClass1();
$obj2 = new MyClass2(); 
*/

// Класс формирования отдельной ячейки  с контентом, colspan, rowspan
class Box {
	var $content;
	var $col;
	var $row;

	function __construct ($content, $col, $row) {
		$this -> content = $content;
		$this -> col = $col;
		$this -> row = $row;
	}

	// Функция вывода ячейки
	function view() {
		echo '<td colspan=" ' . $this -> col . ' " rowspan=" ' . $this -> row . ' "> ' . $this -> content . '</td>';
	}

}

// Вывод первой строки заголовка таблицы	
echo "<table><tr>";

$end_array = 3;
//count($title_table_1) / 3 - 2;

for ($i = 0; $i <= $end_array; $i++)  {
	$cell = new Box ($title_table_1[name][$i], $title_table_1[col][$i], $title_table_1[row][$i]);
 	$cell -> view();
 	unset($cell);
}
unset($end_array);
echo "</tr>";

// Вывод второй строки заголовка таблицы	
echo "<tr>";

$end_array = 2;
//count($title_table_1, COUNT_RECURSIVE) / 3 - 2;

for ($i = 0; $i <= $end_array; $i++)  {
	$cell = new Box ($title_table_2[name][$i], $title_table_2[col][$i], $title_table_2[row][$i]);
 	$cell -> view();
	unset($cell);
}
unset($end_array);
echo "</tr>";

// Вывод третьей строки заголовка таблицы	
echo "<tr>";

$end_array = 3;
//count($title_table_3, COUNT_RECURSIVE) / 3 - 2;

for ($i = 0; $i <= $end_array; $i++)  {
	$cell = new Box ($title_table_3[name][$i], $title_table_3[col][$i], $title_table_3[row][$i]);
 	$cell -> view();
 	unset($cell);
}
unset($end_array);
echo "</tr>";

// Вывод четвертой строки заголовка таблицы	
echo "<tr>";

$end_array = 2;
//count($title_table_4, COUNT_RECURSIVE) / 3 - 2;

for ($i = 0; $i <= $end_array; $i++)  {
	$cell = new Box ($title_table_4[name][$i], $title_table_4[col][$i], $title_table_4[row][$i]);
 	$cell -> view();
 	unset($cell);	
}
unset($end_array);
echo "</tr>";

// Вывод пятой строки заголовка таблицы	
echo "<tr>";

$end_array = 1;
//count($title_table_5, COUNT_RECURSIVE) / 3 - 2;

for ($i = 0; $i <= $end_array; $i++)  {
	$cell = new Box ($title_table_5[name][$i], $title_table_5[col][$i], $title_table_5[row][$i]);
 	$cell -> view();
 	unset($cell);	
}
unset($end_array);
echo "</tr>";

// Вывод шестой строки заголовка таблицы	
echo "<tr>";

$end_array = 4;
//count($title_table_6) / 3 - 2;

for ($i = 0; $i <= $end_array; $i++)  {
	$cell = new Box ($title_table_6[name][$i], $title_table_6[col][$i], $title_table_6[row][$i]);
 	$cell -> view();
 	unset($cell);	
}
unset($end_array);
echo "</tr>";

// Вывод седьмой строки заголовка таблицы	
echo "<tr>";

$end_array = 5;
//count($title_table_7) / 3 - 2;

for ($i = 0; $i <= $end_array; $i++)  {
	$cell = new Box ($title_table_7[name][$i], $title_table_7[col][$i], $title_table_7[row][$i]);
 	$cell -> view();
 	unset($cell);
}
unset($end_array);
echo "</tr></table>";
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
	"row" => array(2, 2, 1, 1),
	"font"=> array(11, 11, 11, 11)
		);

$title_table_2 = array (
	"name" => array(
				"1.1. Цена контракта",
				"2.1. Качественные, функциональные и экологические характеристики объекта закупки",
				"2.2. Квалификация участников закупки, в том числе наличие у них финансовых ресурсов, оборудования и других материальных ресурсов, принадлежащих им на праве собственности или на ином законном основании, опыта работы, связанного с предметом контракта, и деловой репутации, специалистов и иных работников определенного уровня квалификации"),
	"col" => array(1, 1, 2),
	"row" => array(1, 1, 1),
	"font"=> array(11, 9, 9)	
		);

$title_table_3 = array (
	"name" => array(
				"Значимость критериев:",
				"60%",
				"20%",
				"20%"),
	"col" => array(2, 1, 1, 2),
	"row" => array(3, 3, 1, 1),
	"font"=> array(11, 14, 14, 14)	
		);

$title_table_4 = array (
	"name" => array(
				"2.1.1. Организационно-технологическая схема оказания услуг",
				"60%",
				"40%"),
	"col" => array(1, 1, 1),
	"row" => array(2, 1, 1),
	"font"=> array(9, 14, 14)	
		);

$title_table_5 = array (
	"name" => array(
				"2.2.1. Опыт участника по успешной поставке товара,выполнения работ, оказанию услуг сопоставимого характера",
				"2.2.2. Деловая репутация участника закупки"),
	"col" => array(1, 1),
	"row" => array(1, 1),
	"font"=> array(6, 6)	
		);

$title_table_6 = array (
	"name" => array(
				"Стартовые (предельные) значения критериев:",
				"920 000 руб.",
				"Максимум до 100 баллов",
				"Максимум до 100 баллов",
				"Максимум до 100 баллов"),
	"col" => array(2, 1, 1, 1, 1),
	"row" => array(1, 1, 1, 1, 1),
	"font"=> array(11, 14, 9, 9, 9)	
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
	"row" => array(1, 1, 1, 1, 1, 1),
	"font"=> array(11, 11, 11, 11, 11, 11)	
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

function __autoload($class_name) {
    include 'Classes/class-' . $class_name . '.php';
}


// Вывод таблицы	
echo "<table>";

// Вывод первой строки заголовка таблицы
$row_table = new Row ($title_table_1);
$row_table -> view_row();

// Вывод второй строки заголовка таблицы	
$row_table = new Row ($title_table_2);
$row_table -> view_row();

// Вывод третьей строки заголовка таблицы	
$row_table = new Row ($title_table_3);
$row_table -> view_row();

// Вывод четвертой строки заголовка таблицы	
$row_table = new Row ($title_table_4);
$row_table -> view_row();

// Вывод пятой строки заголовка таблицы	
$row_table = new Row ($title_table_5);
$row_table -> view_row();

// Вывод шестой строки заголовка таблицы	
$row_table = new Row ($title_table_6);
$row_table -> view_row();

// Вывод седьмой строки заголовка таблицы	
$row_table = new Row ($title_table_7);
$row_table -> view_row();

echo "</table>";
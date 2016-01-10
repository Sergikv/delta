<?php
// Ввод массивов данных для создания модели главной таблицы (для Сведений)

//Массив 1-строки заголовка. Этот массив не меняется.

$title_table_1 = array (
	"text" => array(
				"№",
				"Наименование участника закупки",
				"1. Стоимостные характеристики",
				"2. Нестоимостные характеристики"),
	"col" => array(1, 1, 1, 3),
	"row" => array(2, 2, 1, 1),
	"font"=> array(11, 11, 11, 11)
		);

// Разбивка строки звголовка второй строки на отдельные части
$tit = "60 _ 1.1. Цена контракта #
		20 _ 2.1. Качественные, функциональные и экологические характеристики объекта закупки #
		20 _ 2.2. Квалификация участников закупки, в том числе наличие у них финансовых ресурсов, 
		оборудования и других материальных ресурсов, принадлежащих им на праве собственности или 
		на ином законном основании, опыта работы, связанного с предметом контракта, и деловой репутации, 
		специалистов и иных работников определенного уровня квалификации";

// Формирование массива второй+третьей строки
$tit_tab = explode ("#", $tit);

$title_length[2] = count($tit_tab); // Длина массива второй+третьей строки
 
 // Разбивка массива второй+третьей строки на подмассивы второй и третьей строк
for ($i = 0; $i <= $title_length[2]; $i++) {
	$title_tab[$i] = explode ("_", $tit_tab[$i]);
}
print_r($title_tab);
print "<br> +++++++++++++++++++++++++++++++++++++<br>";;
 // Оформление подмассивов второй строки на массив второй строки и массив третьей строки
for ($i = 1; $i <= $title_length[2]; $i++) {
	$title_table[2][text][$i] = $title_tab[$i - 1][1];
	$title_table[2][col][$i]  = 1;
	$title_table[2][row][$i]  = 1;
	$title_table[2][font][$i] = 9;

	$title_table[3][text][$i] = $title_tab[$i - 1][0];
	$title_table[3][col][$i]  = 1;
	$title_table[3][row][$i]  = 1;
	$title_table[3][font][$i] = 16;	
}

$title_table[3][row][1] = 3; // Высота ячейки "Значимость цены контракта"
$title_table[2][font][1] = 11; // Шрифт ячейки "Цена контракта"
$title_table[2][col][3]  = 2;
$title_table[3][col][3]  = 2;

print_r($title_table);


print_r($title_length_2);
print_r($title_table_2);
print $title_length[2];

$title_table_2 = array (
	"text" => array(
				"1.1. Цена контракта",
				"2.1. Качественные, функциональные и экологические характеристики объекта закупки",
				"2.2. Квалификация участников закупки, в том числе наличие у них финансовых ресурсов, 
				оборудования и других материальных ресурсов, принадлежащих им на праве собственности или 
				на ином законном основании, опыта работы, связанного с предметом контракта, и деловой репутации, 
				специалистов и иных работников определенного уровня квалификации"),
	"col" => array(1, 1, 2),
	"row" => array(1, 1, 1),
	"font"=> array(11, 9, 9)	
		);

$title_table_3 = array (
	"text" => array(
				"Значимость критериев:",
				"60%",
				"20%",
				"20%"),
	"col" => array(2, 1, 1, 2),
	"row" => array(3, 3, 1, 1),
	"font"=> array(11, 14, 14, 14)	
		);

$title_table_4 = array (
	"text" => array(
				"2.1.1. Организационно-технологическая схема оказания услуг",
				"60%",
				"40%"),
	"col" => array(1, 1, 1),
	"row" => array(2, 1, 1),
	"font"=> array(9, 14, 14)	
		);

$title_table_5 = array (
	"text" => array(
				"2.2.1. Опыт участника по успешной поставке товара,выполнения работ, оказанию услуг сопоставимого характера",
				"2.2.2. Деловая репутация участника закупки"),
	"col" => array(1, 1),
	"row" => array(1, 1),
	"font"=> array(6, 6)	
		);

$title_table_6 = array (
	"text" => array(
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
	"text" => array(
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

print  "Длина массива:" . count($title_table_1[text]);
print  "<br>Общая Длина массива:" . $q=count($title_table_1, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_1);
print  "<br><br> Длина массива:" . count($title_table_2[text]);
print  "<br>Общая  Длина массива:" . $q=count($title_table_2, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_2);
print  "<br><br> Длина массива:" . count($title_table_3[text]);
print  "<br>Общая  Длина массива:" . $q=count($title_table_3[text], COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_3);
print  "<br><br> Длина массива:" . count($title_table_4[text]);
print  "<br>Общая  Длина массива:" . $q=count($title_table_4, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_4);
print  "<br><br> Длина массива:" . count($title_table_5[text]);
print  "<br>Общая  Длина массива:" . $q=count($title_table_5, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_5);
print  "<br><br> Длина массива:" . count($title_table_6[text]);
print  "<br>Общая  Длина массива:" . $q=count($title_table_6, COUNT_RECURSIVE) . "<br>" ;
print_r($title_table_6);
print  "<br><br> Длина массива:" . count($title_table_7[text]);
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
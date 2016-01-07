<?php
/** Класс формирования отдельной строки таблица по контенту, colspan (количеству занимаемых столбцов), rowspan 
(количеству занимаемых строк), выбираемых из отдельного двумерного массива массива
*/
class Row {
	var $row_array;

	function __construct ($row_array) {
		$this -> row_array = $row_array;
		$this -> end_array = count($row_array, COUNT_RECURSIVE) / 4 - 2;
	}

	// Функция вывода строки
	function view_row() {
		echo "<tr>";
		for ($i = 0; $i <= $this -> end_array; $i++)  {
			$cell_table = new Cell ($this -> row_array[name][$i], $this -> row_array[col][$i], $this -> row_array[row][$i], $this -> row_array[font][$i]);
		 	$cell_table -> view_cell();
		}
		echo "</tr>";
	}

}

// Вывод первой строки заголовка таблицы	

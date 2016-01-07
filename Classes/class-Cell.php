<?php
// Класс формирования отдельной ячейки таблица по контенту, colspan (количеству заимаемых столбцов) и rowspan (количеству занимаемых строк)

class Cell {
	var $content;
	var $col;
	var $row;
	var $font;	

	function __construct ($content, $col, $row, $font) {
		$this -> content = $content;
		$this -> col = $col;
		$this -> row = $row;
		$this -> font = ' style = "font-size: ' . $font .'pt;" ';		
	}

	// Функция вывода ячейки
	function view_cell() {
//		echo $this -> font;
		echo '<td colspan=" ' . $this -> col . ' " rowspan=" ' . $this -> row . '" ' . $this -> font . '> ' . $this -> content . '</td>';
	}

}


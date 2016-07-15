<?php
//возвращает перевод строки между параметрамиж
function perevodStr($par1, $par2, $php_eol = '<br>'){
	global $value;

	$result = $par1 . '' . $php_eol . '' . $par2;

	return $result;
}
$value = 1;
########################################################

echo perevodStr('First par', 'Second par');

//возвращает перевод строки;
function perevod(){
	return '<br>';
}
########################################################

//возвращает пробел между параметрами и перевод строки в конце;
function probelPerevod($param1, $param2, $param3 = ' '){
	return $param1 . $param3 . $param2 . perevod();
}
########################################################

echo perevod() . probelPerevod('1', '2');
echo probelPerevod('2', '4');
echo probelPerevod('3', '5');

//создаем массив с именами лидеров рок-групп.
//создаем цикл. в нем вызвать функцию, которая к именам приписывает еще чего-то.
function add_text($name, $par1 = ' - рок музыкант'){ //вместо второго параметра в нашем случае подставит $key;
	return $name . ' = ' . $par1 . perevod();
}

$lider = ''; // объявляем пустую переменную, в нее внутри цикла будем конкатенировать текст.
#########################################################
$names = array(
			'key1' => 'Lider1', 
			'key2' => 'Lider2', 
			'key3' => 'Lider3', 
			'key4' => 'Lider4', 
			'key5' => 'Lider5'
		);
foreach ($names as $key => $name) {
	$lider .= add_text($name, $key);
}
echo $lider; //Lider1 = key1;

echo "<br>";

//создаем функцию, внутри нее цикл;
function rokLiders($names){
	$lider = '';
	foreach ($names as $key => $name) {
		$lider .= add_text($name, $key);
	}
	return $lider;
}
####################################################
echo "rokLiders" . perevod() . rokLiders($names);
echo perevod();

function rokLiders_table($names){
	$text = '<table border=1><thead><tr>';
	$data = '';
	foreach ($names as $key => $name) {
		$text .= '<td><b>' . $key . '</b></td>';
		$data .= '<td>' . $name . '</td>';
	}

	$text .= '</tr></thead><tr>';

	foreach ($names as $key => $name){
		$text .= '<td>' . $name . '</td>';
	}

	return $text . '</tr></table>';
}
echo rokLiders_table($names);
######################################    ДОДЕЛАТЬ!!!!!!!

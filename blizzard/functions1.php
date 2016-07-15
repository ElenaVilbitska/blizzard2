<?php
//возвращает перевод строки;
function perevod(){
	return '<br>';
}
########################################################
function add_param($name, $key){ //вместо второго параметра в нашем случае подставит $key;
	if (preg_match('/i/', $key)) { //если есть буква i в иемни в массиве $key; i|k = [ik] = i или k 
		return "<i>" . $name . ' - ' . $key . "</i>" . perevod() ;
	}
	if (preg_match('/e/', $key)) {//если есть буква е в иемни в массиве $key;
		return "<b>" . $name . ' - ' . $key . "</b>" . perevod() ;
	}
	else{
		return $name . ' - ' . $key . perevod();
	}
}
########################################################
function printArray($rok){
	$stroka = '';
	foreach ($rok as $key => $name) {
		if (is_array($name)){
			$stroka .= printArray($name);
		}else{
			$stroka .= add_param($key, $name);
		}
	}
	return $stroka . perevod();
}
$rok = array(
			'bas'      => array('Имя' => 'Ivan', 'Возраст' => 35 ,'Стаж' => 4), 
			'lider'    => array('Имя' => 'Pavel', 'Возраст' => 25 ,'Стаж' => 2), 
			'producer' => array('Имя' => 'Nik', 'Возраст' => 30 ,'Стаж' => 3),
		);
echo printArray($rok);

//function sort array
$keys = array_keys($rok);
array_multisort($rok, $keys);

$text = printArray($rok);
echo $text;

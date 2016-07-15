<?php
print_r ($_GET);
echo "<br><br>";
print_r ($_FILES);
###########################################################
const DIR_IMAGES = 'img/messages';

function saveFile(){
	if (!file_exists('img'))
		mkdir('img');

	if (!file_exists(DIR_IMAGES))
		mkdir(DIR_IMAGES);

	return move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGES . '/' . $_FILES['image']['name']);
}
###########################################################
if (!isset($_GET['name']) ){
	echo "Not enuought parametrs";
	exit(-1);
}

if(!isset($_FILES['image']) || $_FILES['image']['error']){
	echo "<br>Error for upload file";
	exit(0); //ошибка если меньше чем 0.
}

$sizeFile = $_FILES['image']['size'];
if ($sizeFile <=0 || $sizeFile > 5000000) {
	echo "<br>Error file's size";
	exit(-2);
}

var_dump($_FILES);

if (saveFile())
	echo "<br>Successfull save image!";
else
	echo "<br>Error save image!";

echo $_FILES['image']['name'];
###########################################################




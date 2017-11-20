<?php 


$all = "Name: " . $_POST['name']."\r\n"."Message:" .$_POST['message']."\r\n";

$files = "result.txt";
if (!$handle = fopen($files, 'a')) {
	echo  "Невозможно открыть файл ($filename)";
	exit;
}
if (fwrite($handle, $all)=== false) {
	echo "Невозможно произвести запись в файл ($files)";
	exit;
}else{
	echo "Информация успешно записана в файл!!!";
}
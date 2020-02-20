<?php 

$year = json_decode(trim($_POST['year']));

if (is_int($year)){
$out = date('L', mktime(0, 0, 0, 1, 1, $year));
echo ($out == 1) ? 'ДА' : 'НЕТ';
}else{
	echo "ОШИБКА ВО ВХОДНЫХ ДАННЫХ";
}
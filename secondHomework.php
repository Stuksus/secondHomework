<?php
	error_reporting( E_ERROR ); 
	$user = $_GET['user'];
	$firstVar = 1;
	$secondVar = 1;
		if (is_null($user)){

			echo "<script> alert(\"Программа остановлена!\\n\\Для продолжения работы введите числовое значение в адресную строку, после ?user=\\n\\Пример: http://university.netology.ru/u/smetanin/me2/secondHomework.php?user=4\"); </script>";

		} else{

		start:

		if ($firstVar > $user){
			echo 'Число НЕ входит в последовательность';
		}
		elseif($firstVar == $user){
			echo 'Число входит в последвательность';
		}
		else {
			$thirdVar = $firstVar;
			$firstVar += $secondVar;
			$secondvar = $thirdVar;
			goto start;

		}
}

?>
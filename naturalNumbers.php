<?php
	error_reporting( E_ERROR ); 
	$user = $_GET['user'];
	$firstVar = 1;
	$secondVar = 1;

	if (is_null($user)){

		echo "<script> alert(\"Программа остановлена!\\n\\Для продолжения работы введите числовое значение в адресную строку, после ?user=\\n\\Пример: http://university.netology.ru/u/smetanin/me2/naturalNumbers.php?user=4\"); </script>";

	} else{

		do {

		if ($firstVar > $user){
			echo 'Задуманное число НЕ входит в последовательность';
			$flag = false;
			
		}
		elseif($firstVar == $user){
			echo 'Задуманное число входит в последвательность';
			$flag = false;
			
		}
		else {
			$flag =true ;
			$thirdVar = $firstVar;
			$firstVar += $secondVar;
			$secondvar = $thirdVar;

		}
			
		}while ($flag); 
			
	}
?>

<?php

require_once 'connect.php';

$type_count = 'SELECT COUNT(*) FROM GATUNKI';
$type_query = mysqli_query($connect,$type_count);
$type_result = mysqli_fetch_array($type_query);

echo 'Metoda: FETCH ARRAY <br> 
	  Ilość gatunków w bazie wynosi: '.$type_result[0].'<br><br>';
	  
$location_count = 'SELECT COUNT(*) FROM LOKALIZACJE';
$location_query = mysqli_query($connect,$location_count);
$location_result = mysqli_fetch_assoc($location_query);

echo 'Metoda: FETCH ASSOC <br> 
	  Ilość gatunków w bazie wynosi: '.$location_result['COUNT(*)'].'<br><br>';
	  
$observation_count = 'SELECT * FROM OBSERWACJE';
$observation_query = mysqli_query($connect,$observation_count);
$observation_result = mysqli_num_rows($observation_query);

echo 'Metoda: NUM ROWS <br> 
	  Ilość gatunków w bazie wynosi: '.$observation_result;

mysqli_close($connect);	  

?>
<?php

require_once 'connect.php';

$type_list = 'SELECT ID_gatunku,nazwa_zwyczajowa,nazwa_lacinska FROM gatunki';
$type_list_query = mysqli_query($connect,$type_list);

echo '<table border = 1>
		<th>ID_gatunku</th>
		<th>nazwa_zwyczajowa</th>
		<th>nazwa_lacinska</th>';

while ($type_list_result = mysqli_fetch_array($type_list_query)) {
	
	echo '<tr><td>'.$type_list_result[0].'</td><td>'
				   .$type_list_result[1].'</td><td>'
				   .$type_list_result[2].'</td></tr>';
	
};

echo '</table>';

mysqli_close($connect);	



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="main.php" method="post">
<input type="text" name="nazwa" id="nazwa">
<input type="password" name="haslo" id="haslo">
<input type="submit" value="zaloguj">


<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// $ania=1;


// };

session_start();
if(isset($_SESSION['logowanie'])){
    header(header:'location:index.php');
    exit();
}
elseif(isset($_POST['nazwa'])&& isset($_POST['haslo'])){
if($_POST['nazwa']=='ania'&& $_POST['haslo']=='ania321'){
$_SESSION['logowanie']=$_POST['nazwa'];
header(header:'location:index.php');
exit();
}else{
    echo "niepoprawne dane";
}}

   //tablica 4 uzytkownikow w miejscu gdzzie szukalismy tylko anny, przeszukiwac czy dany uzytkownik istnieje w tablicy, reszta
   //zostaje taka sama 
?>
</form>
</body>
</html>




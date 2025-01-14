
<?php
session_start();
if(isset($_SESSION['logowanie'])){
    header('location:main.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$imie=ucfirst($_SESSION['logowanie']);
echo "Witaj".$imie;
?>
<p>Przed opuszczeniem sie wyloguj</p>
<a href="logout.php">WYLOGUJ</a>

<body>
</html>
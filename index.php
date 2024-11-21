<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="div1">
<h2>Zegar:</h2>
</div>


<div class="div2">
<?php


// $today=date("m.d.y");

// echo $today."<br>"; 

$today=date("j.n.Y");

echo $today."<br>"; 

$today=date("H:i:s");

echo $today."<br>"; 


$dzien=date("d");
$dzien_tyg = date("l");
$miesiac = date("n");
$rok=date("Y");

$miesiac_pl = array(1=>"stycznia","lutego","marca","kwietnia","maja","czerwca","lipca","sierpnia","wrzzesnia","pazdziernika","listopada","grudnia");
$dzien_tyg_pl=array("Monday"=>"Poniedzialek", "Thursday"=>"Czwartek");

echo $dzien_tyg_pl[$dzien_tyg]." ".$dzien." ".$miesiac_pl[$miesiac]." ".$rok."r";

// $today=date("D M j G:i:s T Y");

// echo $today."<br>"; 

// $today=date("h-i-s, j-m-y, it is w Day z");

// echo $today."<br>"; 


?>    

<form class="formik" action="" method="POST">
<label for="miesiac">miesiac</label>
<input type="number" name="miesiac" id="miesiac">
<label for="miesiac">dzien</label>
<input type="number" name="dzien" id="dzien">
<label for="miesiac">rok</label>
<input type="number" name="rok" id="rok">
<input type="submit" value="Licz"><br>

<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $miesiac2=$_POST["miesiac"];
    $dzien2=$_POST["dzien"];
    $rok2=$_POST["rok"];
}

echo "Wynik: " . $miesiac2. " ". $dzien2. " ".$rok2;



echo " ". date("l",mktime(0,0,0,$miesiac2,$dzien2,$rok2)). "<br>";

$czas= (mktime(0,0,0,$miesiac2,$dzien2,$rok2)-time())/60/60/24;

$hours = floor(($czas*86400))/3600;

echo "Do tej daty pozostało: ".$hours."godzin";
?>


</form>
</div>

</body>
</html>



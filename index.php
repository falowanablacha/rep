<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="#" method="post">
    <input type="number" name="dzien" id="dzine" max="31" min="1">
    <input type="number" name="miesiac"max="12" min="1">
    <input type="number" name="rok" id="rok" min="1">
    <input type="submit" value="KLYK">
</form>



<style>

@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');

@import url('https://fonts.cdnfonts.com/css/broadway');
    body {
        display: flex;
        justify-content: center;
        width: 100vw;
        background-color: black;
        font-size: 40px;
        font-weight: 800;
        font-family: 'Broadway Flat 3D', sans-serif;
        
    }
    * {
        color: gold;
        padding: 15px 0px;
    }
    input {
        background-color: pink;
    }
</style>

<?php 

// $today = date('m.d.y');
// $today2 = date('F j,Y,g:i a');
// $today3 = date('j, n,Y');
// $today4 = date('h-i-s,j-m-y, it is w Day z');
// $today5 = date('H:i:s');
// $today6 = date('D M j G:i:s T Y');

// $dzien = date('d');
// $rok = date('Y');
// $miesiac = date('n');
// $dzien_tyg = date('l');

// echo $today . "<br>";
// echo $today2 . "<br>";
// echo $today3 . "<br>";
// echo $today4 . "<br>";
// echo $today5 . "<br>";
// echo $today6 . "<br>";
// echo $dzien_tyg . "<br>";
// echo $miesiac . "<br>";
// "<br>" . "<br>";

// $miesiac_pl = array("stycznia","lutego","marca","kwietnia","maja","czerwca","lipca","sierpnia","wrzesnia","pazdzierza","listopadka","grudzienka" );
// $dzien_tyg_pl = array('Monday' => 'poniedzialek', 'Tuesday' => 'wtorunio', 'Wednesday' => 'sierjeda', 'Thursday' => 'czwartunio', 'Friday' => 'Piątek', 'Saturday' => 'sobutka', 'Sunday' => 'niedziela');

// echo $dzien_tyg_pl[$dzien_tyg]. " ". $dzien. " ".$miesiac_pl[$miesiac]." ".$rok."r" . "<br>";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dzien = $_POST['dzien'];
    $miesiac = $_POST['miesiac'];
    $rok = $_POST['rok'];

   
    $dzien2 = date('d');

    echo $dzien . $miesiac . $rok . "<br>";
    echo date("M-d-Y", mktime(0, 0, 0, $miesiac, $dzien, $rok)) . " ";
    echo date("l", mktime(0, 0, 0, $miesiac, $dzien2, $rok)) . " ";
    $czas = (mktime(0,0,0,$miesiac,$dzien2,$rok)-time())/60/60/24;
    $hours = floor(($czas($dzien2*86400))/3600);
}

?>


</body>
</html>
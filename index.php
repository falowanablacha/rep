<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$liczba_st = 5;
$liczba_nd = 4;
$powtorzenia = 1;
$operator = '+';
$maks = 7;

do {
    switch ($operator) {
        case '+':
            echo "witam" . $liczba_st + $liczba_nd;
            break;
        
        default:
            echo "ni ma takiego znaku";
            break;
    }
    $powtorzenia++;
} while ( $powtorzenia <= $maks);



?>
</body>
</html>


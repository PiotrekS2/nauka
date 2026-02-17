<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo'zadanie1:';
echo'<br>';
echo'<br>';

$a = 5;

if ($a % 2 == 0)
     {
    echo ' liczba jest parzysta';
} 
else 
    {
    echo 'liczba nieparzysta';
}

echo'<br>';
echo'<br>';
echo'zadanie2:';
echo'<br>';
echo'<br>';



$b=6;
$c=3;

if($a % $c == 0)
    {
        echo 'liczby sie przez siebie dziela';
    }
else
    {
        echo'liczby sie przez siebie nie dziela';
    }
echo'<br>';
echo'<br>';
echo'zadanie3:';
echo'<br>';
echo'<br>';

$d=7;
if($d >= 1 && $d<=10)
    {
        echo'liczba jest z przedzailu <1,10>';
    }
    else if($d >= 17 && $d<=21) 
    {
        echo' liczba jest z przedzailu <17,21>>';
    }

echo'<br>';
echo'<br>';
echo'zadanie4:';
echo'<br>';
echo'<br>';












?>
</body>
</html>
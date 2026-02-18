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


$e=7;

if($e > 0)
    {
        echo'liczba jest wieksza od zera';
    }
 else if($e < 0)
    {
        echo'liczba jest mniejsza od zera';
    }
    else
        {
            echo'liczba jest rowan zero';
        }



echo'<br>';
echo'<br>';
echo'zadanie 5:';
echo'<br>';
echo'<br>';

$wiek= 18;
if($wiek < 11)
    {
        echo'dziecko';
    }
    else if($wiek > 11 && $wiek <17)
        {
            echo'nastolatek';
        }
        else
            {
                echo'dorosly';
            }

echo'<br>';
echo'<br>';
echo'zadanie 6:';
echo'<br>';
echo'<br>';


$haslo='1234567';
if(strlen($haslo) < 5)
    {
        echo'bardzo slabe';
    }
    else if(strlen($haslo) >= 5 && strlen($haslo) < 8)
        {
            echo'slabe';
        }
        else if(strlen($haslo) >=9 && strlen($haslo) < 11)
            {
                echo'silne';
            }
            else
                {
                    echo'bardzo silne';
                }


echo'<br>';
echo'<br>';
echo'zadanie 7:';
echo'<br>';
echo'<br>';





$rok=1993;
if ($rok < 1582) 
    {
    echo "Program obsługuje lata od 1582 roku.";
} 
else if ($rok % 4 == 0 && $rok % 100 != 0 || $rok % 400 == 0)
 {
        echo "Rok jest przestepny";
 }
     else
         {
        echo "Rok nie jest przestepny";
    }


?>
</body>
</html>
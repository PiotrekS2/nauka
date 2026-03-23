<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$tab=array(1,2,3,4,5,6,7,8,9,10);
$tab1=[1,24,45,68];

function wypiszTablice($tab)
{
    for($i=0;$i<count($tab);$i++)
        {
            echo $tab[$i]." ";
        }
}
function wypisz()
{
    echo"ahwirfhaid";
    echo"ahwirfhaid";
    echo"ahwirfhaid";
}
wypiszTablice($tab);
echo"<br>";
wypiszTablice($tab1);
wypisz();
wypisz();
echo"<br>";
echo"<br>";
echo"zadanie1";
echo"<br>";
echo"<br>";

function Suma($a,$b){
    $wynik=0;
    $wynik=$a+$b;
    return $wynik;
}
$c=suma(4,5);
echo"wynik dodawania to: ".$c;
echo"<br>";
echo"<br>";
echo"zadanie2";
echo"<br>";
echo"<br>";
function roznica($d,$e)
{
    $wynik=0;
    $wynik=$d-$e;
    return $wynik;
}
$f=roznica(5,3);
echo"wynik odejmowania to: ".$f;
echo"<br>";
echo"<br>";
echo"zadanie3";
echo"<br>";
echo"<br>";
function mnozenie($g,$h)
{
    $wynik=0;
    $wynik=$g*$h;
    return $wynik;
}
$i=mnozenie(5,3);
echo"wynik mnozenia to: ".$i;

echo"<br>";
echo"<br>";
echo"zadanie4";
echo"<br>";
echo"<br>";
function dzielenie($m,$n)
{
    $wynik=0;
    $wynik=$m/$n;
    return $wynik;
}
$o=dzielenie(5,3);
echo"wynik dzielenia to: ".$o;





?>
    
</body>
</html>
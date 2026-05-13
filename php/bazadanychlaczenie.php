<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//$polaczenie=mysqli_connect("localhost","root","","bazadanych");
//if($polaczenie)
//{
//    echo"polaczono z baza danych o nazwie bazadanych.";
//}
//else
//{
//    echo"nie polaczono z baza danych.";
//}
//mysqli_close($polaczenie);


//$serwer="localhost";
//$uzytkownik="root";
//$haslo="";
//$nazwa_bazy_danych="baza";
//$polaczenie="";

//$polaczenie=mysqli_connect($serwer,$uzytkownik,$haslo,$nazwa_bazy_danych);

//if($polaczenie)
//    {
//        echo"polaczono z baza danych o nazwie baza.";
//    }
//else
//    {
//        echo"NIE polaczono z baza danych.";
//    }

//mysqli_close($polaczenie);



$polaczenie=mysqli_connect("localhost","root","","ksiegarnia");

if($polaczenie)
{
    echo"polaczono z baza danych ksiegarnia.";
}
else
    {
        echo"nie polaczono z baza danych.";
    }
mysqli_close($polaczenie);









?>
</body>
</html>
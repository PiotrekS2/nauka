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
$tab2=[1,24,45,68];
$tab3=array("ania","Piotr","Marek");
$tab4=array("red"=>"czerwony","green"=>"zielony","pink"=>"rozowy");


echo $tab[3]."<br>";
echo $tab2[2]."<br>";
echo $tab3[1]."<br>";
echo $tab4["pink"]."<br>";

for($i=0;$i<count($tab); $i++)
    {
echo "tab[".$i."]=".$tab[$i]." ";
    }
echo"<br>";

foreach($tab4 as $element)
    {
    echo $element." ";
    }
echo"<br>";
    $i=0;
while($i<count($tab3))
    {
        echo"tab3[".$i."]=".$tab3[$i]." ";
        $i++;
    }


echo'<br>';
echo'.................................................'.'<br>';
echo'zadanie1:';
echo'<br>';
echo'<br>';
$tablica = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10,);
    for($i=0; $i<count($tablica); $i++)
{
    echo "tab[".$i."]=".$tab[$i]." ";
}
echo'<br>';
foreach($tablica as $element)
    {
        echo $element. " ";
    }
echo'<br>';
echo'.................................................'.'<br>';
echo'zadanie2:';
echo'<br>';
echo'<br>';
$tablica = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);
$min=$tablica[0];
$max=$tablica[0];
    for($i=0; $i<count($tablica); $i++)
{
     if ($tablica[$i] < $min) {
        $min = $tablica[$i];
    }

    if ($tablica[$i] > $max) {
        $max = $tablica[$i];
    }
}
echo "liczba ".$min." jest najmniejsza"."<br>";
echo "liczba ".$max." jest najwieksza"."<br>";
echo'<br>';
echo'.................................................'.'<br>';
echo'zadanie3:';
echo'<br>';
echo'<br>';

$suma=0;
$srednia;
for($i=0; $i<count($tablica); $i++)
    {
        $suma+=$tablica[$i];
    }
$srednia=$suma/count($tablica);
echo "srednia wynosi= ".$srednia;
echo'<br>';
echo'.................................................'.'<br>';
echo'zadanie4:';
echo'<br>';
echo'<br>';

$licznik=0;
for($i=0; $i<count($tablica); $i++)
    {
        if($tablica[$i]==3)
            {
                $licznik++;
            }
    }
echo"liczba 3 w tablicy= ".$licznik;
echo'<br>';
echo'.................................................'.'<br>';
echo'zadanie5:';
echo'<br>';
echo'<br>';



?>
</body>
</html>
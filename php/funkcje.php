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







?>
</body>
</html>
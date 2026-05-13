<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$polaczenie=mysqli_connect("localhost","root","","wedkowanie");

$zapytanie3="SELECT ryby.nazwa,lowisko.akwen,lowisko.wojewodztwo FROM ryby JOIN lowisko ON ryby.id=lowisko.Ryby_id WHERE lowisko.rodzaj=3";

$wynik=mysqli_query($polaczenie,$zapytanie3);
    
    
$ile=mysqli_num_rows($wynik);
echo $ile;
    
    
    
    
    
    
    
    
    
    
    
mysqli_close($polaczenie);
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
    


    
</body>
</html>
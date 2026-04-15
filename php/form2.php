<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="form2.php" method="post"><br>
<label for="">Nazwa konta</label><br>
<input type="text" name="NazwaKonta"id=""><br>
<label for="">Nazwa firmy</label><br>
<input type="text" name="NazwaFirmy"id=""><br>
<label for="">Kod promocyjny</label><br>
<input type="text" name="KodPromocyjny"id=""><br><br>

<label for="">Email</label><br>
<input type="mail" name="Email"id=""><br>
<label for="">Haslo</label><br>
<input type="password" name="Haslo"id=""><br>
<label for="">Powtorz Haslo</label><br>
<input type="password" name="HasloRe"id=""><br>

<input type="checkbox" name=""id="">Zapoznałem się z regulaminem<br>
<input type="checkbox" name=""id="">Wyrażam zgodę na przetwarzanie danych osobowych<br>
<input type="submit" value="wyslij" name="wyslij" id="">
<input type="reset" value="wyczysc" name="reset" id="">
</form>

<?php
    if(isset($_POST['wyslij']) )
{

$NazwaKonta=$_POST['NazwaKonta'];
echo"Nazwa Konta: ".$NazwaKonta."<br>";
$NazwaFirmy=$_POST['NazwaFirmy'];
echo"Nazwa Firmy: ".$NazwaFirmy."<br>";
$KodPromocyjny=$_POST['KodPromocyjny'];
echo"Kod Promocyjny: ".$KodPromocyjny."<br>"."<br>";
$Email=$_POST['Email'];
echo"Email: ".$Email."<br>";
$Haslo=$_POST['Haslo'];
echo"Hasło: ".$Haslo."<br>";
$HasloRe=$_POST['HasloRe'];
echo"Hasło Powtórzone: ".$HasloRe."<br>";

}








?>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form action="form.php" method="GET">
<label for="">Login</label><br>
<input type="text" name="login" id=""><br>
<label for="">Haslo</label><br>
<input type="password" name="haslo" id=""><br>
<input type="submit" value="zaloguj" name="" id="">
<input type="reset" value="czysc" name="" id=""><br>
</form>







   <?php
    if(isset($_GET['login'])&& isset($_GET['haslo']))
{
$login=$_GET['login'];
$haslo=$_GET['haslo'];
if($login!=""&&$haslo!="")
    {
echo"login to: ".$login."<br>";
echo"haslo to: ".$haslo;
}
else
    {
        echo"login lub haslo puste.";
    }
}
else
{
    echo"Nic nie zostalo wpisane";
}



echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

    ?>



<form action="form.php" method="post"><br>
<label for="">data(format rr-mm-dd</label><br>
<input type="text" name="data"id=""><br>
<label for="">ile osob</label><br>
<input type="number" name="ile"id=""><br>
<label for="">Nr Telefonu</label><br>
<input type="text" name="tel"id=""><br>
<input type="checkbox" name=""id=""> zgadzam sie na przetwarzanie danych osobowych<br>
<input type="submit" value="wyslij" name="wyslij" id="">
<input type="reset" value="wyczysc" name="reset" id="">
</form>

<?php
    if(isset($_POST['wyslij']) )
{
echo"przycisk"."<br>";
$data=$_POST['data'];
echo"data to: " . $data."<br>";
$ile=$_POST['ile'];
echo"liczba osob: " . $ile."<br>";
$tel=$_POST['tel'];
echo"Nr telefonu: " . $tel."<br>";

}









?>




















</body>
</html>
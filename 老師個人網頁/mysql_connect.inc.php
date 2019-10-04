<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Connect-Type" content="text/html" ;charset="utf-8"/>
</head>
<body>
<?php
$server = "localhost";
$name = "105021046";
$user = "105021046";
$passwd = "#3bAcCsEa";
//$link=new mysqli('localhost','105021046','#3bAcCsEa','105021046');

$link=mysqli_connect('localhost','105021046','#3bAcCsEa','105021046');
if (!$link) {
    die("無法連線資料庫");
}
mysqli_set_charset($link,'utf8');

?>
</body>
</html>
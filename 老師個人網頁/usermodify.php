<?php session_start();?>

<?php
include("mysql_connect.inc.php");
$username = $_POST['username'];
$userpw = sha1($_POST['userpw']);
$useremail = $_POST['useremail'];
$userphone = $_POST['userphone'];
$sql = "UPDATE user SET `name` = '$username', `password`='$userpw',`email`='$useremail',`phone`='$userphone' WHERE`user`.`id` = '$_SESSION[username]'";
$result = $link->query($sql);
if ($result) {
    echo '<p align="center">修改成功</p>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}else{
    echo '<p align="center">修改失敗</p>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
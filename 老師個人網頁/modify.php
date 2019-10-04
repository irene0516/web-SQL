<?php
include("mysql_connect.inc.php");
?>

<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$userpw = sha1($_POST['userpw']);
$useremail = $_POST['useremail'];
$userphone = $_POST['userphone'];

$sql1 = "UPDATE teachername SET `email` = '$email', `name`='$name',`phone`='$phone' WHERE `teachername`.id = '1'";
$result1 = $link->query($sql1);
if ($result1) {
    echo '<p align="center">修改成功</p>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}

$sql = "UPDATE user SET `name` = '$username',`userpw` = '$userpw',`email` = '$useremail',`phone` = '$userphone' WHERE `user`.id='$username'";
$result = $link->query($sql);
if ($result) {
    echo '<p align="center">修改成功</p>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>


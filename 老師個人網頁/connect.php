<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html ;charset= utf-8"/>
<?php
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = SHA1($_POST['pw']);
// 从表中提取信息的sql语句
$sql = "SELECT * FROM user where id = '$id'";
// 执行sql查询
$result = $link->query($sql);
// 获取查询结果
$row = $result->fetch_row();
if ($id != null && $pw != null && $row[0] == $id && $row[2] == $pw) {
    $_SESSION['username'] = $id;
    echo '<p align="center">登入成功</p>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
} else {
    echo '<p align="center">登入失敗</p>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
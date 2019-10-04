<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['teacherid'];
$tn = ($_POST['teachername']);
$wt = ($_POST['whereteacher']);
$position = $_POST['position'];
//紅色字體為判斷密碼是否填寫正確
$userid = $_POST['userid'];
$username = $_POST['username'];
$userpassword  = sha1($_POST['password']);
$userpassword2  = sha1($_POST['password2']);
$useremail  = $_POST['email'];
$userphone = $_POST['phone'];
if($_SESSION['id'] != null && $wt!= null && $position!= null && $tn!= null&& $id!= null)
{
    //更新資料庫資料語法
    $sql = "update `$wt` set name='$tn', position='$position' where id='$id'";
    echo $sql;
    if(mysqli_query($link,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=loginafter.php">';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=loginafter.php">';
    }
}elseif($_SESSION['id'] != null && $userid!= null && $username!= null && $userpassword!= null&& $userpassword!= null){
    if($userpassword!=$userpassword2){
        echo '修改失敗!兩次輸入的密碼不一樣';
          echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
    }else{
          $sql = "update user2 set username='$username', password='$userpassword',email='$useremail',phone='$userphone' where id='$userid'";
          if(mysqli_query($link,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=loginafter.php">';
    }else{
          echo '修改失敗!';
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=loginafter.php">';
    }
    }

}
else
{
    echo '您無權限觀看此頁面!';
    //echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
}
?>
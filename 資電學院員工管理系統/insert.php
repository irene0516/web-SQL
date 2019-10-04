<?php session_start(); ?>
<?php
include("mysql_connect.inc.php");

$id = $_POST['userid'];
$name = $_POST['username'];
$pw = sha1($_POST['password']);
$pw2 = sha1($_POST['password2']);
$email = $_POST['email'];
$phone = $_POST['phone'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id!= null && $name!= null && $pw!= null&& $pw2!= null&& $email!= null&& $phone!= null){
     if($pw!=$pw2){
        echo '修改失敗!兩次輸入的密碼不一樣';
          echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
    }else{
          $sql = "INSERT INTO user2 (`id`,`username`,`password`,`email`,`phone`) VALUES ('$id','$name','$pw','$email','$phone')";
    if(mysqli_query($link,$sql)){
        echo '新增成功!';
        unset($_SESSION['id']);
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
    }else{
        echo '新增失敗!';
        //echo '<meta http-equiv="REFRESH" CONTENT="2;url=loginafter.php">';
    }
    }
    //新增資料進資料庫語法
  
}else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
}
?>
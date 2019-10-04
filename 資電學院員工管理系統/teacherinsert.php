
<?php
include("mysql_connect.inc.php");

$tn = $_POST['teachername'];
$wt = $_POST['whereteacher'];
$po = $_POST['position'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($wt!= null && $po!= null && $tn!= null){
    //新增資料進資料庫語法
    $sql = "INSERT INTO $wt (`name`,`position`) VALUES ('$tn','$po')";
    if(mysqli_query($link,$sql)){
        echo '新增成功!';
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
    }else{
        echo '新增失敗!';
        //echo '<meta http-equiv="REFRESH" CONTENT="2;url=loginafter.php">';
    }
}else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
}
?>
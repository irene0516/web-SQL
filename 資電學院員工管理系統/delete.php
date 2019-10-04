<?php session_start(); ?>
<?php
if (isset($_SESSION['id'])) {
include("mysql_connect.inc.php");
$name = $_POST['delid'];
$type = $_POST['type'];
$del=$_POST['userid'];

if ($type==2) {
$sql = "delete from `teacher2` where id ='$name'";
}elseif($type==1){
$sql = "delete from teacher where id ='$name'";
}elseif($type==3){
 $sql = "delete from teacher3 where id ='$name'";
}elseif($type==4){
 $sql = "delete from teacher4 where id ='$name'";
}elseif($type==5){
 $sql = "delete from teacher5 where id ='$name'";
}elseif($del!=null){
	 $sql = "delete from user2 where id ='$del'";
}
echo $sql;

if(mysqli_query($link, $sql)){
	unset($_SESSION['id']);
	  echo '刪除成功!';
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
}else{
	  echo '新增失敗!';
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
}
}else{
	  echo '您無權限觀看此頁面!';
	  echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
}
?>

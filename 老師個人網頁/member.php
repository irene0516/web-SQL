<?php session_start();?>
<meta http-equiv="Content-Type" content="text/html";charset="utf-8"/>
<?php
include("mysql_connect.inc.php");
if (isset($_SESSION['username'])) {
    $sql = "SELECT * FROM user where id = '$_SESSION[username]'";
    $result = $link->query($sql);
    $row = $result->fetch_row();
}
    echo'
    <html>
    <head></head>
    <body>
    <form name="form" method="post" action="usermodify.php">
    名字:<input type="text" name="username" value="'.$row[1].'"><br>
    密碼:<input type="password" name="userpw" ><br>
    email:<input type="text" name="useremail" value="'.$row[3].'"><br>
    phone:<input type="text"name="userphone" value="'.$row[4].'"><br>
    <input type="submit"name="button" value="修改" >
</form>
</body>
    </html>
    ';

?>
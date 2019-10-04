<?php session_start();

//include("connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
if (isset($_SESSION['username'])) {
    include("mysql_connect.inc.php");
    $sql = "SELECT * FROM user where id = '$id'";
    $result = $link->query($sql);
    $row = $result->fetch_row();
    echo '
<!DOCTYPE html>
<html lang="en">
<head>
<script>
var count=0;
function add(){
       count=count+1;
          if(count%2==1){
                 document.getElementById("logoutbtn").style.display="block";
                }else if(count%2==0){
                 document.getElementById("logoutbtn").style.display="none";
                }
    }</script>
    <meta charset="UTF-8">
    <title>楊鎮華教授\'s web</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/flipTimer.css"/>
    <link rel="stylesheet" href="css/calendar.css"><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="img" class="inner">
    <header id="header" class="target">
        <h1>楊鎮華教授</h1>
        <ul>
            <li class="english"><a href="#">English</a></li>
            if ('.isset($_SESSION[username].')){
             <div class="loginlist">
            <li >
            <a a href="#" class="login" onclick="add();">你好!' . $_SESSION[username] . '});
    });
</script>

</body>
</html>
\'';

} else {
    echo '<h1 align="center">您無權限觀看此頁面!</h1>';
    echo '<meta http-equiv=REFRESH CONTENT=5;url=index.html>';
}
?>


<?php
//            if ($_SESSION[\'username\'] != null) {
//                echo \'<li ><a href=""class="enter">你好!  " . $id. "</a></li>\';
//            } else {
//                echo '<li ><a href = "login.php"> login</a ></li >';
//            }
//            ?>
<!--<li><a href="" class="enter">你好!'.$_SESSION[username].'</a ></li >-->


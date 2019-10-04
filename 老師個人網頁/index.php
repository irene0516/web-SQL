<?php session_start();
header("Content-type:
 text/html;charset=utf-8"); ?>
<?php
header('Content-Type: text/html; charset=utf8');
include("mysql_connect.inc.php");
if (isset($_SESSION['username'])) {
    $sql = "SELECT * FROM user where id = '$_SESSION[username]'";
    $result = $link->query($sql);
    $row = $result->fetch_row();
}
$sql1 = "SELECT * FROM teachername where id= '1'";
$result1 = $link->query($sql1);
$row1 = $result1->fetch_row();
echo '
<!DOCTYPE html>
<html lang="en">
<head>
<script>
function getPosition (element) {
  // 搭配上面的示意圖可比較輕鬆理解為何要這麼計算
   var x = 0;
  var y = 0;
while(element) {
    x += (element.offsetLeft - element.scrollLeft + element.clientLeft);
    y += (element.offsetTop - element.scrollTop + element.clientTop);
    element = element.offsetParent;
}
  return { x: x, y: y };
}
var count=0;
function add(){
       count=count+1;
          if(count%2==1){
              var elem = document.getElementById("hi");
              var position = getPosition(elem);
                 document.getElementById("logoutbtn").style.display="block";
                  var a=(960-position.x)/960*100;
                 document.getElementById("logoutbtn").style.right=a+30+"px";
                }else if(count%2==0){
                 document.getElementById("logoutbtn").style.display="none";
                }
    }
    </script>
   
    <meta charset="UTF-8">
    <title>楊鎮華教授\'s web</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/flipTimer.css"/>
    <link rel="stylesheet" href="css/calendar.css"><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<div id="img" class="inner">
    <header id="header">
        <h1>' . $row1[1] . '</h1>
        <ul>
            <li class="english"><a href="#">English</a></li>';
if (isset($_SESSION['username'])) {
    echo '<div class="loginlist">
            <li >
                <a href="#" class="login" id="hi"onclick="add();">Hi !   ' . $row[1] . '</a >
            </li >  
            <script>var elem = document.getElementById("hi");
            var position = getPosition(elem);
              </script>
          
          </div>';
} else {
    echo '<li class="english"><a class="login" href="login.php">login</a></li>';
}
echo '</ul>
    </header>
</div>
 <ul id="logoutbtn">
    <li><a href="member.php">修改資料</a></li>
    <li><a href="logout.php">登出</a>
  </ul>
  </div>
<div id="content" class="inner">
    <div id="main">
        <div id="nav">
            <ul>
                <li  class="active"><a href="index.php" >首頁</a></li>
                <li><a href="resume.php" >簡歷</a></li>
                <li><a href="Academic.php" >學術</a></li>
                <li><a href="about.php">著作</a></li>
                <li><a href="student.php">學生</a></li>
                <li><a href="link.php" >常用連結</a></li>
            </ul>
        </div>
        <div id="intro">
            <div class="row">
                <div class="col-sm-8">';
if (isset($_SESSION['username'])) {
    echo '<form name="form" method="post" action="modify.php">
    名字:<input type="text" name="name" value="楊振華"><br>
    電話:<input type="text" name="phone" value="
0423316699"><br>
    email:<input type="text" name="email" value="
jhyang@asia.edu.tw"><br>
    <input type="submit" name="button" value="修改"/>
</form>';
}
echo '<h2 align="center"><span style="font-size:1.5em"><strong>' . $row1[1] . '</strong></span><span style="font-size:1em;">教授</span></h2>
                    <p style="font-size:2em" align="center">亞洲大學講座教授兼副校長</p>
                    <p style="font-size:2em" align="center">國立中央大學資訊工程系特聘教授</p>
                    <p style="font-size:2em" align="center">研究專長</p>
                    <p style="font-size:2em" align="center">人工智慧、大數據、學習分析、教育雲、磨課師</p>
                </div>
                <div class="col-sm-4">
                    <img src="img/photo.jpg"
                         style="border:3px rgb(32,112,101) dotted; float:right;margin:30px 30px 0 0">
                </div>
            </div>
            <div class="headingbg">
                <p class="heading" style="color: rgba(0, 110, 0, 0.9);">聯絡方式</p>
                <dl id="contact">
                    <dt>電話:</dt>
                    <dd>(04) 23323456 ext.1075 (高婉育助理)</dd>
                    <dt>傳真:</dt>
                    <dd>' . $row1[2] . '</dd>
                    <dt>電子郵件:</dt>
                    <dd>' . $row1[3] . '</dd>
                </dl>
            </div>
        </div>
    </div>
    <div id="side">
        <div id="date">
            <p>行事曆</p>
            <div id="calendar" class="calendar"></div>
        </div>
        <div id="time">
            <p>現在時間</p>
            <div class="flipTimer"align="center">
                <div class="hours"></div>
                <div class="minutes"></div>
                <div class="seconds"></div>
            </div>
        </div>
    </div>
</div>
<footer id="footer" class="inner">
    <p>123</p>
    <p id="copyright">
        <small>Copyright © 亞洲大學 Asia University, Taiwan.　本網站所有內容未經許可授權，禁止以任何方式發表使用</small>
    </p>
</footer>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="js/jquery.flipTimer.js"></script>
<!--<script src="js/jquery.min.js"></script>-->
<script src="js/calendar.js"></script>

<script>
    $(document).ready(function () {
        //Callback works only with direction = "down"
        $(\'.flipTimer\').flipTimer({direction: \'up\'});
    });
</script>


</body>
</html>
';
?>


<?php
//            if ($_SESSION[\'username\'] != null) {
//                echo \'<li ><a href=""class="enter">你好!  " . $id. "</a></li>\';
//            } else {
//                echo '<li ><a href = "login.php"> login</a ></li >';
//            }
//
?>
<!--<li><a href="" class="enter">你好!'.$_SESSION[username].'</a ></li >-->


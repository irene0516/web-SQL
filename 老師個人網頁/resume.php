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
                 document.getElementById("logoutbtn").style.right=a+10+"px";
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
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                <a href="#" class="login" id="hi"onclick="add();">Hi !   ' . $row[0] . '</a >
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
         <div class="headingbg" style="margin:10px -5px;">
         <div id="resumep">
                <p  style="color:rgba(0, 110, 0, 0.9);font-size:2em;font-weight:bold" >楊鎮華教授</p>
                <p  style="color: #377759;font-size:1.5em">楊鎮華教授目前借調至亞洲大學擔任副校長。楊教授為教育部資訊及科技教育司首任司長(2013~2014)，歷任國科會(現科技部)資訊教育學門召集人、國立中央大學資訊工程學系特聘教授、校務研究中心主任、電子計算機中心主任、總教學中心主任、副教務長，並於2010年榮獲國科會(現科技部)傑出研究獎、以及於2015年榮獲教育部教育專業獎章。</p>
                <p  style="color: #377759;font-size:1.5em">楊教授1995年畢業於美國伊利諾大學芝加哥校區資訊工程博士，研究專長包括人工智慧、大數據、學習分析、教育雲、磨課師。至今已發表超過60篇SSCI、SCI學術期刊論文。楊教授在Google Scholar的Citation indices超過9,100次，特別是在主要研究領域Artificial Intelligence in education 的citation居世界排名第七，Learning analytics的citation居世界排名第八，Education data mining的citation居世界排名第三，MOOCs的citation居世界排名第四，Mobile learning的citation次數居世界排名第四。</p>
                <p  style="color: #377759;font-size:1.5em">楊教授致力於引導新的大數據研究領域，特別是教育領域下的大數據研究。在2016年於科技部資訊教育學門下成立了「教育大數據」特別興趣小組(SIG)。楊教授透過實體研究社群與虛擬網路社群，搭配專題演講，持續發揮「教育大數據」之教育與社會影響力。楊教授的臉書社群參與人數已經超過一萬人，2015年的專題演講場次達到39場，最遠曾造訪金門、馬祖，2016年的演講場次也達到36場，2017年也已超過30場的演講。</p>
                <p  style="color: #377759;font-size:1.5em">楊教授在教育部司長任內(2013~2014)，致力推動國家資訊教育及科技教育，規劃並啟動全國性的數位學習計畫，包括「數位基礎建設」、「教育雲端資源」及「創新學習模式」，提供全國450萬師生100G寬頻網路，隨時透過教育雲行動上網學習，鼓勵教師掌握數位創新教學，透過磨課師(MOOCs)及翻轉教育，落實以學習者為中心，促進公平、開放、自主及適性的學習機會，並落實城鄉數位學習機會均等，對於國內目前的數位教育體制具有深遠的影響。</p>
                <p  style="color: #377759;font-size:1.5em">楊教授於2014年歸建中央大學，並擔任行政院科技會報兼任研究員，於2016年起擔任科技部科技政策群組委員，協助審查行政院科技預算以及中央政府科技發展計畫。近五年曾多次擔任中央政府與地方政府以及民間機關之諮詢委員，對於科技政策及政策建議書等具有關鍵影響力。</p>
</div></div>

                   <h2>學歷</h2>
                    <p style="font-size:1.7em" >美國伊利諾大學, 芝加哥校區, 電機電腦碩士 (1993) </p>
                    <p style="font-size:1.7em">美國伊利諾大學, 芝加哥校區, 電機電腦博士 (1995)</p>
                    <h2>經歷</h2>
                      <p style="font-size:1.7em" >教育部資訊及科技教育司司長</p>
                      <p style="font-size:1.7em" >國科會(科技部)資訊教育學門召集人</p>
                      <p style="font-size:1.7em" >國立中央大學資訊工程學系特聘教授、教授、副教授</p>
                      <p style="font-size:1.7em" >國立中央大學校務研究辦公室主任</p>
                      <p style="font-size:1.7em" >國立中央大學電子計算機中心主任</p>
                      <p style="font-size:1.7em" >國立中央大學總教學中心主任</p>
                      <p style="font-size:1.7em" >國立中央大學副教務長</p>
                      <p style="font-size:1.7em" >行政院科技會報兼任研究員</p>
                      <p style="font-size:1.7em" >科技部中央政府科技發展計畫審議－科技政策群組、部會署審查委員</p>
                      <p style="font-size:1.7em" >科技部科國司「吳大猷紀念獎」審查委員</p>
                      <p style="font-size:1.7em" >科技部政府資料開放諮詢委員</p>
                      <p style="font-size:1.7em" >科技部工程司智慧計算學門複審委員</p>
                      <p style="font-size:1.7em" >教育部高教司「教學創新試辦計畫」審查委員</p>
                      <p style="font-size:1.7em" >教育部技職司「大專院校轉型輔導計畫」諮詢委員</p>
                      <p style="font-size:1.7em" >教育部資科司「智慧生活整合性人才培育計畫」審查委員</p>
                      <p style="font-size:1.7em" >教育部資科司「大學學習生態系統創新計畫」審查委員</p>
                      <p style="font-size:1.7em" >教育部全國傑出通識教育教師獎審查委員 </p>
                      <p style="font-size:1.7em" >教育部數位學習認證會審查委員</p>
                      <p style="font-size:1.7em" >國立故宮博物院資料開放諮詢委員</p>
        </div>
    </div>
    <div id="side">
        <div id="date">
            <p>行事曆</p>
            <div id="calendar" class="calendar"></div>
        </div>
        <div id="time">
            <p>現在時間</p>
            <div class="flipTimer">
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


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
                   <h2 align="center">期刊論文 (SCI/SSCI)</h2>
                   <div id="about">
                    <table>
                    <thead><tr><th><span style="font-size:1.7em;">2017</span></th></tr></thead>
                    <tbody>
                    <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Huang, C.S.J., Su, A.Y.S., Yang, S.J.H.*, Liou, H.H. (2017). A collaborative digital pen learning approach to improving students\''.'learning achievement and motivation in Mathematics courses.Computers & Education, 107(2017), 31-44. (SSCI, IF: 2.881)</div></div></td></tr>
                     <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Lu, O.H.T, Huang, A.Y.Q, Huang, J.C.H., Yang, S.J.H.* (2017). Applying learning analytics for improving students engagement and learning outcomes in a MOOCs enabled collaborative programming course, Interactive Learning Environment, 25(2), 220-234, (SSCI).</div></div></td></tr>
                     <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Liu, H.H., Yang, S.J.H.*, Chen, S.Y., Tarng, W. (2017). The influences of the 2nd image-based augmented reality and virtual reality on student learning, Educational Technology & Society, 20(3), 110-121, (SSCI).</div></div></td></tr>
                     </tbody>
                     </table>
                     <table>
                     <thead><tr><th><span style="font-size:1.7em;">2016</span></th></tr></thead>
                     <tbody>
                     <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Chen, Z.S.C., Yang, S.J.H.*, Hsiao, C.C. (2016). Exploring student perceptions, learning outcome and gender differences in a flipped mathematics course. British Journal of Educational Technology, 47(6), 1096-1112, (SSCI, IF: 1.318). </div></div></td></tr>
                     <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Huang, C.S.J., Yang, S.J.H.*, Chiang, T.H.C., Su, A.Y.S. (2016). Effects of situated mobile learning approach on learning motivation and performance of EFL students. Educational Technology & Society, 19(1), 263-276. (SSCI, IF: 1.584). (Citation#: 6)</div></div></td></tr>
                     <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, T.C., Hwang, G.J., Yang, S.J.H. (2016). Development of an interactive mathematics learning system based on a two-tier test diagnostic and guiding strategy. Australasian Journal of Educational Technology, 33(1), 62-80. (SSCI, IF: 1.43).</div></div></td></tr>
                     </tbody>
                     </table>
                     <table>
                     <thead><tr><th><span style="font-size:1.7em;">2015</span></th></tr></thead>
                     <tbody>
                     <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Hsiao, I.Y.T., Yang, S.J.H.*, Chu, C.J. (2015). The effects of collaborative models in Second Life on French learning. Educational Technology Research and Development. (63), 645-673. (SSCI, IF: 1.171) </tr>
                     <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Su, A.Y.S.*, Huang, C.S.J.,Yang, S.J.H., Ding, T.J., Huang, A.F.M., Hsieh, Y.Z. (2015). Effects of annotations and homework on learning achievement: an empirical study of Scratch programming pedagogy. Educational Technology & Society, 18(4), 331-343. (SSCI, IF: 0.824)</div></div></td></tr>
                     <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Chen, Z.S.C., Yang, S.J.H.*, Huang, J.J.S. (2015). Constructing an e-portfolio-based integrated learning environment supported by library resource. Electronic Library, 33(2), 273-291. (SSCI, IF:0.535) </div></div></td></tr>
                     <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, T.C., Hwang, G.J., & Yang, S.J.H.*, Hwang, G.H. (2015). A Two-tier test-based approach to improving students’ computer programming skills in a Web-based learning environment, Educational Technology & Society, 18(1), 198-210. (SSCI, IF: 1.104) </div></div></td></tr>
                      </tbody>
                      </table>
                      <table>
                      <thead><tr><th><span style="font-size:1.7em;">2014</span></th></tr></thead>
                      <tbody>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Chiang, T.H.C., Yang, S.J.H.*, Hwang, G.J. (2014). Students\' online interactive patterns in augmented reality-based inquiry activities, Computers & Education, 78(9), 97-108. (SSCI, IF: 2.556) (Citation#: 27)</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Su, A.Y.S., Yang, S.J.H.*, Hwang, W.Y., Huang, C.S.J., (2014). Investigating the role of computer-supported annotation in problem-solving-based teaching: An empirical study of a Scratch programming pedagogy. British Journal of Educational Technology, 45(4), 647-665. (SSCI, IF: 1.349)</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Chiang, T.H.C., Yang, S.J.H*, Hwang, G.J. (2014). An augmented reality-based mobile learning system to improve students’ learning achievements and motivations in natural science inquiry activities, Educational Technology & Society, 17(4), 352-365, (SSCI, IF: 1.018). (Citation#: 23)</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Liao, J., Wang, M., Ran, W., Yang, S.J.H. (2014). Collaborative Cloud - A New Model for E-Learning. Innovations in Education & Teaching International, 51(3), 338-351. (SSCI, IF: 0.301). </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Shadiev, R., Hwang, W.Y., Yeh, S.C., Yang, S.J.H., Wang, J.L. Han, L. (2014). Effects of Unidirectional vs. Reciprocal Teaching Strategies on Web-based Computer Programming Learning, Journal of Educational Computing Research, 50(1), 67-95. (SSCI, IF: 0.659).</div></div></td></tr>
                      </tbody>
                      </table>
                      <table>
                      <thead><tr><th><span style="font-size:1.7em;">2013</span></th></tr></thead>
                      <tbody>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, T.C., Hwang, G.J., Yang, S.J.H*. (2013). Development of an adaptive learning system with multiple perceptive based on students\' learning styles and cognitive styles. Educational Technology & Society, 16(4), 185-200. (SSCI, IF: 0.824). (Citation#: 28)</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Lan, Y.J., Kan, Y.H., Hsiao, I.Y.T, Yang, S.J.H., Chang, K.E. (2013). Designing interaction tasks in Second Life for Chinese as a foreign language learners: A preliminary exploration. Australasian Journal of Educational Technology, 29(2), 184-202, (SSCI, IF: 0.879).</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Wu. B., Wang, M., Spector, M., Yang, S.J.H. (2013). Design of a dual-mapping learning approach for problem solving and knowledge construction in Ill-structured domains. Educational Technology & Society, 16(4), 71-84. (SSCI, IF: 0.824).</div></div></td></tr>
                      </tbody>
                      </table>
                      <table>
                      <thead><tr><th><span style="font-size:1.7em;">2012</span></th></tr></thead>
                      <tbody>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Huang, A., Yang, S.J.H.*, Liao, S.S. (2012). A study of user’s acceptance on situational mashups in situational language teaching. British Journal of Educational Technology, 43(1), 52-61, (SSCI, IF: 1.313, ISI引用: 2) </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Huang, A., Wu, J.T.H., Yang, S.J.H.*, Hwang, W.Y. (2012). The success of eportfolio-based programming learning style diagnosis: exploring the role of a novel heuristic fuzzy knowledge fusion. Expert Systems with Applications, 39(2012) 8698–8706. (SCI, IF: 1.854).</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Huang, C.S.J., Yang, S.J.H.*, Su, A.Y.S., (2012). Applying Hebbian theory to enhance search performance in unstructured social-like peer-to-peer networks. ETRI, 34(4), 591-601, (SCI, IF: 0.742).</div></div></td></tr>
                      </tbody>
                      </table>
                      <table>
                      <thead><tr><th><span style="font-size:1.7em;">2011</span></th></tr></thead>
                      <tbody>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, Zhang, J., Su, A., Tsai, J.J.P., (2011). A collaborative multimedia annotation tool for enhancing knowledge sharing in CSCL. Interactive Learning Environments, 19(1), 45-62, (SSCI, IF: 0.973, ISI引用: 7)</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Cheng, B., Wang. M., Yang, S.J.H., Kinshuk, Peng, J. (2011). Acceptance of competency-based workplace e-Learning systems: effects of individual and peer learning support. Computers & Education, 57(1), 1317-1333. (SSCI, IF: 2.617, ISI引用: 10)</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Jia, H., Wang, M., Ran, W., Yang, S.J.H., Jian, L., Chui, D.K.W. (2011). Design of a performance oriented workplace e-learning system using ontology. Expert Systems with Applications, 38(4), 3372-3382, (SCI, IF: 2.908, ISI引用: 7).</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, Zhang, J., Tsai, S.T.C., Huang, J.J.S. (2011). Applying semantic segment detection to Web page presentation on the mobile Internet. Journal of Information Science and Engineering, 27(2), 697-713. (SCI, IF: 0.242, ISI引用: 1). </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Chao, C.S., Yang, S.J.H. (2011). A novel three-tiered visualization approach to firewall rule validation. Journal of Visual Languages and Computing, 22(6), 401-414, (SCI, IF: 0.863).</div></div></td></tr>
                      </tbody>
                      </table>
                      <table>
                      <thead><tr><th><span style="font-size:1.7em;">2010</span></th></tr></thead>
                      <tbody>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Su, A.Y.S., Yang, S.J.H.*, Hwang, W.Y., Zhang, J. (2010). A Web 2.0-based collaborative annotation system for enhancing knowledge sharing in collaborative learning environments. Computers & Education, 55(2), 752-766, (SSCI, IF: 2.617, ISI引用: 24) </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Huang, J.J.S., Yang, S.J.H.*, Huang, Y.M. & Hsiao, I.Y.T. (2010). Social learning networks: build mobile learning networks based on collaborative services. Educational Technology & Society, 13(3), 78-92, (SSCI, IF: 1.067, ISI引用: 15)  </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Jeng, Y.L., Wu, T.T., Huang, Y.M., Tan, Q., Yang, S.J.H. (2010). The add-on impact of mobile applications in learning strategies: A review study. Educational Technology & Society, 13(3), 3-11, (SSCI, IF: 1.067, ISI引用: 22)  </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Wang, M., Ran, W., Liao, J., Yang, S.J.H., (2010). A Performance-oriented approach to workplace e-learning systems development. Educational Technology & Society, 13 (4), 167–179, (SSCI, IF: 1.067, ISI引用: 9) </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Chen, R.C.S., Yang, S.J.H.*. (2010). Applying DNA computation to intractable problems in social network analysis. BioSystems, 101(3), 222-232, (SCI, IF: 1.477, ISI引用: 5). </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Chen, R.C.S., Yang, S.J.H.*, Zhang, J. (2010). Enhancing the precision of content analysis in content adaptation using entropy-based fuzzy reasoning. Expert Systems with Applications, 37(8), 5706-5719. (SCI, IF: 2.908, ISI引用: 1).</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Su, A.Y.S., Yang, S.J.H.* (2010). Improving annotation categorization performance through integrated social annotation computation. Expert Systems with Applications, 37(12), 8736-8744, (SCI, IF: 2.908).</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Huang, A., Yang, S.J.H.*, Wang, M., Tsai, J.J.P. (2010). Improving fuzzy knowledge integration with particle swarm optimization. Expert Systems with Applications, 37(12), 8770-8783, (SCI, IF: 2.908, ISI引用: 5). </div></div></td></tr>
                      </tbody>
                      </table>
                      <table>
                      <thead><tr><th><span style="font-size:1.7em;">2009</span></th></tr></thead>
                      <tbody>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Graf, G., Liu, T.C., Kinshuk, Chen, N.S., Yang, S.J.H., (2009). Learning styles and cognitive traits-their relationship and its benefits in web-based educational systems. Computers in Human Behavior, 25(6), 1280-1289, (SSCI, IF: 1.677, ISI引用: 15) </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Hwang, G.J., Yang T.C., Tsai, C.C., Yang, S.J.H. (2009). A context-aware ubiquitous learning environment for conducting complex science experiments. Computers & Education, 53(2), 402-413, (SSCI, IF: 2.059, ISI引用: 56) </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Huang, R.H.Y., Yang, S.J.H. Tsai, C.C. (2009). Guest Editorial: Web 2.0 for interactive e-learning. Interactive Learning Environments, 17(4), 257-259. (SSCI, IF: 0.973, ISI引用: 7) </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, Zhang, J., Lin, L., Tsai, J.J.P. (2009). Improving peer-to-peer search performance through intelligent social search. Expert Systems with Application, 36(7), 10312-10324, (SCI, IF: 2.908, ISI引用: 2) </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Huang, A., Lan, C.W, Yang, S.J.H.* (2009). An optimal QoS-based Web services selection scheme. Information Sciences, 179(19), 3309-3322. (SCI, IF: 3.291, ISI引用: 48) </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, Zhang, J., Tsai, J.J.P., Huang, A.F.M., (2009). SOA-based content delivery model for mobile internet navigation. International Journal of Artificial Intelligence Tools, 18(1), 141-161. (SCI)</div></div></td></tr>
                      </tbody>
                      </table>
                      <table>
                      <thead><tr><th><span style="font-size:1.7em;">2008</span></th></tr></thead>
                      <tbody>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, Chen, I.Y.L. (2008). A social network-based system for supporting interactive collaboration in knowledge sharing over peer-to-peer network. International Journal of Human-Computer Studies, 66(1). 36-50, (SSCI, IF: 1.769, ISI引用: 42) </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, T. Okamoto, S.S. Tseng, (2008). Guest Editorial: Context-aware ubiquitous learning. Educational Technology and Society, 11(2). 1-2. (SSCI, IF: 0.904, ISI引用: 18)</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Hwang, G.J., Tsai, C.C., Yang, S.J.H. (2008). Criteria, strategies and research issues of context-aware ubiquitous learning. Educational Technology and Society, 11(2). 16-26. (SSCI, IF: 0.904, ISI引用: 78) </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Chen, N.S., Kinshuk, Wei, C.W., Yang, S.J.H. (2008). Designing a self-contained group area network for ubiquitous learning. Educational Technology and Society, 11(2). 81-91. (SSCI, IF: 0.904, ISI引用: 20)</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, Zhang, J., Chen, I.Y.L. (2008). A JESS enabled context elicitation system for providing context-aware Web services. Expert Systems with Applications, 34(4). 2254-2266. (SCI, IF: 2.596, ISI引用: 33)  </div></div></td></tr>
                      </tbody>
                      </table>
                      <table>
                      <thead><tr><th><span style="font-size:1.7em;">2007</span></th></tr></thead>
                      <tbody>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, Chen, I.Y.L., Kinshuk, Chen, N.S., (2007). Enhancing the quality of e-learning in virtual learning communities by finding quality learning content and trustworthy collaborators. Educational Technology and Society, 10(2). 84-95, (SSCI, IF: 0.475, ISI引用: 11)  </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, N.W.Y. Shao. (2007). Enhancing pervasive web accessibility with rule-based adaptation strategy. Expert Systems with Applications, 32(4). 1154-1167, May, 2007, (SCI, ISI引用: 9)</div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, J. Zhang, R. Chen, and N. Shao. (2007). A unit of information-based content adaptation method for improving web content accessibility in the mobile Internet. 794-807, ETRI Journal (Electronics and Telecommunications Research Institute), 29(6). (SCI, IF: 0.936, ISI引用: 10) </div></div></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, J. Zhang, I.Y.L. Chen. (2007). Ubiquitous provision of context-aware web services. International Journal of Web Service Research, 4(4). 83-103, (SCIE, EI, ISI引用: 10) </div></div></td></tr>
                     </tbody>
                     </table>
                      <table>
                      <thead><tr><th><span style="font-size:1.7em;">1995~2006</span></th></tr></thead>
                      <tbody>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, (2006). Context aware ubiquitous learning environments for peer-to-peer collaborative learning. Educational Technology and Society, 9(1), 188-201, (SSCI, IF: 0.469, ISI引用: 87). </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Hsiao, C.H., T.C. Hsu, J.N. Chang, Yang, S.J.H., S.T. Young, and W. Chu, (2006). Developing a medical image content repository for e-learning. Journal of Digital Imaging, 19(3), 207-215. (SCI, IF: 1.107, ISI引用: 6) </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.* and Shao, N.W.Y. (2006). An ontology based content model for intelligent Web content access services. International Journal of Web Service Research, 3(2), 59-78, (SCIE, EI) </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Liang, J.K., T. Liu, H. Wang, B. Chang, Y. Deng, Yang, S.J.H., C. Chou, H. Ko, Yang, S.J.H., T. Chan. (2005). A few design perspectives on one-on-one digital classroom environment. Journal of Computer Assisted Learning, 21(3), 181-189, (SSCI, IF: 0.556, ISI引用: 20) </span></p> </td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H.*, Chen, I., Shao, N. (2004). Ontological enabled annotations and knowledge management for collaborative learning in virtual learning community. Educational Technology and Society, 7(4), 70-81, (SSCI, IF: 0.267, ISI引用: 31)  </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H., J.J.P. Tsai, and C.C. Chen. Fuzzy Rule Base Systems Verification Using High Level Petri Nets. IEEE Trans. on Knowledge and Data Engineering, vol. 15, no. 2, pp. 457-473, March-April 2003. (SCI, , ISI引用: 20) </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H., J.J.P. Tsai, I.Chen, “Development of Wireless Embedded Systems Using Component Based Software,” International Journal on Software Engineering and Knowledge Engineering, vol. 12, no. 2, pp. 135-153, April, 2002 (SCI). </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H., I. Chen, C.C. Chen, C.H. Chu, H.W. Shen, C.W. Lan, “Building XML-Based Unified User Interface System under J2EE Architecture,” in Annals of Software Engineering Journal, Vol. 12, pp. 241-256, 2001. (SCI) </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H., W. Chu, and J. Lee, April 1999, “Specifying and Verifying Temporal Behavior of High Assurance Systems Using Reachability Tree Logic,” in International Journal of Software Engineering and Knowledge Engineering, vol. 9, no. 2, April 1999, pp. 233-249. (SCI) </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">Yang, S.J.H., C.C. Chen, April 1999, “A Petri-nets-based Approach for Workflow and Process Automation,” in the International Journal of Artificial Intelligence Tools, vol. 8, no. 2, April 1999, pp. 193-205, (SCIE, EI). </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">W. Chu, C.H. Chang, and Yang, S.J.H., 2000, “Application of the Software Maintenance Predicaate/Transition Net (SMPrT-Net) to the Change Control Process of Maintenance,” Journal of Chinese Institute of Engineering. Vol. 23, No. 5, pp. 591-606. (SCI)</span> </p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">L.F. Lai, J. Lee, and Yang, S.J.H., 1999, “Fuzzy Logic as a Basis for Reusing Task-based Specifications,” International Journal of Intelligent Systems, vol. 14, pp. 331-357, (SCI) </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">J. Lee, N.L. Xue, K.H. Hsu, and Yang, S.J.H., 1999, “Modeling Imprecise Requirements with Fuzzy Objects,” International Journal of Information Sciences, vol. 118, no. 1-4, pp. 101-119, (SCI) </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">J.J.P. Tsai, Y. Bi, and Yang, S.J.H., Sept. 1996, “A System for Visualizing and Debugging Distributed Real-Time Systems with Monitoring Support,” International Journal of Software Engineering and Knowledge Engineering, vol. 6, no. 3, Sept. 1996, pp. 355-400. (SCI) </span> </p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">J.J.P. Tsai, Y. Bi, and Yang, S.J.H., Mar. 1996, “Debugging for Timing Constraint Violations,” IEEE Software, vol. 13, no. 2, pp. 89-99. (SCI)  </span></p></td></tr>
                      <tr><td><div class="aboutimg"><img src="img/listimg.png"><div class="aboutfont">J.J.P. Tsai, Yang, S.J.H., and Y.H. Chang, Jan. 1995, “Timing Constraint Petri Nets and Their Application to Schedulability Analysis of Real-Time Systems Specification,” IEEE Trans. on Software Engineering, vol. 21, no. 1, pp. 32-49. (SCI) </span></p></td></tr>
                      </tbody>
                      </table>
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



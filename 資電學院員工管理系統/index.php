<?php
session_start();
header('Content-Type:text/html; charset=UTF-8');
include("mysql_connect.inc.php");
if (isset($_SESSION['id'])) {
    $sql = "SELECT * FROM user where id = '$id'";
    $result = $link->query($sql);
    $row = $result->fetch_row();
}

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>亞洲大學資訊電機學院員工管理系統</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Victoria
    Template URL: https://templatemag.com/victoria-bootstrap-vcard-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
  <script type="text/javascript">
$(document).ready(function(){ 
$('#myCarousel').carousel({interval:5000});//每隔5秒自動輪播 
}); 
</script>
</head>
<body style="font-weight: bold;">

  <div class="container">
    <div class="col-lg-10 col-lg-offset-1">

      <!-- ===== vCard Navigation ===== -->
      <div class="row w">
        <div class="col-md-4">
 
          <div id="myCarousel" style="width:300px;height:300px"class="carousel slide" data-ride="carousel">
  <!-- 轮播（Carousel）指标 -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>   
  <!-- 轮播（Carousel）项目 -->
  <div class="carousel-inner">
    <div class="item active" >
      <img src="img/avatar.jpg" alt="First slide">
    </div>
    <div class="item" >
      <img src="img/art.jpg" width="300px" alt="Second slide">
    </div>
    <div class="item" >
      <img src="img/gym.jpg" alt="Third slide">
    </div>
  </div>
  <!-- 轮播（Carousel）导航 -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 

          <ul class="nav nav-tabs nav-stacked" id="myTab">
            <li class="active"><a href="#about">About</a></li>
            <li><a href="#CSIE">資訊工程學系 CSIE</a></li>
            <li><a href="#PCE">光電與通訊學系 PCE</a></li>
            <li><a href="#BIME">生物資訊與醫學工程 BIME</a></li>
            <li><a href="#AUIC">資訊傳播學系 AUIC</a></li>
            <li><a href="#MCMA">行動商務與多媒體應用學系 MCMA</a></li>
          </ul>
          <?php 
              if (isset($_SESSION['id'])) {
                echo ("<a href='loginafter.php' class='btn btn-4'>控制台</a>");
          }else{
            echo("<a class='btn btn-2' href='login.php'>Login</a>");
          }
          ?>
          

        </div>

        <!-- col-md-4 -->

        <!-- ===== vCard Content ===== -->
        <div class="col-md-8">
          <div class="tab-content">

            <!-- ===== First Tab ===== -->
            <div class="tab-pane active" id="about">
              <h3>亞洲大學介紹</h3>
              <h5>Introduction</h5>
              <hr>
              <p>亞洲大學是一所前瞻、有遠見且快速成長的學校。德國哲學家雅斯培(Karl Jaspers) 說過：「一所真正的大學必須包含三部分，一是學術性的教學，二是科學的研究，三是創造性的文化生活。」，而亞洲大學創辦初衷便是要以此為目標，辦一所獨特並邁向國際化的綜合大學。</p>
              <p>為落實科學研究，亞洲大學設有許多特色研究中心，包含人工智慧研究中心、精準醫療研究中心、智慧輔具與復健科技研發中心、創新與循環經濟研究中心、眼視光中心、大數據研究中心、金融科技區塊鏈研究中心、食品安全檢測中心、3D列印研究中心、網路成癮防治中心、食藥用菇類研究中心等。本校雖尚年輕，學術方面已有相當成果，據URAP世界大學學術排名，本校為台灣私校第7，若不計醫學類大學，則為第3。</p>
              <p class="pull-right red"><i class="fa fa-heart"></i></p>
            </div>
            <!-- tab about -->

            <!-- ===== Second Tab ===== -->
            <div class="tab-pane" id="CSIE">
              <div class="about2">
              <?php
               $sql2 = "SELECT * FROM `teacher`";
                $result2 = $link->query($sql2);
                $num=$result2->num_rows;
                $count=array();
                $test=array();
                for($i=0;$i<$num;$i++){ 
                   $row2 = $result2->fetch_row();
                   $sql3 = "SELECT * FROM `teacher` where position='".$row2[2]."'";
                   if(count($count)!=0){
                    for($j=0;$j<count($count);$j++){
                   if($count[$j]===$row2[2]){
                    //echo "yes";
                    $boo=false;
                     }else if($row2[2]!=" "&&$row2[2]!=""){
                    //echo "no";
                    $boo=true;
                   }
                 }}else{
                  $boo=true;
                 }
              if($boo){
                 array_push($count,$row2[2]);
                $test[$i]= $link->query($sql3);
              echo '        
               <table align="center">
              <thead>
              <th ><h4><i class="fa fa-file-text-o"></i>'.$row2[2].'</h4></th>
              </thead>
              <tbody>';
              ?>
              <?php
               
              for($j=0;$j<$num;$j++){
                $row2 =$test[$i]->fetch_row();
                if($row2[1]!=""){
              echo '<tr><td>
              '.$row2[1].'
              </td></tr>';}}?>
              <?php
              echo'</tbody>
              </table>
              '; 
              $boo=false;          
            }

            }
              ?>
            </div>
              
            </div>
            <!-- PCE -->
            <div class="tab-pane" id="PCE">
                
              <div class="about2">
              <?php
               $sql2 = "SELECT * FROM `teacher2`";
                $result3 = $link->query($sql2);
                $num=$result2->num_rows;
                $count=array();
                $test2=array();
                for($i=0;$i<$num;$i++){ 
                   $row2 = $result3->fetch_row();
                   $sql3 = "SELECT * FROM `teacher2` where position='".$row2[2]."'";
                   if(count($count)!=0){
                    for($j=0;$j<count($count);$j++){
                   if($count[$j]===$row2[2]){
                    $boo=false;
                   }else if($row2[2]!=" "&&$row2[2]!=""){
                    $boo=true;
                   }
                 }}else{
                  $boo=true;
                 }
              if($boo){
                 array_push($count,$row2[2]);
                  
                $test2[$i]= $link->query($sql3);
              echo '        
               <table align="center">
              <thead>
              <th><h4><i class="fa fa-file-text-o"></i>'.$row2[2].'</h4></th>
              </thead>
              <tbody>';
              ?>
              <?php
               
              for($j=0;$j<$num;$j++){
                $row2 =$test2[$i]->fetch_row();
                if($row2[1]!=""){
              echo '<tr><td>
              '.$row2[1].'
              </td></tr>';}}?>
              <?php
              echo'</tbody>
              </table>
              '; 
              $boo=false;          
            }
            }
              ?>
            
            </div>
            </div>
            <!-- BIME -->
            <div class="tab-pane" id="BIME">
                
              <div class="about2">
              <?php
               $sql2 = "SELECT * FROM `teacher3`";
                $result2 = $link->query($sql2);
                $num=$result2->num_rows;
                $count=array();
                $test=array();
                for($i=0;$i<$num;$i++){ 
                   $row2 = $result2->fetch_row();
                   $sql3 = "SELECT * FROM `teacher3` where position='".$row2[2]."'";
                   if(count($count)!=0){
                    for($j=0;$j<count($count);$j++){
                   if($count[$j]===$row2[2]){
                    //echo "yes";
                    $boo=false;
                     }else if($row2[2]!=" "&&$row2[2]!=""){
                    //echo "no";
                    $boo=true;
                   }
                 }}else{
                  $boo=true;
                 }
              if($boo){
                 array_push($count,$row2[2]);
                $test[$i]= $link->query($sql3);
              echo '        
               <table align="center">
              <thead>
              <th><h4><i class="fa fa-file-text-o"></i>'.$row2[2].'</h4></th>
              </thead>
              <tbody>';
              ?>
              <?php
               
              for($j=0;$j<$num;$j++){
                $row2 =$test[$i]->fetch_row();
                if($row2[1]!=""){
              echo '<tr><td>
              '.$row2[1].'
              </td></tr>';}}?>
              <?php
              echo'</tbody>
              </table>
              '; 
              $boo=false;          
            }
            }
              ?>
            </div>
             
            </div>
            <!-- AUIC -->
            <div class="tab-pane" id="AUIC">
                
             <div class="about2">
              <?php
               $sql2 = "SELECT * FROM `teacher4`";
                $result2 = $link->query($sql2);
                $num=$result2->num_rows;
                $count=array();
                $test=array();
                for($i=0;$i<$num;$i++){ 
                   $row2 = $result2->fetch_row();
                   $sql3 = "SELECT * FROM `teacher4` where position='".$row2[2]."'";
                   if(count($count)!=0){
                    for($j=0;$j<count($count);$j++){
                   if($count[$j]===$row2[2]){
                    //echo "yes";
                    $boo=false;
                     }else if($row2[2]!=" "&&$row2[2]!=""){
                    //echo "no";
                    $boo=true;
                   }
                 }}else{
                  $boo=true;
                 }
              if($boo){
                 array_push($count,$row2[2]);
                $test[$i]= $link->query($sql3);
              echo '        
               <table align="center">
              <thead>
              <th><h4><i class="fa fa-file-text-o"></i>'.$row2[2].'</h4></th>
              </thead>
              <tbody>';
              ?>
              <?php
               
              for($j=0;$j<$num;$j++){
                $row2 =$test[$i]->fetch_row();
                if($row2[1]!=""){
              echo '<tr><td>
              '.$row2[1].'
              </td></tr>';}}?>
              <?php
              echo'</tbody>
              </table>
              '; 
              $boo=false;          
            }
            }
              ?>
            </div>
             </div>
              <!-- MCMA-->
            <div class="tab-pane" id="MCMA">
              <div class="about2">
              <?php
               $sql2 = "SELECT * FROM `teacher5`";
                $result2 = $link->query($sql2);
                $num=$result2->num_rows;
                $count=array();
                $test=array();
                for($i=0;$i<$num;$i++){ 
                   $row2 = $result2->fetch_row();
                   $sql3 = "SELECT * FROM `teacher5` where position='".$row2[2]."'";
                   if(count($count)!=0){
                    for($j=0;$j<count($count);$j++){
                   if($count[$j]===$row2[2]){
                    //echo "yes";
                    $boo=false;
                    }else if($row2[2]!=" "&&$row2[2]!=""){
                    //echo "no";
                    $boo=true;
                   }
                 }}else{
                  $boo=true;
                 }
              if($boo){
                 array_push($count,$row2[2]);
                $test[$i]= $link->query($sql3);
              echo '        
               <table align="center">
              <thead>
              <th><h4><i class="fa fa-file-text-o"></i>'.$row2[2].'</h4></th>
              </thead>
              <tbody>';
              ?>
              <?php
               
              for($j=0;$j<$num;$j++){
                $row2 =$test[$i]->fetch_row();
                if($row2[1]!=""){
              echo '<tr><td>
              '.$row2[1].'
              </td></tr>';}}?>
              <?php
              echo'</tbody>
              </table>
              '; 
              $boo=false;          
            }
            }
              ?>
            </div>
            </div>
            <!-- Tab Contact -->

          </div>
          <!-- Tab Content -->
        </div>
        <!-- col-md-8 -->
      </div>
      <!-- row w -->
    </div>
    <!-- col-lg-6 -->
  </div>
  <!-- /.container -->

  <div class="credits">
    <!--
      You are NOT allowed to delete the credit link to TemplateMag with free version.
      You can delete the credit link only if you bought the pro version.
      Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/victoria-bootstrap-vcard-template/
      Licensing information: https://templatemag.com/license/
    -->
    <a>This is a test web.</a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>



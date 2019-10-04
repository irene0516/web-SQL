<?php
session_start();
header('Content-Type:text/html; charset=UTF-8');
include("mysql_connect.inc.php");
if (isset($_SESSION['id'])) {
  $test=$_SESSION['id'];
    $sql = "SELECT * FROM user2 where id = '$test'";
    $result = $link->query($sql);
    $row = $result->fetch_row();
}
if (isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>亞洲大學資訊電機學院員工管理系統</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style2.css" rel="stylesheet">
  <link href="css/style3.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->

</head>

<body>

  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
       <a href="loginafter.php" class="logo"><b>Con<span>trol</span></b></a> 
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" style="font-size:18px" href="logout.php">
              <i class="fa fa-sign-out" style="margin-right:5px"></i>Logout</a>
          </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="loginafter.php"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered" style="font-size:18px"><?php echo $row[1];?></h5>
          <li class="mt">
            <a class="active" href="loginafter.php">
              <i class="fa fa-dashboard"></i>
              <span>會員資料</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="index.php">
              <i class="fa fa-home"></i>
              <span>首頁</span>
              </a>
          </li>
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>員工表單</span>
              </a>
            <ul class="sub">
              <li><a href="table\CSIE_table.php">資訊工程學系 CSIE</a></li>
              <li><a href="table\PCE_table.php">光電與通訊學系 PCE</a></li>
              <li><a href="table\BIME_table.php">生物資訊與醫學工程 BIME</a></li>
              <li><a href="table\AUIC_table.php">資訊傳播學系 AUIC</a></li>
              <li><a href="table\MCMA_table.php">行動商務與多媒體應用學系 MCMA</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <div id="user-profile-2" class="user-profile">
    <div class="tabbable">
      <ul class="nav nav-tabs padding-18">
        <li class="active">
          <a data-toggle="tab" href="#home" style="font-size:15px">
            <i class="green ace-icon fa fa-user bigger-120" style="font-size:16px"></i>
            Profile
          </a>
        </li>
      </ul>


      <div class="tab-content no-border padding-24">
        <div id="home" class="tab-pane in active">
          <div class="row">
            <div class="col-xs-12 col-sm-3 center">
               <div style="margin-bottom: 20px"></div>
              <span class="profile-picture">
                <img class="editable img-responsive" src="img/ui-sam.jpg" />
              </span>

              <div class="space space-4"></div>
              <div class="space space-4"></div>
              <div style="margin-bottom: 50px"></div>

            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-9">
              <h4 class="blue">
                <span class="middle" style="font-size:22px"><?php echo $row[1];?></span>
              </h4>

              <div class="profile-user-info">
                <div class="profile-info-row">
                  <div class="profile-info-name" style="font-size:15px"> Username </div>

                  <div class="profile-info-value">
                    <span style="font-size:15px"><?php echo $_SESSION['id'];?></span>
                  </div>
                </div>

                <div class="profile-info-row">
                  <div class="profile-info-name" style="font-size:15px">Email </div>

                  <div class="profile-info-value" style="font-size:15px">
                    <span style="font-size:15px"><?php echo $row[3];?></span>
                  </div>
                </div>

                <div class="profile-info-row">
                  <div class="profile-info-name" style="font-size:15px"> phone</div>

                  <div class="profile-info-value" style="font-size:15px">
                    <span><?php echo $row[4];?></span>
                  </div>
                </div>
              </div>

              <div class="hr hr-8 dotted"></div>

              <div class="profile-user-info">

                <div class="profile-info-row">
                  <div class="profile-info-name">
                    <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                  </div>

                  <div class="profile-info-value"  style="margin:20px">
                    <a href="https://www.facebook.com/asiacsiest/" style="font-size:15px">亞洲大學資工系學會</a>
                  </div>
                </div>

                <div class="profile-info-row">
                  <div class="profile-info-name">
                   
                  </div>

                  <div class="profile-info-value">
                   
                  </div>
                </div>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="space-20"></div>

          <div class="row">
            <div class="col-xs-12 col-sm-6" style="margin:50px">
              <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                  <h3 class="widget-title smaller" >
                    <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                    Little About Me
                  </h3>
                </div>

                <div class="widget-body">
                  <div class="widget-main" style="font-size:14px">
                    <p>
                      My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                    </p>
                    <p>
                      Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                    </p>
                    <p>
                      The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                    </p>
                    <p>
                      Thanks for visiting my profile.
                    </p>
                  </div>
<!-- 修改的model****************************************************************
      *******************************************************************************-->
    <div class="modal fade" id="updatemyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    更改資料
                </h4>
            </div>
            <form id="uploadForm" action="teacherupdate.php" method="post">
            <div class="modal-body">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> UserId</label>
              <input type="text" class="form-control" name="userid" id="userid" readonly>
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="請輸入帳戶名">
            </div>
            <div class="form-group">
              <label for="psw"><i class="fa fa-lock" style="font-size:16px"></i> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="請輸入密碼">
            </div>
            <div class="form-group">
              <label for="psw"><i class="fa fa-lock" style="font-size:16px"></i> Password</label>
            <input type="password" class="form-control" name="password2" id="password2" placeholder="請輸入第二次密碼">
          </div>
          <div class="form-group">
              <label for="psw"><i class="fa fa-envelope" style="font-size:16px"></i> Email</label>
              <input type="text" class="form-control" name="email" id="password" placeholder="請輸入Email">
            </div>
            <div class="form-group">
              <label for="psw"><i class="fa fa-phone" style="font-size:16px"></i> Phone</label>
              <input type="text" class="form-control" name="phone" id="password" placeholder="請輸入電話">
            </div>
            </div>

 
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">close
                </button>
                <button class="btn btn-info">Change <i class="fa fa-check-square-o"></i></button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!-- 修改的model****************************************************************
      ***************************************************************************end-->
 <!-- 刪除的model****************************************************************
      *******************************************************************************-->
    <div class="modal fade" id="deletemyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    刪除帳號
                </h4>
            </div>
            <form id="uploadForm" action="delete.php" method="post">
            <div class="modal-body">
              <div style="font-size:16px">確認刪除本帳號嗎?</div>
            <div class="form-group">
              <input type="text" class="form-control" name="userid" id="deluserid" readonly>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> no
                </button>
                <button class="btn btn-info"><i class="fa fa-trash-o"></i> yes</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!-- 刪除的model****************************************************************
      ***************************************************************************end-->
                  <div>
                     <button style="font-size:16px ;margin-right: 20px" class="btn btn-primary btn-xs open-AddBookDialog" data-toggle="modal" data-target="#updatemyModal" <?php echo'data-id="'.$row[0].'" data-name="'.$row[1].'"';?> ><i class="fa fa-pencil"></i> 修改資料</button>
                      <button style="font-size:16px" class="btn btn-danger btn-xs isdelte "
data-toggle="modal" data-target="#deletemyModal" <?php echo'data-id="'.$row[0].'"';?>
                      ><i class="fa fa-trash-o " ></i> 刪除本帳號</button>
                      <button style="font-size:16px ;margin-left: 20px" class="btn btn-success btn-xs" onclick="location.href='register.php'"><i class="fa fa-plus"></i>增加使用者</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /#home -->
      </div>
    </div>
  </div>
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">

            <!--COMPLETED ACTIONS DONUTS CHART-->
           
            <!--NEW EARNING STATS -->
        
            <!--new earning end-->
            <!-- RECENT ACTIVITIES SECTION -->
        
            <!-- Second Activity -->
           
            <!-- Third Activity -->
     
            <!-- Fourth Activity -->
   
            <!-- USERS ONLINE SECTION -->
 
            <!-- First Member -->


            <!-- Third Member -->

            <!-- Fourth Member -->

            <!-- CALENDAR-->
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>

        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
           <p>This is a test web</p>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome!',
        // (string | mandatory) the text inside the notification
        text: 'This is a test web:)))',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }

      $(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     var myBookname = $(this).data('name');
     $(".modal-body .form-group #username").val( myBookname );
     $(".modal-body .form-group #userid").val( myBookId );
     
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
            $(document).on("click", ".isdelte", function () {
     var myBookId = $(this).data('id');
     $(".modal-body .form-group #deluserid").val( myBookId );
         $(".modal-body .form-group #deluserid").hide();  
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
  </script>
</body>

</html>
<?php
}else{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
}
?>
<?php
session_start();
header('Content-Type:text/html; charset=UTF-8');
include("../mysql_connect.inc.php");
if (isset($_SESSION['id'])) {
    $sql = "SELECT * FROM `teacher3`";
    $test=$_SESSION['id'];
    $usersql = "SELECT * FROM user2 where id = '$test'";
    $userresult = $link->query($usersql);
    $userrow = $userresult->fetch_row();
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
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style2.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">
  
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
       <a href="../loginafter.php" class="logo"><b>Con<span>trol</span></b></a> 
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" style="font-size:18px" href="../logout.php"> <i class="fa fa-sign-out" style="margin-right:5px"></i>Logout</a>
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
          <p class="centered"><a href="../loginafter.php"><img src="../img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered" style="font-size:18px"><?php echo $userrow[1];?></h5>
          <li class="mt">
            <a  href="../loginafter.php">
              <i class="fa fa-dashboard"></i>
              <span>會員資料</span>
              </a>
          </li>
         <li class="sub-menu">
            <a href="../index.php">
              <i class="fa fa-home"></i>
              <span>首頁</span>
              </a>
          </li>
          <li class="sub-menu ">
            <a href="javascript:;" class="active">
              <i class="fa fa-th"></i>
              <span>員工表單</span>
              </a>
            <ul class="sub">
              <li><a href="CSIE_table.php">資訊工程學系 CSIE</a></li>
              <li><a href="PCE_table.php">光電與通訊學系 PCE</a></li>
              <li><a href="BIME_table.php">生物資訊與醫學工程 BIME</a></li>
              <li><a href="AUIC_table.php">資訊傳播學系 AUIC</a></li>
              <li><a href="MCMA_table.php">行動商務與多媒體應用學系 MCMA</a></li>
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


        <h2><i class="fa fa-angle-right"></i> 員工管理</h2>

        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">

 <!-- 註冊的model****************************************************************
      *******************************************************************************-->
    <div class="modal fade" id="myAddModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    增加資料
                </h4>
            </div>
            <form id="uploadForm" action="../teacherinsert.php" method="post">
            <div class="modal-body">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user" ></span> Username</label>
              <input type="text" class="form-control" name="whereteacher" id="whereteacher2" value="teacher3" readonly>
              <input type="text" class="form-control" name="teachername" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="psw"><i class="fa fa-book" style="font-size:16px"></i> Position</label>
              <input type="text" class="form-control" name="position" placeholder="Enter Position">
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">close
                </button>
                <button class="btn btn-info"><i class="fa fa-plus-square-o"></i> add</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!-- 註冊的model****************************************************************
      ***************************************************************************end-->


    <!-- 修改的model****************************************************************
      *******************************************************************************-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
            <form id="uploadForm" action="../teacherupdate.php" method="post">
            <div class="modal-body">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="whereteacher" id="whereteacher" value="teacher3" readonly>
              <input type="text" class="form-control" name="teacherid" id="teacherid" readonly>
              <input type="text" class="form-control" name="teachername" id="teachername" readonly>
            </div>
            <div class="form-group">
              <label for="psw"><i class="fa fa-book" style="font-size:16px"></i> Position</label>
              <input type="text" class="form-control" name="position" id="position" placeholder="Enter Position">
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">close
                </button>
                <button class="btn btn-info">Sign up<i class="fa fa-check-square-o"></i></button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!-- 修改的model****************************************************************
      ***************************************************************************end-->


              <table class="table table-striped table-advance table-hover"  >
                <h3><i class="fa fa-angle-right"></i>生物資訊與醫學工程</h3>
                <hr>
                <thead>
                  <tr>
                    <th style="font-size:22px; text-align:center"><i class="fa fa-check-square"></i>  id</th>
                    <th style="font-size:22px; text-align:center" class="hidden-phone"><i class="fa fa-user"></i>  姓名</th>
                    <th style="font-size:22px; text-align:center"><i class="fa fa-book"></i>  職位名稱</th>
                    <th style="text-align:center"> <button type="button" class="btn btn-theme02 isAdd" data-toggle="modal" data-target="#myAddModel" style="font-size:18px;"><i class="fa fa-plus"></i> add
              </button></th>
                  </tr>
                </thead>
                <tbody id="tb">

                  
                    <?php 
                $result = $link->query($sql);
                $num=$result->num_rows;
                for($i=0;$i<$num;$i++){ 
                    $row = $result->fetch_row();
                       
                echo  ('
                  <tr id="'.$row[0].'" style="font-size:20px; text-align:center">
                  <td>
                      <a>'.$row[0].'</a>
                    </td>
                    <td class="hidden-phone">'.$row[1].'</td>
                    <td><span class="label label-info label-mini">'.$row[2].'</span></td>
                    <td>
                      <button class="btn btn-primary btn-xs open-AddBookDialog" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'" data-name="'.$row[1].'"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs" onclick="del(this)"><i class="fa fa-trash-o " ></i></button>
                    </td>
                    </tr>');
                     
                }
                   
                    ?>
                  
                 
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
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
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="../lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../lib/jquery.scrollTo.min.js"></script>
  <script src="../lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="../lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
function del(obj) {
    var trId = obj.parentNode.parentNode.id;
    var trObj = document.getElementById(trId);
    document.getElementById("tb").removeChild(trObj);
   $.ajax({
    url: "../delete.php",
    data: {
      'type':"3",
      'delid':trId,
    },
    type:"POST",
    dataType: 'text', 
    success: function(msg){
        //$('#result').text("儲存成功！");  
        if(msg.length == 0){
          alert("刪除失敗！"); 
      }else{
          alert("刪除成功！");
      }              
      
    },
    error:function(xhr, ajaxOptions, thrownError){ 
       alert("刪除失敗！");  
    }                
});
  }
  $(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     var myBookname = $(this).data('name');
     $(".modal-body .form-group #teachername").val( myBookname );
     $(".modal-body .form-group #teacherid").val( myBookId );
     $(".modal-body .form-group #teacherid").hide();
     $(".modal-body .form-group #whereteacher").hide();
     
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
   $(document).on("click", ".isAdd", function () {
     $(".modal-body .form-group #whereteacher2").hide();
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
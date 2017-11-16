<?php session_start();
ob_start();
// set a time limit in seconds
$timelimit = 60*60;
// get the current time
$now = time();
// if session variable not set, redirect to login page
if (!isset($_SESSION['name'])) {
header('Location: index');
}
if ($_SESSION['role']!='Client') {
header('Location: index');
}
// if timelimit has expired, destroy session and redirect
elseif ($now > $_SESSION['start'] + $timelimit) {
// empty the $_SESSION array
$_SESSION = array();
// invalidate the session cookie
if (isset($_COOKIE[session_name()])) {
setcookie(session_name(), '', time()-86400, '/');
}
// end session and redirect with query string
session_destroy();
header("Location: index");
exit;
}
// if it's got this far, it's OK, so update start time
else {
$_SESSION['start'] = time();
}?>
<?php include('includes/db_connection.php'); 
$conn=connect_to_db();
 //project details and deleting
 if(isset($_GET['pro'])){
 $id_to_delete=$_GET['exam_r'];
 $conn=connect_to_db();
 $sql=mysqli_query($conn,"DELETE FROM exam_type WHERE exam_id='$id_to_delete' LIMIT 1") or die(mysqli_error());
 header("location:dashboard_naps?classes=exam");
 }if(isset($_GET['ppro898098'])){
 $id_to_pp=$_GET['ppro898098'];
 $_SESSION['project_id']= $id_to_pp;
 header("location:client?dashboard=my-order");
 }
 //message
  if(isset($_GET['message_r'])){
 $id_to_delete=$_GET['message_r'];
 $conn=connect_to_db();
 $sql=mysqli_query($conn,"DELETE FROM message WHERE id='$id_to_delete' LIMIT 1") or die(mysqli_error());
 header("location:client?dashboard=messages");
 }if(isset($_GET['mes78987'])){
 $id_to_edit=$_GET['mes78987'];
 $_SESSION['message_id']= $id_to_edit;
 $sql=mysqli_query($conn,"update message set status='1' where id='$id_to_edit'") or die(mysqli_error());
 header("location:client?dashboard=message");
 }
 ?>
 <!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>EC client orders</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Admin">
<meta name="author" content="Lawrence tusabe">
<!-- styles -->
<link href="css/css/bootstrap.css" rel="stylesheet">
<link href="css/css/jquery-ui-1.8.16.custom.css" rel="stylesheet">
<link href="css/css/jquery.jqplot.css" rel="stylesheet">
<link href="css/css/prettify.css" rel="stylesheet">
<link href="css/css/elfinder.min.css" rel="stylesheet">
<link href="css/css/elfinder.theme.css" rel="stylesheet">
<link href="css/css/fullcalendar.css" rel="stylesheet">
<link href="js/plupupload/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet">
<link href="css/css/styles.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/css/icons-sprite.css" rel="stylesheet">
<link id="themes" href="css/css/themes.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner top-nav">
    <div class="container-fluid">
      <div class="branding">
        <div class="logo"> <a href="client?dashboard"><img src="img/logo1.png" width="168" height="40" alt="Logo"></a> </div>
      </div>
      <ul class="nav pull-right">
        <li class="dropdown search-responsive"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="nav-icon magnifying_glass"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="top-search">
              <form action="#" method="get">
                <div class="input-prepend"> <span class="add-on"><i class="icon-search"></i></span>
                  <input type="text" id="searchIcon">
                </div>
              </form>
            </li>
          </ul>
        </li>
        
        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Welcome <?php  echo $_SESSION['print'];?> <span class="alert-noty">01</span><i class="white-icons admin_user"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="client?dashboard=messages"><i class="icon-inbox"></i> Message Box </a></li>
            <li><a href="client?dashboard=profile"><i class="icon-file"></i> View Profile</a></li>
            <li><a href="client?dashboard=settings"><i class="icon-cog"></i> Account Settings</a></li>
            <li class="divider"></li>
            <li><a href="logout.php"><i class="icon-off"></i><strong> Logout</strong></a></li>
          </ul>
        </li>
      </ul>
      <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <div class="nav-collapse collapse">
        <ul class="nav">
		<li class="dropdown"><a href="client?dashboard=new-project"><i class="nav-icon frames"></i>Post project </a></li>
        <li class="dropdown"><a href="client?dashboard=previous-jobs"><i class="nav-icon create_write"></i>Projects</a></li>
		<li class="dropdown"><a href="client?dashboard=deposit"><i class="nav-icon home"></i>Depost Money </a></li>
        <li class="dropdown"><a href="client?dashboard=payments"><i class="nav-icon money"></i>Payments Statistics</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--sidebar-->
<?php include('client_sidebar.php'); ?>
<!-- main content-->
  <?php if(isset($_GET['dashboard'])){
					   include_once("client1.php");
					   } else if(isset($_GET['add-user'])){
					   include_once("user_add.php");
					   } else{
					  // header("location:client?dashboard");
					   } ?>
<!-- javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery2.js"></script>
<script src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/prettify.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/accordion.jquery.js"></script>
<script src="js/smart-wizard.jquery.js"></script>
<script src="js/vaidation.jquery.js"></script>
<script src="js/jquery-dynamic-form.js"></script>
<script src="js/fullcalendar.js"></script>
<script src="js/raty.jquery.js"></script>
<script src="js/jquery.noty.js"></script>
<script src="js/jquery.cleditor.min.js"></script>
<script src="js/data-table.jquery.js"></script>
<script src="js/TableTools.min.js"></script>
<script src="js/ColVis.min.js"></script>
<script src="js/plupload.full.js"></script>
<script src="js/elfinder/elfinder.min.js"></script>
<script src="js/chosen.jquery.js"></script>
<script src="js/uniform.jquery.js"></script>
<script src="js/jquery.tagsinput.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script src="js/check-all.jquery.js"></script>
<script src="js/inputmask.jquery.js"></script>
<script src="js/plupupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/jquery.jqplot.min.js"></script>
<script src="js/custom-script.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/ios-orientationchange-fix.js"></script>
</body>
</html>
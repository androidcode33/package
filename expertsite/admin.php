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
if ($_SESSION['role']!='Support') {
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
 
  //settings
 ///////////////////////////////////////////////////////////////////////////////////////////////////////////
 if(isset($_GET['user_r'])){
 $id_to_delete=$_GET['user_r'];
 $conn=connect_to_db();
 $sql=mysqli_query($conn,"DELETE FROM user WHERE userid='$id_to_delete' LIMIT 1") or die(mysql_error());
 header("location:index.php?view-users");
 } 
  if(isset($_GET['disid'])){
 $conn=connect_to_db();	
 $sqlname = mysqli_query($conn,"update user set status='Inactive' WHERE userid=".$_GET['disid']) or die(mysql_error()); 				   
	 header("location:index.php?view-users");
	exit();
 }
if(isset($_GET['enaid'])){
 $conn=connect_to_db();	
 $sqlname = mysqli_query($conn,"update user set status='Active' WHERE userid=".$_GET['enaid']) or die(mysql_error()); 				   
	 header("location:index.php?view-users");
	exit();
 }
 //message
  if(isset($_GET['message_r'])){
 $id_to_delete=$_GET['message_r'];
 $conn=connect_to_db();
 $sql=mysqli_query($conn,"DELETE FROM message WHERE id='$id_to_delete' LIMIT 1") or die(mysql_error());
 header("location:admin?dashboard=messages");
 }if(isset($_GET['mes78987'])){
 $id_to_edit=$_GET['mes78987'];
 $_SESSION['message_id']= $id_to_edit;
 $sql=mysqli_query($conn,"update message set status='1' where id='$id_to_edit'") or die(mysql_error());
 header("location:admin?dashboard=message");
 } 
 
 //applicants
  if(isset($_GET['applicant_r'])){
 $id_to_delete=$_GET['applicant_r'];
 $conn=connect_to_db();
 $sql=mysqli_query($conn,"DELETE FROM user WHERE userid='$id_to_delete' LIMIT 1") or die(mysql_error());
 header("location:admin?dashboard=messages");
 }if(isset($_GET['applicant'])){
 $id_to_edit=$_GET['applicant'];
 $_SESSION['applicant_id']= $id_to_edit;
 //$sql=mysqli_query($conn,"update message set status='1' where id='$id_to_edit'") or die(mysql_error());
 header("location:admin?dashboard=applicant");
 }
 if(isset($_GET['approve'])){
 $sql=mysqli_query($conn,"update user set status='Approved', role='freelancer' where userid='".$_GET['approve']."'") or die(mysql_error());
 header("location:admin?dashboard=applicant");
 }
  if(isset($_GET['reject'])){
 $sql=mysqli_query($conn,"update user set status='Rejected', role='Rejected' where userid='".$_GET['reject']."'") or die(mysql_error());
 header("location:admin?dashboard=applicant");
 }
 //clients 
 if(isset($_GET['client'])){
 $id_to_edit=$_GET['client'];
 $_SESSION['client_id']= $id_to_edit;
 //$sql=mysqli_query($conn,"update message set status='1' where id='$id_to_edit'") or die(mysql_error());
 header("location:admin?dashboard=client");
 }if(isset($_GET['capprove'])){
 $sql=mysqli_query($conn,"update user set status='Approved' where userid='".$_GET['capprove']."'") or die(mysql_error());
 header("location:admin?dashboard=client");
 }
  if(isset($_GET['creject'])){
 $sql=mysqli_query($conn,"update user set status='Rejected' where userid='".$_GET['creject']."'") or die(mysql_error());
 header("location:admin?dashboard=client");
 }
 
   //applications
  if(isset($_GET['user_r'])){
 $id_to_delete=$_GET['user_r'];
 $conn=connect_to_db();
 $sql=mysqli_query($conn,"DELETE FROM user WHERE userid='$id_to_delete' LIMIT 1") or die(mysql_error());
 header("location:admin?dashboard=applications");
 } if(isset($_GET['user_e'])){
 $id_to_edit=$_GET['user_e'];
 $_SESSION['user']= $id_to_edit;
 //$sql=mysqli_query($conn,"update message set status='1' where id='$id_to_edit'") or die(mysql_error());
 header("location:admin?dashboard=profile-edit");
 } if(isset($_GET['user_p'])){
 $id_to_edit=$_GET['user_p'];
 $_SESSION['user']= $id_to_edit;
 header("location:admin?dashboard=profile-view");
 } if(isset($_GET['user_p'])){
 $id_to_edit=$_GET['user_p'];
 $_SESSION['user']= $id_to_edit;
 header("location:admin?dashboard=profile-approve");
 } 
 
 //project details and deleting
if(isset($_GET['ppro898098'])){
 $id_to_edit=$_GET['ppro898098'];
 $_SESSION['project_id']= $id_to_edit;
 header("location:admin?dashboard=order");
 }
 //project bids
 if(isset($_GET['pro'])){
 $id_to_delete=$_GET['exam_r'];
 $conn=connect_to_db();
 $sql=mysqli_query($conn,"DELETE FROM exam_type WHERE exam_id='$id_to_delete' LIMIT 1") or die(mysql_error());
 header("location:dashboard_naps?classes=exam");
 }if(isset($_GET['bidso898098'])){
 $id_to_edit=$_GET['bidso898098'];
 $_SESSION['project_bid']= $id_to_edit;
 header("location:admin?dashboard=project-bids");
 }
 /////////////////////////////////////////
 //////////////  HR      /////////////////
if(isset($_GET['category_r'])){
 $id_to_delete=$_GET['category_r'];
 $conn=connect_to_db();
 $sql=mysqli_query($conn,"DELETE FROM discipline WHERE disciplineid='$id_to_delete' LIMIT 1") or die(mysql_error());
 header("location:admin?dashboard=category");
 } if(isset($_GET['categoryedit'])){
 $id_to_edit=$_GET['categoryedit'];
 $_SESSION['disciplineid']= $id_to_edit;
 header("location:admin?dashboard=categoryedit");
 } 
 ?>
 <!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Expertcage.com</title>
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
        <div class="logo"> <a href="index.php"><img src="img/logo1.png" width="168" height="40" alt="Logo"></a> </div>
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
            <li><a href="admin?dashboard=messages"><i class="icon-inbox"></i> Inbox </a></li>
            <li><a href="admin?dashboard=profile"><i class="icon-file"></i> View Profile</a></li>
            <li><a href="admin?dashboard=settings"><i class="icon-cog"></i> Account Settings</a></li>
            <li class="divider"></li>
            <li><a href="logout.php"><i class="icon-off"></i><strong> Logout</strong></a></li>
          </ul>
        </li>
      </ul>
      <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <div class="nav-collapse collapse">
        <ul class="nav">
		<li class="dropdown"><a href="index" target="_blank"><i class="nav-icon home"></i> View Site </a></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="nav-icon create_write"></i>Pages<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="admin?home">Home page</a></li>
				<li><a href="admin?get-started">Get Started</a></li>
				<li><a href="admin?get-paid">Get paid</a></li>
				<li><a href="admin?requirements">Requirements to join</a></li>
				<li><a href="admin?why-us">Why the Expertcage</a></li>
				<li><a href="admin?how-it-works">How is works</a></li>
				<li><a href="admin?about-us">About Us</a></li>
				<li><a href="admin?grow-career">Grow Your Career</a></li>
				<li><a href="admin?benefits">Our Benefits</a></li>
				<li><a href="admin?expertise">Areas of expertise</a></li>
				<li><a href="admin?faq">FAQ</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="nav-icon frames"></i>Projects<b class="caret"></b></a>
            <ul class="dropdown-menu">
              	<li><a href="admin?dashboard=new-jobs">New Projects</a> </li>
				<li><a href="admin?dashboard=project-bidding">Project Bidding</a> </li>
				<li><a href="admin?dashboard=jobs-progress">Projects in Progress</a> </li>         
              <li class=" divider"></li>
              <li><a href="admin?dashboard=project-complete">Projects Completed</a> </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="nav-icon users"></i>Applicants<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="admin?dashboard=applications">New Applicants</a></li>
			  <li><a href="admin?dashboard=applicant-approved">Approved Applicants</a></li>
			  <li><a href="admin?dashboard=applicant-rejected">Rejected Applicants</a></li>
			  <li><a href="admin?dashboard=clients">Clients</a></li>
              <li class=" divider"></li>
               <li><a href="admin?dashboard=account-status">Account Status</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="nav-icon cog_3"></i> Others<b class="caret"></b></a>
            <ul class="dropdown-menu">
			  <li><a href="admin?dashboard=discipline">Categories/Discipline</a></li>
			  <li><a href="admin?dashboard=discipline">Academic Levels</a></li>
              <li><a href="admin?dashboard=payments">Payment Statistics</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--sidebar-->
<?php include('admin_sidebar.php'); ?>
<!-- main content-->
<div id="main-content">
  <?php if(isset($_GET['how-it-works'])){
					   include_once("admin_how_it_works.php");
					   } else if(isset($_GET['get-started'])){
					   include_once("admin_get_started.php");
					   } else if(isset($_GET['about-us'])){
					   include_once("admin_about_us.php");
					   } else if(isset($_GET['why-us'])){
					   include_once("admin_why_us.php");
					   } else if(isset($_GET['benefits'])){
					   include_once("admin_benefits.php");
					   } else if(isset($_GET['faq'])){
					   include_once("admin_faq.php");
					   } else if(isset($_GET['terms'])){
					   include_once("admin_terms.php");
					   } else if(isset($_GET['home'])){
					   include_once("admin_home_page.php");
					   } else if(isset($_GET['payment-methods'])){
					   include_once("admin_paymentmethods.php");
					   
					   } else if(isset($_GET['expertise'])){
					   include_once("admin_categories.php");
					   } else if(isset($_GET['dashboard'])){
					   include_once("admin1.php");
					   
					   
					   } else{
					   include_once("admin_welcome.php");
					   } ?>
</div>
<!-- javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<?php if(isset($_GET['terms'])){  }
else if(isset($_GET['how-it-works'])){}
else if(isset($_GET['get-started'])){}
else if(isset($_GET['payment-methods'])){}
else if(isset($_GET['faq'])){}
else if(isset($_GET['benefits'])){}
else if(isset($_GET['why-us'])){}
else if(isset($_GET['categories'])){}
else if(isset($_GET['get-paid'])){}
else if(isset($_GET['about-us'])){}
else if(isset($_GET['home'])){}
else if(isset($_GET['log'])){}
else {?>
<script src="css/js/jquery.js"></script> 
<?php }?>

<!-- javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

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
<script src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
<script src="js/plupupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/jquery.jqplot.min.js"></script>
<script src="js/chart/jqplot.highlighter.min.js"></script>
<script src="js/chart/jqplot.cursor.min.js"></script>
<script src="js/chart/jqplot.dateAxisRenderer.min.js"></script>
<script src="js/custom-script.js"></script>
<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/respond.min.js"></script>
<script src="js/ios-orientationchange-fix.js"></script>
<script src="css/js/respond.min.js"></script>
<script src="css/js/ios-orientationchange-fix.js"></script>
</body>
</html>
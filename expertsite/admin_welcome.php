<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<!-- styles -->
<!-- styles -->
<link href="css/css/bootstrap.css" rel="stylesheet">
<link href="css/css/jquery-ui-1.8.16.custom.css" rel="stylesheet">
<link href="css/css/jquery.jqplot.css" rel="stylesheet">
<link href="css/css/prettify.css" rel="stylesheet">
<link href="css/css/elfinder.min.css" rel="stylesheet">
<link href="css/css/elfinder.theme.css" rel="stylesheet">
<link href="css/js/plupupload/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet">
<link href="css/css/styles.css" rel="stylesheet">
<link href="css/css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/css/icons-sprite.css" rel="stylesheet">
<link id="themes" href="css/css/themes.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
  <div class="container-fluid">
   <div class="page-header">
      <h1 align="center">Administrator Control Panel</h1>
    </div>
	<!--------------- row 1---------------------------------------------------------------------------------------------->
	<div class="row-fluid">
    	<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="admin?dashboard=new-jobs">
                 	<li><span class="summary-icon"><img src="img/pnew.png" alt="Event"></span>
                 	<span class="count">New Projects</span><span class="summary-title">0 projects to allocate</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
		<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="admin?dashboard=applications">
                 	<li><span class="summary-icon"><img src="img/applicant.png" alt="Event"></span>
					<?php $qna = "SELECT * FROM user a, country b where a.role='Applicant' and a.country=b.countryid ORDER BY fname ASC";	
					$queryna = mysqli_query($conn,$qna) or die(mysqli_error());	$rownona = mysqli_num_rows($queryna);?>
                 	<span class="count">New Applicants</span><span class="summary-title"><?php echo $rownona; ?> Applicants to be approved</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
		<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="admin?dashboard=messages">
                 	<li><span class="summary-icon"><img src="img/messages.png" alt="Event"></span>
                 	<span class="count">New Messages</span><span class="summary-title">0 unread messages</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
	</div>
	<!--------------- row 2---------------------------------------------------------------------------------------------->
	<div class="row-fluid">
    	<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="admin?dashboard=project-bidding">
                 	<li><span class="summary-icon"><img src="img/pbids.png" alt="Event"></span>
                 	<span class="count">Project Biddings</span><span class="summary-title"> 0 Project biddings</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
		<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="admin?dashboard=applicant-approved">
                 	<li><span class="summary-icon"><img src="img/approved.png" alt="Event"></span>
					<?php $qaa = "SELECT * FROM user a, country b where a.status='Approved' and a.country=b.countryid ORDER BY fname ASC";	
					$querya = mysqli_query($conn,$qaa) or die(mysqli_error());	$rownoaa = mysqli_num_rows($querya);?>
                 	<span class="count">Approved Applicants</span><span class="summary-title"><?php echo $rownoaa; ?> approved applicants</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
		<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="admin?dashboard=category">
                 	<li><span class="summary-icon"><img src="img/category.png" alt="Event"></span>
					<?php $q1 = "SELECT * FROM discipline ORDER BY name ASC";	$query = mysqli_query($conn,$q1) or die(mysqli_error());	$rowaoe = mysqli_num_rows($query);?>
                 	<span class="count">Areas of Expertise</span><span class="summary-title"> <?php echo $rowaoe; ?> Areas available</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
	</div>
	<!--------------- row 3---------------------------------------------------------------------------------------------->
	<div class="row-fluid">
    	<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="admin?dashboard=jobs-progress">
                 	<li><span class="summary-icon"><img src="img/pprogress.png" alt="Event"></span>
                 	<span class="count">Projects in Progress</span><span class="summary-title">10 Projects in progress</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
		<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="admin?dashboard=applicant-rejected">
                 	<li><span class="summary-icon"><img src="img/rejected.png" alt="Event"></span>
					<?php $qra = "SELECT * FROM user a, country b where a.status='Rejected' and a.country=b.countryid ORDER BY fname ASC";	
					$queryra = mysqli_query($conn,$qra) or die(mysqli_error());	$rownora = mysqli_num_rows($queryra);?>
                 	<span class="count">Rejected Applicants</span><span class="summary-title"><?php echo $rownora; ?> Rejected applicants</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
		<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="admin?dashboard=payments">
                 	<li><span class="summary-icon"><img src="img/make.png" alt="Event"></span>
                 	<span class="count">Payment Statistics</span><span class="summary-title">View payments made</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
	</div>
	<!--------------- row 4---------------------------------------------------------------------------------------------->
	<div class="row-fluid">
    	<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="admin?dashboard=project-complete">
                 	<li><span class="summary-icon"><img src="img/pcomplete.png" alt="Event"></span>
                 	<span class="count">Completed Projects</span><span class="summary-title">View project details</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
		<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="admin?dashboard=clients">
                 	<li><span class="summary-icon"><img src="img/clients.png" alt="Event"></span>
					<?php $qc = "SELECT * FROM user a, country b where a.role='Client' and a.country=b.countryid ORDER BY fname ASC";	
					$query = mysqli_query($conn,$qc) or die(mysqli_error());	$rownoc = mysqli_num_rows($query);?>
                 	<span class="count">Our Clients</span><span class="summary-title">Total of <?php echo $rownoc; ?> clients</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
		<div class="span4">
	   		<div class="spand">
           		<div class="summary">
             	<ul><a href="#">
                 	<li><span class="summary-icon"><img src="img/payment.png" alt="Event"></span>
                 	<span class="count">Make payments</span><span class="summary-title">complete monthly payments</span></li></a>
             	</ul>
           		</div>
       		</div>
	  	</div>
	</div> 
</body>
</html>
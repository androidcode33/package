<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>expertcage</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Admin Panel Template">
<meta name="author" content="Westilian: Kamrujaman Shohel">
<!-- styles -->
<link href="css/css/bootstrap.css" rel="stylesheet">
<link href="css/js/plupupload/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet">
<link href="css/css/styles.css" rel="stylesheet">
<link href="css/css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/css/icons-sprite.css" rel="stylesheet">
<link id="themes" href="css/css/themes.css" rel="stylesheet">
</head>
<body>
<div id="main-content"> 
  <div class="container-fluid">
  <?php   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /////////////////////////////////////term/////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='') {?>
		<ul class="breadcrumb">
			<li><a href="#">Home</a><span class="divider">&raquo;</span></li>
			<li class="active">My profile</li>
		</ul>		<div class="row-fluid">
      <div class="row-fluid">
	 <?php  $conn=connect_to_db();	
	$query = "SELECT * FROM user a, country b where a.userid='".$_SESSION['ec_userid']." and a.country=b.country'";
	$query = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$row = mysqli_fetch_array($query);
	?>
			<div class="span3">
				<div class=" nonboxy-widget">
					<div class="widget-content">
						<div class="widget-box">
						<p align="center"><h4 align="center"><?php echo $row['role']; ?></h4></p>
							<p align="center"> 
							<?php if($row['photo']!=''){ echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo']) .'" width="151" height="180" />';} else {echo '<div align="center"><img src="images/comment-avatar1.gif" width="170" height="170" /></div>';} ?>
							</p>
							
							<p align="center"><h4 align="center"><?php echo $row['lname']; ?></h4></p>
							<p align="center"><h4 align="center"><?php echo $row['fname']; ?></h4></p>
							
						</div>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5> Personal Information</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<p>
							<table width="100%" border="0" cellpadding="4" cellspacing="4">
  <tr>
    <td width="37%" align="right" valign="middle"><h6 align="left">User Number:</h6></td>
    <td width="63%"><?php echo $row['userid']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">First Name: </h6></td>
    <td><?php echo $row['fname']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Last Name: </h6></td>
    <td><?php echo $row['lname']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Email: </h6></td>
    <td><?php echo $row['email']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Country:</h6></td>
    <td><?php echo $row['name']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">City:</h6></td>
    <td><?php echo $row['city']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Phone:</h6></td>
    <td><?php $num="+".$row['phone1']; $ph="(".substr($num,0,4).") ".substr($num,4,3)."-".substr($num,7,3)."".substr($num,10,3);echo $ph;?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Academic Level: </h6></td>
    <td><?php echo $row['userid']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Status:</h6></td>
    <td><?php echo $row['status']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Gender:</h6></td>
    <td><?php echo $row['sex']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Role Played: </h6></td>
    <td>Expert / consultant</td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Payment Method: </h6></td>
    <td><?php echo $row['role']; ?></td>
  </tr>
</table>

							</p></div>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5> Fields of Proficiency</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<p class="lead">
						<?php  $conn=connect_to_db();	
					$query = "SELECT * FROM client_discipline a, discipline b where a.userid='".$_SESSION['ec_userid']."' 
					and a.discipline=b.disciplineid";
					$query = mysqli_query($conn,$query) or die(mysqli_error($conn));?>
							<ul class="tick_icn">
							<?php while ($row1 = mysqli_fetch_array($query)) { ?>
								<li><?php echo $row1['name']; ?></li>
							<?php }?>
							</ul>
	
							</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="span4">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5>Description About me</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
						<p>
						<?php echo $row['description']; ?>
						</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	  <!---end of span6-->
		 <?php }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='available-jobs') {?>
  		<ul class="breadcrumb">
			<li><a href="#">Home</a><span class="divider">&raquo;</span></li>
			<li class="active">Available projects</li>
		</ul>
		<div class="row-fluid">
      <div class="span12">
        <div class="nonboxy-widget">
          <div class="widget-head">
            <h5 class="pull-left"><i class="black-icons list_images"></i>Available Project to apply for</h5>
          </div>
		  <?php	
			$query = "SELECT * FROM projects a, discipline b where a.status='Pending' and a.typeid=b.disciplineid ORDER BY projectid ASC";
			$query = mysqli_query($conn,$query) or die(mysqli_error($conn)); $x=1;	?>
          <table class="data-tbl-striped table table-striped table-bordered">
            <thead>
              <tr>
                <th class="center"> #  </th>
                <th>ORDER ID</th>
                <th> PROJECT TITLE</th>
                <th> CATEGORY</th>
                <th> TOPIC </th>
				<th> TYPE</th>
                <th> DEADLINE </th>
                <th>PRICE</th>
                <th> ACTION</th>
              </tr>
            </thead>
            <tbody>
			<?php while ($row = mysqli_fetch_array($query)) { ?>
              <tr style="cursor:pointer" onClick="document.location.href='freelancer?ppro898098=<?php echo $row['projectid'];?>'">
                <td class="center tr-task-check"><?php echo $x; ?></td>
                <td><?php echo $row['projectid']; ?></td>
                <td> <?php echo $row['title']; ?></td>
                <td><?php echo $row['name'];?></td>
                <td class="center sdate"><?php echo $row['topic']; ?></td>
				<td class="center sdate"><?php echo $row['type']; ?></td>
				<td><span class="label label-important"><?php echo $row['deadline']; ?></span></td>
				<td><span class="label label-success">$<?php echo $row['client_price']; ?></span></td>
                <td><a href="freelancer?ppro898098=<?php echo $row['projectid'];?>"><i class="icon-file"></i> Apply</a></td>
              </tr>
             <?php $x++;} ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
	  <!---end of span6-->
	   <?php }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='previous-jobs') {?>
  		<ul class="breadcrumb">
			<li><a href="#">Home</a><span class="divider">&raquo;</span></li>
			<li class="active">Previous Projects</li>
		</ul>
	<div class="row-fluid">
      <div class="span12">
        <div class="nonboxy-widget">
          <div class="widget-head">
            <h5 class="pull-left"><i class="black-icons list_images"></i>Completed Projects</h5>
          </div>
		  <?php	
	 $conn=connect_to_db();	
	$query = "SELECT * FROM projects a, discipline b where a.typeid=b.disciplineid and a.status='Complete' and a.freelancerid='".$_SESSION['ec_userid']."' ORDER BY projectid ASC";
	$query = mysqli_query($conn,$query) or die(mysqli_error($conn)); $x=1;	?>
          <table class="data-tbl-striped table table-striped table-bordered">
            <thead>
              <tr>
                <th class="center"># </th>
                <th>ORDER ID</th>
                <th> PROJECT TITLE</th>
                <th> CATEGORY</th>
                <th> TOPIC </th>
				<th> TYPE</th>
                <th> DEADLINE </th>
                <th>PRICE</th>
              </tr>
            </thead>
            <tbody>
			<?php while ($row = mysqli_fetch_array($query)) { ?>
              <tr style="cursor:pointer" onClick="document.location.href='freelancer?ppro898098=<?php echo $row['projectid'];?>'">
                <td class="center tr-task-check"> <?php echo $x; ?> </td>
                <td><?php echo $row['projectid']; ?></td>
                <td> <?php echo $row['title']; ?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['topic']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['deadline']; ?></td>
				<td><span class="label label-success"><?php echo $row['admin_price']; ?></span></td>
              </tr>
             <?php $x++;} ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
		 <?php }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='my-order') {?>
  <?php	$conn=connect_to_db();
		$query1 = "SELECT * FROM projects a, discipline b where a.typeid=b.disciplineid and a.projectid='".$_SESSION['project_id']."'";
	$query1 = mysqli_query($conn,$query1) or die(mysqli_error($conn));
	$row = mysqli_fetch_array($query1);
	$date1 = date('d',strtotime($row['post_date']));
	$month1 = date('M',strtotime($row['post_date']));
	$year1 = date('Y',strtotime($row['post_date']));
	$date = date('d',strtotime($row['deadline']));
	$month = date('M',strtotime($row['deadline']));
	$year = date('Y',strtotime($row['deadline']));
	$date1 = date('d',strtotime(date('Y-m-d')));?>
  			<div class="page-header">
      <h1>Project Number: #<?php echo $_SESSION['project_id'];?></h1>
    </div>
	 <div class="row-fluid">
			<div class="span3">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5> Take Note</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<div class="accordion-content">
							<ul class="event-list">
							<h5>Post date & Time</h5>
							<li>
								<div class="evnt-date"><?php echo $date1; ?><span><?php echo $month1; ?></span> <span><?php echo $year1; ?></span> </div>
								<div class="event-info"> <span><i class="icon-time"></i> <?php echo $row['timein']; ?></span>
								<p> Please take note of the remaining time </p>
								</div>
							</li>
							<h5>Deadline date & Time</h5>
							<li>
								<div class="evnt-date"> <?php echo $date; ?><span><?php echo $month; ?></span> <span><?php echo $year; ?></span></div>
								<div class="event-info"> <span><i class="icon-time"></i> <?php echo $row['timein']; ?></span>
								<p> Please take note of this deadline </p>
								</div>
							</li>
							</ul>
							</div>
							<div class="widget-head"><h5>Cost: <span class="label label-warning"> $<?php echo number_format($row['admin_price'],2); ?></span></h5></div>
							<?php if($row['status']=='Pending'){		echo '<ul class="colorbox_elem"><li><a class="inline-modal btn btn-inverse" href="#inline_content">
							Apply now</a></li>		</ul>';		}?>
							
							 <?php
								if(array_key_exists('apply', $_POST)){
								$send=$_SESSION['ec_userid'];
								$proj=$_SESSION['project_id'];
								$cont=$_POST['content'];
								$price=$_POST['price'];
								$dat = date('Y-m-d');		$time= date('H:i');
								$conn=connect_to_db();
								
									 $condetails=mysqli_query($conn,"INSERT INTO project_bidding (pid,date, applicant,content, price, time) VALUES
								('$proj','$dat', '$send', '$cont', '$price', '$time')") or die( mysqli_error($conn));
									
										
										if(!$condetails){echo "Error" .mysqli_error($conn); echo "</p>";}
										else{
										echo "<div class='alert alert-success fade in' align='center'><b>Application sent successfully!</b></div>"; }   			
								}
								?>
							<!-------->
							<div style='display:none'>
								<div id='inline_content' style='padding:10px; background:#fff;'>
								<div class="page-header"><h1 align="center">Bid for this project</h1></div>
								<h5 align="center"> Provide these details</h5>
									<form class="form-horizontal ucase" action="" method="post" enctype="multipart/form-data" name="theForm" onSubmit="return validateFormOnSubmit(this)">
							
									<fieldset>
										<div class="control-group">
											<label class="control-label" for="input01">Price ($)</label>
											<div class="controls">
											<input type="text" class="input-xlarge text-tip" id="cost"  placeholder="Bidding Price in dollars" name="price">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Reason why this project should be allocated to you:</label>
											<div class="controls">
												<textarea  class="input-xlarge" id="content" rows="10" cols="50" name="content" style="size:300px;"></textarea>
											</div>
										</div>
										
									
										<div class="form-actions">
										<button class="btn btn-inverse" type="submit" name="apply">Apply</button>
										</div>
									</fieldset>
									<script language="JavaScript1.2" type="text/javascript">
									function validateFormOnSubmit(theForm) { var reason = "";
									  reason += validateEmpty(theForm.content);
									  reason += validateCost(theForm.cost);
									   
										if (reason != "") {alert("Some fields need correction:\n" + reason);
											return false;
										}
									  return true;
									}
									
									function validateEmpty(fld) {
										var error = "";
										if (fld.value.length == 0) {
											fld.style.background = 'Yellow'; 
											error = "The required field has not been filled in.\n"    } 
										else { fld.style.background = 'White';    }
										return error;  
									}
									function validateEmpty1(fld) {
										var error = "";
										if (fld.value == 'Select') {
											fld.style.background = 'Yellow'; 
											error = "Select a value.\n"
										} else { fld.style.background = 'White';  }
										return error;  
									}
									function validateUsername(fld) {
									   var error = "";
										var illegalChars = /\W/; // allow letters, numbers, and underscores
										if (fld.value == "") {
											fld.style.background = 'Yellow'; 
										   error = "You didn't enter a username.\n";
										} else if ((fld.value.length < 5) || (fld.value.length > 15)) {
										   fld.style.background = 'Yellow'; 
											error = "The username is the wrong length.\n";
										} else if (illegalChars.test(fld.value)) {
											fld.style.background = 'Yellow'; 
											error = "The username contains illegal characters.\n";
										} else {
											fld.style.background = 'White';
										}
										return error;
									}
									function validatePassword(fld) {
									   var error = "";
										var illegalChars = /[\W_]/; // allow only letters and numbers 
										if (fld.value == "") {
											fld.style.background = 'Yellow';
											error = "You didn't enter a password.\n";
										} else if ((fld.value.length < 4) || (fld.value.length > 15)) {
											error = "The password is the wrong length. \n";
											fld.style.background = 'Yellow';
										} else if (illegalChars.test(fld.value)) {
											error = "The password contains illegal characters.\n";
											fld.style.background = 'Yellow';
										} else if (!theForm.pass1.value==theForm.pass2.value) {
											error = "The password dont match.\n";
											fld.style.background = 'Yellow';
										} else {
											fld.style.background = 'White';
										}
									   return error;
									} 
									function trim(s) {  return s.replace(/^\s+|\s+$/, ''); }
									
									function validateEmail(fld) {
										var error="";
										var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
										var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
										var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
									   
										if (fld.value == "") {
											fld.style.background = 'Yellow';
											error = "You didn't enter an email address.\n";
										} else if (!emailFilter.test(tfld)) {              //test email for illegal characters
											fld.style.background = 'Yellow';
											error = "Please enter a valid email address.\n";
										} else if (fld.value.match(illegalChars)) {
											fld.style.background = 'Yellow';
											error = "The email address contains illegal characters.\n";
										} else {
											fld.style.background = 'White';
										}
										return error;
									}
									function validateCost(fld) {
										var error = "";
										var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');    
									   if (fld.value == "") {
											error = "You didn't enter project cost.\n";
											fld.style.background = 'Yellow';
										} else if (isNaN(parseInt(stripped))) {
											error = "The currency contains illegal characters.\n";
											fld.style.background = 'Yellow';
										}
										return error;
									}
									</script>	
								</form>
								</div>
							</div>
							<!------->				
						</div>
					</div>
				</div>
			</div>
			<div class="span9">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5>Project Details</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<table width="100%" border="0">
							  <tr>
								<td><h6>Discipline:</h6><?php echo $row['name']; ?></td>
								<td><h6>Topic:</h6><?php echo $row['topic']; ?></td>
								<td><h6>Solution Type:</h6><?php echo $row['type']; ?></td>
								</tr>
							  <tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								</tr>
							</table>
							<div class="widget-head">
							<h5>Project Description</h5>
							</div>
							<p><?php echo $row['content']; ?>
						  </p>
						</div>
					</div>
				</div>
				<div class="span6">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5>Messages</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
						<!------------------>
        <div id="accordion-widget" class="accordion boot-accordion">
          <div class="accordion-group">
            <div class="accordion-heading"> <a href="#One" data-parent="#accordion-widget" data-toggle="collapse" class="btn-invers accordion-toggle">Project Messages </a> </div>
            <div class="accordion-body collapse in" id="One">
              <div class="accordion-inner"> 
			  		<?php 
					$querym = "SELECT * FROM message where projectid='".$_SESSION['project_id']."' and status='1' order by id ASC";
					$querym = mysqli_query($conn,$querym) or die(mysqli_error($conn));
					?>
					<?php while ($rowm = mysqli_fetch_array($querym)) {
					$queryu = "SELECT * FROM user where userid='".$rowm['sender']."'";
					$queryu = mysqli_query($conn,$queryu) or die(mysqli_error($conn));
						$rowu = mysqli_fetch_array($queryu);
						$queryr = "SELECT * FROM user where userid='".$rowm['receiver']."'";
						$queryr = mysqli_query($conn,$queryr) or die(mysqli_error($conn));
						$rowr = mysqli_fetch_array($queryr);
					if($rowm['sender']==$_SESSION['userid']){?>
						<div class="alert alert-error fade in">
						<button data-dismiss="alert" class="close" type="button">×</button>
						<h4 class="alert-heading"><?php echo $rowm['subject'];?></h4>
						<p><?php echo $rowm['content'];?>
						<br><b>Post date: </b><em><small><?php echo $rowm['date'];?></small></em></p>
						</div>	
						<?php } else {?>
						<div class="alert alert-success fade in">
						<button data-dismiss="alert" class="close" type="button">×</button>
						<h4 class="alert-heading"><?php echo $rowm['subject'];?></h4>
						<p><?php echo $rowm['content'];?>
						<br><b>Post date: </b><em><small><?php echo $rowm['date'];?></small></em></p>
						</div>	
						<?php }}?>	
			  		
			  </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading"> <a href="#Two" data-parent="#accordion-widget" data-toggle="collapse" class="btn-invers accordion-toggle"> Add New Message </a> </div>
            <div class="accordion-body collapse" id="Two">
              <div class="accordion-inner"> 
			   <?php
if(array_key_exists('sendm', $_POST)){
date_default_timezone_set('Africa/Nairobi');
$send=$_SESSION['ec_userid'];
$proj=$_SESSION['project_id'];	$rec=$_POST['receiver'];
$sub=$_POST['subject'];			$cont=$_POST['content'];
$dat = date('d F, Y H:i');		$st='Active';
$conn=connect_to_db();

	 $condetails=mysqli_query($conn,"INSERT INTO message (date, sender, receiver, subject,content,status,projectid) VALUES
('$dat','$send', '$rec', '$sub', '$cont','1','$proj')") or die( mysqli_error($conn));
	
		
		if(!$condetails){echo "Error" .mysqli_error($conn); echo "</p>";}
		else{
		echo "<div class='alert alert-success fade in' align='center'><b>Message sent successfully!</b></div>"; }   			
}
?>
								<form class="well white-box " action="" method="post" enctype="multipart/form-data" name="theForm" onSubmit="return validateFormOnSubmit(this)">
									<fieldset>
										<div class="control-group">
											<label class="control-label" for="typehead">To</label>
											<div class="controls">
												<select data-placeholder="Your target receiver" class="chzn-select" multiple tabindex="15" style=" width:250px" name="receiver">
												<option value=""></option>
												<optgroup label="Support team">
												<option value="Support">Support Team</option>
												</optgroup>
												<optgroup label="Experts">
												<optgroup label="Expert team">
												<option value="<?php echo $row['clientid']; ?>">Client</option>
												</optgroup>
												<optgroup label="Experts">
												</optgroup>
											</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="input01">Subject</label>
											<div class="controls">
												<input type="text" class="span9" id="input01" name="subject">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Message</label>
											<div class="controls">
												<textarea class="span12" rows="10" cols="2" id="inbox-editor" name="content"></textarea>
											</div>
										</div>
										<div class="form-actions">
											<button class="btn btn-inverse" type="submit" name="sendm">Submit</button>
											<button class="btn btn-invers"> Cancel</button>
										</div>
									</fieldset>
								</form>
							
			  </div>
            </div>
          </div>
        </div>
						<!---------------------->
							
						</div>
					</div>
				</div>
			</div>
			<div class="span5">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5>Files</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
						<!------------------>
        <div id="accordion-widget" class="accordion boot-accordion">
          <div class="accordion-group">
            <div class="accordion-heading"> <a href="#3" data-parent="#accordion-widget" data-toggle="collapse" class="btn-invers accordion-toggle"> Attached Files </a> </div>
            <div class="accordion-body collapse in" id="3">
              <div class="accordion-inner"> 
			  		<?php 
					$querypf = "SELECT * FROM projectfile where projectid='".$_SESSION['project_id']."' order by projectfileid ASC";
					$querypf = mysqli_query($conn,$querypf) or die(mysqli_error($conn));
					?>
					<?php while ($rowpf = mysqli_fetch_array($querypf)) {
					if($rowpf > 0){?>
						<div class="alert alert-swarning fade in">
						<button data-dismiss="alert" class="close" type="button">x-</button>
						<table width="100%" border="0">
						  <tr>
							<td><?php echo $rowpf['document'];?></td>
							<td width="20%"><?php if($rowpf['type']=='application/pdf'){echo '<img src="projectfiles/pdf.png">';}else {echo'<img src="projectfiles/word.png">';}?></td>
						  </tr>
						</table>
						</div>	
						<?php } else {?>
						<div class="alert alert-error fade in">
						<button data-dismiss="alert" class="close" type="button">x-</button>
						<p>No file uploaded</p>
						</div>	
						<?php }}?>	
			  		
			  </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading"> <a href="#4" data-parent="#accordion-widget" data-toggle="collapse" class="btn-invers accordion-toggle"> Add New File </a> </div>
            <div class="accordion-body collapse" id="4">
              <div class="accordion-inner"> 
			   <?php
					if(array_key_exists('sendf', $_POST)){
					$send=$_SESSION['ec_userid'];
					$proj=$_SESSION['project_id'];	
					$sub=$_POST['subject'];			
					$dat = date('d F, Y H:i');	 			
					if ($_FILES['file1']['tmp_name'] == "") {  }
					else {
					$file1 = $_FILES['file1'];
					$file_type = $file1 ['type'];
					$file_size = $file1 ['size'];
					$file_name = $_FILES['file1']['name'];
					define ('MAX_FILE_SIZE', 300000);
					define('UPLOAD_DIR1', 'projectfiles/');
					$max1 = number_format(MAX_FILE_SIZE/1024, 1).'KB';
					$permitted = array('file1/pdf','file1/doc','file1/docx');
					$sizeOK = false;
					$typeOK = false;
					if ($_FILES['file1']['size'] > 0 && $_FILES['file1']['size'] <= MAX_FILE_SIZE) {$sizeOK = true;}
					// check that file is of a permitted MIME type
					foreach ($permitted as $type) {
					if ($type == $_FILES['file1']['type']) {
					$typeOK = true;
					break;}}
					$conn=connect_to_db();
					$conde=mysqli_query($conn,"INSERT INTO projectfile(projectid, name, type, size,document)VALUES('$proj','$file_name','$file_type','$file_size','$sub')");
							if(!$conde){
							echo "Please try again" .mysqli_error($conn); echo "</p>";}
					if ($sizeOK && $typeOK) {
					switch($_FILES['file1']['error']) {
					case 0:
					// make sure file of same name does not already exist
					if (!file_exists(UPLOAD_DIR.$file)) {
					// move the file to the upload folder and rename it
					$success = move_uploaded_file($_FILES['file1']['tmp_name'], UPLOAD_DIR.$file_name);
					}
					else {
					move_uploaded_file($_FILES['file1']['tmp_name'], UPLOAD_DIR.time().$file_name);
					}
					break;
					case 3:
					$result = "Error uploading $file. Please try again.";
					default:
					$result = "System error uploading $file. Contact webmaster.";
					}
					}
					elseif ($_FILES['file1']['error'] == 4) {
					$result = 'No file selected';
					}
					else {
					//$result = "$file cannot be uploaded. Maximum size: $max. Acceptable file types: gif, jpg, png.";
					}
					move_uploaded_file($_FILES['file1']['tmp_name'], UPLOAD_DIR1.$_FILES['file1']['name']);
					}			
					echo "<div class='alert alert-success fade in' align='center'><b>File sent successfully!</b></div>";		
										}
					
					
					?>
													<form class="well white-box " action="" method="post" enctype="multipart/form-data" name="theForm" onSubmit="return validateFormOnSubmit(this)">
									<fieldset>
										<div class="control-group">
											<label class="control-label" for="input01">File Name</label>
											<div class="controls">
												<input type="text" class="span9" id="input01" name="subject">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">File</label>
											<div class="controls">
												<input type="file" name="file1"/>
											</div>
										</div>
										<div class="form-actions">
											<button class="btn btn-inverse" type="submit" name="sendf"> Submit</button>
											<button class="btn btn-invers"> Cancel</button>
										</div>
									</fieldset>
								</form>
							
			  </div>
            </div>
          </div>
        </div>
						<!---------------------->
						</div>
					</div>
				</div>
			</div>
			</div>
</div>
				 <?php }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='my-order1') {?>
  <?php	$conn=connect_to_db();
		$query1 = "SELECT * FROM projects where projectid='".$_SESSION['project_id']."'";
	$query1 = mysqli_query($conn,$query1) or die(mysqli_error($conn));
	$row = mysqli_fetch_array($query1);
	$date = date('d',strtotime($row['deadline']));
	$month = date('M',strtotime($row['deadline']));
	$date1 = date('d',strtotime(date('Y-m-d')));?>
  			<div class="page-header">
      <h1>Project Number: #<?php echo $_SESSION['project_id'];?></h1>
    </div>
	 <div class="row-fluid">
			<div class="span3">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5> Take Note</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<h3>Time left</h3>
							<p>
							<div class="accordion-content">
							<ul class="event-list">
							<li>
								<div class="evnt-date"><?php echo $row['datein_d']; ?><span><?php echo $row['datein_m']; ?></span> </div>
								<div class="event-info"> <span><i class="icon-time"></i> <?php echo $row['timein']; ?></span>
								<p> <?php echo $row['title']; ?></p>
								</div>
							</li>
							<li>
								<div class="evnt-date"> <?php echo $date; ?><span><?php echo $month; ?></span> </div>
								<div class="event-info"> <span><i class="icon-time"></i> <?php echo $row['timein']; ?></span>
								<p> Please take note of this deadline </p>
								</div>
							</li>
							</ul>
							</div>
							</p>
							<p>	Price: <span class="label label-warning"> $<?php echo number_format($row['admin_price'],2); ?></span></p>
							<?php if($row['status']=='Pending'){
							echo '<p><a href="#" class="btn">Request to be reassigned</a></p>'; }?>
													
						</div>
					</div>
				</div>
			</div>
			<div class="span9">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5>Project Details</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<p>
							<table width="100%" border="0">
							  <tr>
								<td><h6>Category:</h6><?php echo $row['title']; ?></td>
								<td><h6>Subject:</h6><?php echo $row['title']; ?></td>
								<td><h6>Topic:</h6><?php echo $row['topic']; ?></td>
								</tr>
							  <tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								</tr>
							</table>
							</p>
							<h5>Project Description</h5>
							<p><?php echo $row['content']; ?>
						  </p>
						</div>
					</div>
				</div>
				<div class="span5">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5>Messages</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<p>
								<a href="#" class="success_t btn btn-success">Add new message</a>
							</p>
							<div class="alert alert-success fade in">
								<button data-dismiss="alert" class="close" type="button">×</button>
								<?php echo $row['content']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="span5">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5>Files</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
						<p>
						files
						</p>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	   <?php }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='invitations') {?>
  	<div class="page-header">
      <h1>My Invitations</h1>
    </div>
	<div class="alert alert-success fade in">
	<button data-dismiss="alert" class="close" type="button">×</button>
	<p>
	<strong>Well done!</strong> You successfully read this important alert message.</p>
	<p>
	Thank you in advance! Waiting for your repl	</p>
	<p>	best regards 	</p>
	<p>
	expertcage support Team
	<p><a href="#" class="alert_t btn btn-warning">Open Order</a></p>
	</div>
	
	<div class="alert alert-success fade in">
	<button data-dismiss="alert" class="close" type="button">×</button>
	<p>
	<strong>Well done!</strong> You successfully read this important alert message.</p>
	<p>
	Thank you in advance! Waiting for your reply
	</p>
	<p>	best regards 	</p>
	<p>
	expertcage support Team
	<p><a href="#" class="alert_t btn btn-warning">Open Order</a></p>
	</div>
	
		 <!---end of span6-->
<?php }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='messages') {?>
  <?php 
	$querym = "SELECT a.date, a.subject, a.status, a.receiver, a.sender, b.fname, b.lname, a.id FROM message a, user b where a.receiver='".$_SESSION['ec_userid']."' and a.sender=b.userid order by a.id DESC";
	$querym = mysqli_query($conn,$querym) or die(mysqli_error($conn));
	
	$querys = "SELECT a.date, a.subject, a.status, a.receiver, a.sender, b.fname, b.lname, a.id FROM message a, user b where a.sender='".$_SESSION['ec_userid']."' and a.receiver=b.userid order by a.id DESC";
	$querys = mysqli_query($conn,$querys) or die(mysqli_error($conn));
	
	$queryx = "SELECT * FROM message where sender='".$_SESSION['ec_userid']."' and receiver='Support' order by id DESC";
	$queryx = mysqli_query($conn,$queryx) or die(mysqli_error($conn));
	?>	
  	<div class="page-header">
      <h1>Message Box</h1>
    </div>
	<div class="row-fluid">
			<div class="span12">
				<div class="box-tab">
					<div class="tabbable">
						<!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab2" data-toggle="tab"><i class="black-icons mail"></i> Inbox</a></li>
							<li><a href="#tab3" data-toggle="tab"><i class="black-icons box_outgoing"></i> Sent box (Clients)</a></li>
							<li><a href="#tab4" data-toggle="tab"><i class="black-icons box_outgoing"></i> Sent box (Support Team)</a></li>
							<li ><a href="#tab1" data-toggle="tab"><i class="black-icons create_write"></i> Compose</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="tab1">
											 <?php
if(array_key_exists('sendm', $_POST)){
$send=$_SESSION['ec_userid'];		$rec=$_POST['receiver'];
$sub=$_POST['subject'];			$cont=$_POST['content'];
$dat = date('d F Y');		$st='Active';
$image = '';
$conn=connect_to_db();

	 $condetails=mysqli_query($conn,"INSERT INTO message (date, sender,receiver, subject,content) VALUES
('$dat','$send', '$rec', '$sub', '$cont')") or die( mysqli_error($conn));
	
		
		if(!$condetails){echo "Error" .mysqli_error($conn); echo "</p>";}
		else{
		echo "<div class='alert alert-success fade in' align='center'><b>Message sent successfully!</b></div>"; }   			
}
?>
								<form class="form-horizontal well white-box" action="" method="post" enctype="multipart/form-data" name="theForm" onSubmit="return validateFormOnSubmit(this)">
									<fieldset>
										<div class="control-group">
											<label class="control-label" for="typehead">To</label>
											<div class="controls">
												<select data-placeholder="Your target receiver" class="chzn-select" multiple tabindex="15" style=" width:470px" name="receiver">
												<option value=""></option>
												<optgroup label="Support team">
												<option value="Support">Support team</option>
												</optgroup>
												<optgroup label="Clients">
												<?php	$conn=connect_to_db();
												$queryu1 = "SELECT * FROM user where role='Client' order by fname ASC";
												$queryu1 = mysqli_query($conn,$queryu1) or die(mysqli_error($conn));	?>
												<?php while ($rowu1 = mysqli_fetch_array($queryu1)) {?>
												<option value="<?php echo $rowu1['userid'];?>"><?php echo $rowu1['fname'].' '.$rowu1['lname'];?></option><?php }?>
												</optgroup>
											</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="input01">Subject</label>
											<div class="controls">
												<input type="text" class="span8" id="input01" name="subject">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Attachmnet</label>
											<div class="controls">
												<input class="input-file" type="file">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Message</label>
											<div class="controls">
												<textarea class="span12" rows="10" cols="5" id="inbox-editor" name="content"></textarea>
											</div>
										</div>
										<div class="form-actions">
											<button class="btn btn-success" type="submit" name="sendm"><i class="icon-retweet icon-white"></i> Send & Save</button>
											<button class="btn btn-inverse"><i class=" icon-remove icon-white"></i> Cancel</button>
										</div>
									</fieldset>
								</form>
							</div>
							<div class="tab-pane active" id="tab2">
							
								<table class="data-tbl-inbox table table-bordered">
								<thead>
								<tr>
									<th class="check-list">#</th>
									<th class="col-half">Date</th>
									<th class="col-half">From</th>
									<th>Subject</th>
								</tr>
								</thead>
								<tbody>
								<?php $x1=1; while ($rowm = mysqli_fetch_array($querym)) {
								if($rowm['status']==0){$s1='<strong>'; $s2='</strong>';} else $s1='';$s2='';?>	
								<tr> 
									<td class="center tr_select "><?php echo $x1;?></td>
									<td><a href="freelancer?mes78987=<?php echo $rowm['id'];?>"><?php echo $s1.$rowm['date'].$s2;?></a></td>
									<td><a href="freelancer?mes78987=<?php echo $rowm['id'];?>"><?php echo $s1.$rowm['fname'].' '.$rowm['lname'].$s2;?></strong></a></td>
									<td><a href="freelancer?mes78987=<?php echo $rowm['id'];?>"><?php echo $s1.$rowm['subject'].$s2;?></a></td>
								</tr><?php $x1+=1; }?>
								</tbody>
								</table>
							</div>
							<div class="tab-pane" id="tab4">
								<table class="data-tbl-inbox table table-bordered">
								<thead>
								<tr>
									<th class="check-list">#</th>
									<th class="col-half">Date</th>
									<th class="col-half">To</th>
									<th>Subject</th>
								</tr>
								</thead>
								<tbody>
								<?php $y1=1; while ($rowx = mysqli_fetch_array($queryx)) {
								?>	
								<tr> 
									<td class="center tr_select "><?php echo $y1;?></td>
									<td><a href="client?mes78987=<?php echo $rows['id'];?>"><?php echo $rowx['date'];?></a></td>
									<td><a href="client?mes78987=<?php echo $rows['id'];?>">Support Team</a></td>
									<td><a href="client?mes78987=<?php echo $rows['id'];?>"><?php echo $rowx['subject'];?></a></td>
								</tr><?php $y1+=1; }?>
								</tbody>
								</table>
							</div>
							<div class="tab-pane" id="tab3">
								<table class="data-tbl-inbox table table-bordered">
								<thead>
								<tr>
									<th class="check-list">#</th>
									<th class="col-half">Date</th>
									<th class="col-half">To</th>
									<th>Subject</th>
								</tr>
								</thead>
								<tbody>
								<?php $y1=1; while ($rows = mysqli_fetch_array($querys)) {
								?>	
								<tr> 
									<td class="center tr_select "><?php echo $y1;?></td>
									<td><a href="client?mes78987=<?php echo $rows['id'];?>"><?php echo $rows['date'];?></a></td>
									<td><a href="client?mes78987=<?php echo $rows['id'];?>"><?php echo $rows['fname'].' '.$rows['lname'];?></a></td>
									<td><a href="client?mes78987=<?php echo $rows['id'];?>"><?php echo $rows['subject'];?></a></td>
								</tr><?php $y1+=1; }?>
								</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
<div class="row-fluid"></div>
	
		 <!---end of span6-->
		 <?php }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='message') {?>
  <?php 
	$querym = "SELECT a.date, a.subject, a.status, a.receiver, a.sender, b.fname, b.lname, a.id FROM message a, user b where a.receiver='".$_SESSION['ec_userid']."' and a.sender=b.userid order by a.id DESC";
	$querym = mysqli_query($conn,$querym) or die(mysqli_error($conn));
	
	$querys = "SELECT a.date, a.subject, a.status, a.receiver, a.sender, b.fname, b.lname, a.id FROM message a, user b where a.sender='".$_SESSION['ec_userid']."' and a.receiver=b.userid order by a.id DESC";
	$querys = mysqli_query($conn,$querys) or die(mysqli_error($conn));
	
	$queryv = "SELECT a.date, a.subject, a.status, a.content, a.receiver, a.sender, b.fname, b.lname, a.id FROM message a, user b where a.id='".$_SESSION['message_id']."'";
	$queryv = mysqli_query($conn,$queryv) or die(mysqli_error($conn));
	$rowv = mysqli_fetch_array($queryv);
	?>	
  	<div class="page-header">
      <h1>Message Box</h1>
    </div>
	<div class="row-fluid">
			<div class="span12">
				<div class="box-tab">
					<div class="tabbable">
						<!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab"><i class="black-icons create_write"></i> Message</a></li>
							<li><a href="#tab2" data-toggle="tab"><i class="black-icons mail"></i> Inbox</a></li>
							<li><a href="#tab3" data-toggle="tab"><i class="black-icons box_outgoing"></i> Sent box</a></li>
							<li><a href="freelancer?dashboard=messages"><i class="black-icons create_write"></i> Compose</a></li>
						</ul>
						<div class="tab-content">
						
							<div class="tab-pane active" id="tab1">

							<div class="page-header">
								<h1><?php echo $rowv['fname'].' '.$rowv['lname'];?> <small><?php echo $rowv['date'];?></small></h1>
							</div>
							
							<div class="page-header">
								<h1>Subject: <small><a href="#"><?php echo $rowv['subject'];?></a></small></h1>
							</div>
							<p><?php echo $rowv['content'];?></p>
							<p><a href="freelancer?message_r=<?php echo $rowv['id'];?>" class="alert_t btn btn-danger">Delete message</a></p>
							
							</div>
							<div class="tab-pane" id="tab2">
							
								<table class="data-tbl-inbox table table-bordered">
								<thead>
								<tr>
									<th class="check-list">#</th>
									<th class="col-half">Date</th>
									<th class="col-half">From</th>
									<th>Subject</th>
								</tr>
								</thead>
								<tbody>
								<?php $x1=1; while ($rowm = mysqli_fetch_array($querym)) {
								if($rowm['status']==0){$s1='<strong>'; $s2='</strong>';} else $s1='';$s2='';?>	
								<tr> 
									<td class="center tr_select "><?php echo $x1;?></td>
									<td><a href="freelancer?mes78987=<?php echo $rowm['id'];?>"><?php echo $s1.$rowm['date'].$s2;?></a></td>
									<td><a href="freelancer?mes78987=<?php echo $rowm['id'];?>"><?php echo $s1.$rowm['fname'].' '.$rowm['lname'].$s2;?></strong></a></td>
									<td><a href="freelancer?mes78987=<?php echo $rowm['id'];?>"><?php echo $s1.$rowm['subject'].$s2;?></a></td>
								</tr><?php $x1+=1; }?>
								</tbody>
								</table>
							</div>
							<div class="tab-pane" id="tab3">
								<table class="data-tbl-inbox table table-bordered">
								<thead>
								<tr>
									<th class="check-list">#</th>
									<th class="col-half">Date</th>
									<th class="col-half">To</th>
									<th>Subject</th>
								</tr>
								</thead>
								<tbody>
								<?php $y1=1; while ($rows = mysqli_fetch_array($querys)) {
								?>	
								<tr> 
									<td class="center tr_select "><?php echo $y1;?></td>
									<td><a href="freelancer?mes78987=<?php echo $rows['id'];?>"><?php echo $rows['date'];?></a></td>
									<td><a href="freelancer?mes78987=<?php echo $rows['id'];?>"><?php echo $rows['fname'].' '.$rows['lname'];?></strong></a></td>
									<td><a href="freelancer?mes78987=<?php echo $rows['id'];?>"><?php echo $rows['subject'];?></a></td>
								</tr><?php $y1+=1; }?>
								</tbody>
								</table>
							</div>
							<div class="tab-pane" id="tab4">
							klk;
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
<div class="row-fluid"></div>
	
		 <!---end of span6-->
	
		 <?php }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='payments') {?>
  <div class="page-header">
      <h1>Payment Statistics</h1>
</div>
  	<div class="row-fluid">
			<div class="span6">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5> Grid 6</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<h3>Header</h3>
							<p>
								Maecenas vel convallis nisi. Nunc cursus ultricies sem sed molestie. Donec sit amet magna est. Mauris eget lectus eu nulla.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="span6">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5> Grid 6</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<h3>Header</h3>
							<p>
								Maecenas vel convallis nisi. Nunc cursus ultricies sem sed molestie. Donec sit amet magna est. Mauris eget lectus eu nulla.
							</p>
						</div>
					</div>
				</div>
			</div>
</div>
		 <!---end of span6-->
		 <?php }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='profile') {?>
  		<ul class="breadcrumb">
			<li><a href="#">Home</a><span class="divider">&raquo;</span></li>
			<li class="active">My Profile</li>
		</ul>
	 <div class="row-fluid">
	 <?php  $conn=connect_to_db();	
	$query = "SELECT * FROM user a, country b where a.userid='".$_SESSION['ec_userid']." and a.country=b.country'";
	$query = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$row = mysqli_fetch_array($query);
	?>
			<div class="span3">
				<div class=" nonboxy-widget">
					<div class="widget-content">
						<div class="widget-box">
						<p align="center"><h4 align="center"><?php echo $row['role']; ?></h4></p>
							<p align="center"> 
							<?php if($row['photo']!=''){ echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo']) .'" width="151" height="180" />';} else {echo '<div align="center"><img src="images/comment-avatar1.gif" width="170" height="170" /></div>';} ?>
							</p>
							
							<p align="center"><h4 align="center"><?php echo $row['lname']; ?></h4></p>
							<p align="center"><h4 align="center"><?php echo $row['fname']; ?></h4></p>
							
						</div>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5> Personal Information</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<p>
							<table width="100%" border="0" cellpadding="4" cellspacing="4">
  <tr>
    <td width="37%" align="right" valign="middle"><h6 align="left">User Number:</h6></td>
    <td width="63%"><?php echo $row['userid']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">First Name: </h6></td>
    <td><?php echo $row['fname']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Last Name: </h6></td>
    <td><?php echo $row['lname']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Email: </h6></td>
    <td><?php echo $row['email']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Country:</h6></td>
    <td><?php echo $row['name']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">City:</h6></td>
    <td><?php echo $row['city']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Phone:</h6></td>
    <td><?php $num="+".$row['phone1']; $ph="(".substr($num,0,4).") ".substr($num,4,3)."-".substr($num,7,3)."".substr($num,10,3);echo $ph;?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Academic Level: </h6></td>
    <td><?php echo $row['userid']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Status:</h6></td>
    <td><?php echo $row['status']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Gender:</h6></td>
    <td><?php echo $row['sex']; ?></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Role Played: </h6></td>
    <td>Expert / consultant</td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h6 align="left">Payment Method: </h6></td>
    <td><?php echo $row['role']; ?></td>
  </tr>
</table>

							</p></div>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5> Fields of Proficiency</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<p class="lead">
						<?php  $conn=connect_to_db();	
					$query = "SELECT * FROM client_discipline a, discipline b where a.userid='".$_SESSION['ec_userid']."' 
					and a.discipline=b.disciplineid";
					$query = mysqli_query($conn,$query) or die(mysqli_error($conn));?>
							<ul class="tick_icn">
							<?php while ($row1 = mysqli_fetch_array($query)) { ?>
								<li><?php echo $row1['name']; ?></li>
							<?php }?>
							</ul>
	
							</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="span4">
				<div class=" nonboxy-widget">
					<div class="widget-head">
						<h5>Description About me</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
						<p>
						<?php echo $row['description']; ?>
						</p>
						</div>
					</div>
				</div>
			</div>
</div>
	  <!---end of span6-->
<?php }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='settings') {?>
<div class="page-header">
      <h1>Account settings</h1>
    </div>
	<div class="row-fluid">
			<div class="span12">
			<?php
if(array_key_exists('sendp', $_POST)){
		$send=$_SESSION['ec_userid'];
		$user1=$_POST['username1'];
		$user2=$_POST['username2'];
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
		$pass3=$_POST['pass3'];
	if($pass2!=$pass3){
		echo "<div class='alert alert fade in' align='center'>Your <strong>passwords don't match</strong>. Please try again</div>";
	}
	else{
	$conn=connect_to_db();
	$sql1 = mysqli_query($conn,"SELECT * FROM user where userid='".$_SESSION['ec_userid']."'") or die(mysqli_error($conn));
	$numRow=mysqli_num_rows($sql1);
	$row = mysqli_fetch_assoc( $sql1);	
		$us=$row['username'];
		$ps=$row['password'];
		if($us!=$user1 || $ps!=md5($pass1)){
		echo "<div class='alert alert-error fade in' align='center'><b>Incorrect </b>Username or Password! Please try again..</div>";
		}
		else{
		$condetails=mysqli_query($conn,"UPDATE user set username='$user2',password='".md5($pass2)."' where userid='".$_SESSION['ec_userid']."'");
			if(!$condetails){
			echo "Please try again" .mysqli_error($conn); echo "</p>";}
			else{
			echo "<div class='alert alert-success fade in' align='center'><b>Username & password changed successfully.</div>";
			}
        }
	}
}
		//echo "<div class='alert alert-success fade in' align='center'><b>Project posted successfully!</b></div>"; }   			
?>
				<div class="box-tab">
					<div class="tabbable">
						<!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab"><i class="black-icons pencil"></i> Post</a></li>
							<li><a href="#tab2" data-toggle="tab"><i class="black-icons document"></i> Preview</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
							
								<form class="form-horizontal ucase" action="" method="post" enctype="multipart/form-data" name="theForm" onSubmit="return validateFormOnSubmit(this)">
							
									<fieldset>
										<div class="control-group">
											<label class="control-label"></label>
											<div class="controls">
												<h4>Current Settings</h4>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="input01">Current Username:</label>
											<div class="controls">
										<input type="text" class="input-xlarge text-tip" id="us1" title="Current Username" name="username1">
												<p class="help-block">Provide the current username</p>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="input01">Current Password</label>
											<div class="controls">
											<input type="password" class="input-xlarge text-tip" id="ps1" title="Current password" name="pass1">
												<p class="help-block">Provide the current password</p>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label"></label>
											<div class="controls">
												<h4>New Settings</h4>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="input01">New Username:</label>
											<div class="controls">
										<input type="text" class="input-xlarge text-tip" id="us2" title="New Username" name="username2">
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="input01">New Password</label>
											<div class="controls">
											<input type="password" class="input-xlarge text-tip" id="ps2" title="New password" name="pass2">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="input01">Confirm Password</label>
											<div class="controls">
											<input type="password" class="input-xlarge text-tip" id="ps3" title="Confirm password" name="pass3">
											</div>
										</div>
										
										<div class="form-actions">
										<button class="btn btn-success" type="submit" name="sendp"><i class="icon-retweet icon-white"></i> Save changes</button>
											<button class="btn btn-warning">Cancel</button>
										</div>
									</fieldset>
<script language="JavaScript1.2" type="text/javascript">
function validateFormOnSubmit(theForm) { var reason = "";
  reason += validateEmpty(theForm.us1);
  reason += validateEmpty(theForm.ps1);
  reason += validateUsername(theForm.us2);
  reason += validatePassword(theForm.ps2);
  reason += validatePassword(theForm.ps3);
   
  	if (reason != "") {alert("Some fields need correction:\n" + reason);
    	return false;
		var r=document.forms["theForm"]["pass1"].value;
		var y=document.forms["theForm"]["pass2"].value;
  	}
  return true;
}

function validateEmpty(fld) {
    var error = "";
    if (fld.value.length == 0) {
        fld.style.background = 'Yellow'; 
        error = "The required field has not been filled in.\n"    } 
	else { fld.style.background = 'White';    }
    return error;  
}
function validateEmpty1(fld) {
    var error = "";
    if (fld.value == 'Select') {
        fld.style.background = 'Yellow'; 
        error = "Select a value.\n"
    } else { fld.style.background = 'White';  }
    return error;  
}
function validateUsername(fld) {
   var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores
    if (fld.value == "") {
        fld.style.background = 'Yellow'; 
       error = "You didn't enter a username.\n";
    } else if ((fld.value.length < 5) || (fld.value.length > 15)) {
       fld.style.background = 'Yellow'; 
        error = "The username is the wrong length.\n";
    } else if (illegalChars.test(fld.value)) {
        fld.style.background = 'Yellow'; 
        error = "The username contains illegal characters.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}
function validatePassword(fld) {
   var error = "";
    var illegalChars = /[\W_]/; // allow only letters and numbers 
    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter a password.\n";
    } else if ((fld.value.length < 8) || (fld.value.length > 15)) {
        error = "The password should be of atleast 8-15 length of characters. \n";
        fld.style.background = 'Yellow';
    } else if (!theForm.ps2.value==theForm.ps3.value) {
        error = "Your passwords dont match.\n";
        fld.style.background = 'Yellow';
    } else {
        fld.style.background = 'White';
    }
   return error;
} 
function trim(s) {  return s.replace(/^\s+|\s+$/, ''); }

function validateEmail(fld) {
    var error="";
    var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
   
    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter an email address.\n";
    } else if (!emailFilter.test(tfld)) {              //test email for illegal characters
        fld.style.background = 'Yellow';
        error = "Please enter a valid email address.\n";
    } else if (fld.value.match(illegalChars)) {
        fld.style.background = 'Yellow';
        error = "The email address contains illegal characters.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}
function validatePhone(fld) {
    var error = "";
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');    
   if (fld.value == "") {
        error = "You didn't enter a phone number.\n";
        fld.style.background = 'Yellow';
    } else if (isNaN(parseInt(stripped))) {
        error = "The phone number contains illegal characters.\n";
        fld.style.background = 'Yellow';
    } else if (!(stripped.length == 10)) {
        error = "The phone number is of wrong length. 781 333 333.\n";
        fld.style.background = 'Yellow';
    }
    return error;
}
</script>	
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
		 <?php }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($_GET['dashboard']=='category') {}?>
	</div>
</div>

</body>
</html>
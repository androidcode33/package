<?php session_start();?>
<?php include('includes/db_connection.php');
	$conn=connect_to_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expertcage.com</title>
    <link rel="stylesheet" type="text/css" href="css2/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css2/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="css2/style.css" />
    <link rel="stylesheet" type="text/css" href="css2/pluton.css" />
    <link rel="stylesheet" type="text/css" href="css2/jquery.cslider.css" />
    <link rel="stylesheet" type="text/css" href="css2/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="css2/animate.css" />
    <link rel="shortcut icon" href="images/icon/favicon.ico">
	<script type="text/javascript">
		function validateForm(){
			var reason = "";
			reason += validateFname(theForm.fname);
			reason += validateLname(theForm.lname);
			reason += validateGender(theForm.gender);
			reason += validateCountry(theForm.country);
			reason += validateCity(theForm.city);
			reason += validateEmail(theForm.email);
			reason += validatePhone(theForm.phone);
			reason += validatePassword1(theForm.password1);
			reason += validatePassword2(theForm.password2);
					   
			if (reason != "") {	return false;}
			return true;
			}
			
			function validateFname(fld) {
				var error = "";
				if (fld.value.length == 0) {  
					$('#err-fname').show(500); $('#err-fname').delay(4000); $('#err-fname').animate({
                	height: 'toggle'}, 500, function () {  // Animation complete.
            		});	error = "The required field has not been filled in.\n"
            		  } 
				else { $('#err-fname').hide(500);   }
				return error;  
			}
			function validateLname(fld) {
				var error = "";
				if (fld.value.length == 0) {  
					$('#err-lname').show(500); $('#err-lname').delay(4000); $('#err-lname').animate({
                	height: 'toggle'}, 500, function () {  // Animation complete.
            		});	error = "The required field has not been filled in.\n"
            		  } 
				else { $('#err-lname').hide(500);   }
				return error;  
			}
			function validateGender(fld) {
				var error = "";
				if (fld.value == 'Select') {  
					$('#err-gender').show(500); $('#err-gender').delay(4000); $('#err-gender').animate({
                	height: 'toggle'}, 500, function () {  // Animation complete.
            		});	error = "The required field has not been filled in.\n"
            		  } 
				else { $('#err-gender').hide(500);   }
				return error;  
			}
			function validateCountry(fld) {
				var error = "";
				if (fld.value == 'Select') {  
					$('#err-country').show(500); $('#err-country').delay(4000); $('#err-country').animate({
                	height: 'toggle'}, 500, function () {  // Animation complete.
            		});	error = "The required field has not been filled in.\n"
            		  } 
				else { $('#err-country').hide(500);   }
				return error;  
			}
			function validateCity(fld) {
				var error = "";
				if (fld.value.length == 0) {  
					$('#err-city').show(500); $('#err-city').delay(4000); $('#err-city').animate({
                	height: 'toggle'}, 500, function () {  // Animation complete.
            		});	error = "The required field has not been filled in.\n"
            		  } 
				else { $('#err-city').hide(500);   }
				return error;  
			}
			function validatePhone(fld) {
				var error = "";
				if (fld.value.length < 7) {  
					$('#err-phone').show(500); $('#err-phone').delay(4000); $('#err-phone').animate({
                	height: 'toggle'}, 500, function () {  // Animation complete.
            		});	error = "The required field has not been filled in.\n"
            		  } 
				else { $('#err-phone').hide(500);   }
				return error;  
			}
			function validatePassword1(fld) {
				var error = "";
				if (fld.value.length == 0) {  
					$('#err-pass1').show(500); $('#err-pass1').delay(4000); $('#err-pass1').animate({
                	height: 'toggle'}, 500, function () {  // Animation complete.
            		});	error = "The required field has not been filled in.\n"
            		  } 
				else { $('#err-pass1').hide(500);   }
				return error;  
			}
			function validatePassword2(fld) {
				var error = "";
				if (fld.value.length == 0) {  
					$('#err-pass2').show(500); $('#err-pass2').delay(4000); $('#err-pass2').animate({
                	height: 'toggle'}, 500, function () {  // Animation complete.
            		});	error = "The required field has not been filled in.\n"
            		  } 
				else { $('#err-pass2').hide(500);   }
				return error;  
			}
			function validateEmail(fld) {
				var error = "";
				var emailCompare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
				if (fld.value == '' || !emailCompare.test(fld.value)) { 
					$('#err-email').show(500);
            		$('#err-email').delay(4000);
            		$('#err-email').animate({
                	height: 'toggle'
            		}, 500, function () {    // Animation complete.
            		});
				} else { $('#err-email').hide(500);
				 }
				return error;  
			}
		</script>
</head>
<body>
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a href="index" class="brand"><img src="images/logo.png" width="120" height="40" alt="Logo" /></a>
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><img src="images/icon-menu.png"></button>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav" id="top-navigation">
                        <li><a href="index">Home</a></li>
						<li><a href="aboutus">About us</a></li>
                        <li><a href="how-it-works">How it works</a></li>
                        <li><a href="payments">payments</a></li>
                        <li class="active"><a href="signup">sign up</a></li>
                        <li><a href="faq">faq</a></li>
						<li><a href="login">login</a></li>
                    </ul>
                </div> <!-- End main navigation -->
            </div>
        </div>
    </div>
    
    <!-- Portfolio section start -->
    <div class="section secondary-section " id="portfolio">
        <div class="triangle"></div>
        <div class="container">
			<div class="row-fluid">
             <div class="span3">
				<div class="title2">Areas of Expertise</div>
                <h5>If you have a degree or experience in any of the following fields, feel free to apply.</h5>
					<?php 	$query1 = "SELECT * FROM discipline limit 10"; $query1 = mysqli_query($conn,$query1) or die(mysqli_error());?>
				<ul class="clip_icn">
					<?php while($row1 = mysqli_fetch_array($query1)){?>
					<li><?php echo $row1['name']; ?></li>
					<?php } ?>
				</ul>
				<p>Professional experience is appreciated, since we do provide non-academic writing jobs.</p>
			</div>
				
			<div class="span6">	
				<div class="title2">Step #3 (Expert Account)  </div>
				<?php 
									$conn=connect_to_db();
									
						 if(array_key_exists('send', $_POST)){
								$user=$_SESSION['ec_userid'];
								$date=date('d F Y ');
								$desc=mysqli_real_escape_string($_POST['desc']);
								$image = '';
								$row_data = array();
						   foreach($_POST['d'] as $row=>$sid) {
								$d=mysqli_real_escape_string($sid);
								mysqli_query($conn,"INSERT INTO client_discipline(userid, discipline, date)VALUES('$user','$d','$date')") or die(mysqli_error());
								}
								$conde=mysqli_query($conn,"update user set description='$desc', role='Pending' where userid='".$_SESSION['ec_userid']."'");
								if(!$conde){
								echo "Please try again" .mysqli_error(); echo "</p>";}
								else{
								//echo "<div class='success2' align='center'>updated successfully...</div>";
											//sign_upthanks.php
										}
								
								//photo
								if ($_FILES['file3']['tmp_name'] == "") {  }
						else{
						if ( !preg_match( '/gif|png|x-png|jpeg|pdf|doc|docx/', $_FILES['file3']['type']) ) {
						   die('<p>Only browser compatible images allowed</p>');
						} else if ( $_FILES['file3']['size'] > 163846 ) {
						   die('<p>Sorry file too large</p>');
						// Connect to database
						} 
						// Copy image file into a variable
						 else if ( !($handle = fopen ($_FILES['file3']['tmp_name'], "r")) ) {
						   die('<p>Error opening temp file</p>');
						} else if ( !($image = fread ($handle, filesize($_FILES['file3']['tmp_name']))) ) {
						   die('<p>Error reading temp file</p>');
						} else {
						   fclose ($handle);
						   // Commit image to the database
						   $image = mysqli_real_escape_string($image);
						   $conde=mysqli_query($conn,"update user set photo='$image' where userid='".$_SESSION['ec_userid']."'");
						}}
								
								//cv documents
						if ($_FILES['file1']['tmp_name'] == "") {  }
						else {
						$file = $_FILES['file1'];
						$file_type = $file ['type'];
						$file_size = $file ['size'];
						$file_name = $_FILES['file1']['name'];
						define ('MAX_FILE_SIZE', 300000);
						define('UPLOAD_DIR', 'userdocs/');
						$max = number_format(MAX_FILE_SIZE/1024, 1).'KB';
						$permitted = array('file1/gif','file1/jpeg','file1/pjpeg','file1/png','file1/pdf','file1/doc','file1/docx');
						$sizeOK = false;
						$typeOK = false;
						if ($_FILES['file1']['size'] > 0 && $_FILES['file1']['size'] <= 
						MAX_FILE_SIZE) {
						$sizeOK = true;
						}
						// check that file is of a permitted MIME type
						foreach ($permitted as $type) {
						if ($type == $_FILES['file1']['type']) {
						$typeOK = true;
						break;}}
						$conn=connect_to_db();
						//$success = // or die(mysqli_error());
						$conde=mysqli_query($conn,"INSERT INTO userdocs(userid, name, type, size)VALUES('$user','$file_name','$file_type','$file_size')");
								if(!$conde){
								echo "Please try again" .mysqli_error(); echo "</p>";}
								else{
								//echo "<div class='success2' align='center'>updated successfully...</div>";
											
										}
						if ($sizeOK && $typeOK) {
						switch($_FILES['file1']['error']) {
						case 0:
						// make sure file of same name does not already exist
						if (!file_exists(UPLOAD_DIR.$file)) {
						// move the file to the upload folder and rename it
						$success = move_uploaded_file($_FILES['file1']['tmp_name'], UPLOAD_DIR.$new_file_name);
						}
						else {
						move_uploaded_file($_FILES['file1']['tmp_name'], UPLOAD_DIR.time().$new_file_name);
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
						move_uploaded_file($_FILES['file1']['tmp_name'], UPLOAD_DIR.$_FILES['file1']['name']);
						}
						/*------------------------------------------------------------------------------------------------------------------------		
						//academic documents
						--------------------------------------------------------------------------------------------------------------------------*/
						if ($_FILES['file2']['tmp_name'] == "") {  }
						else {
						$file1 = $_FILES['file2'];
						$file_type1 = $file1 ['type'];
						$file_size1 = $file1 ['size'];
						$file_name1 = $_FILES['file2']['name'];
						define ('MAX_FILE_SIZE1', 300000);
						define('UPLOAD_DIR1', 'usercvs/');
						$max1 = number_format(MAX_FILE_SIZE1/1024, 1).'KB';
						$permitted = array('file1/pdf','file1/doc','file1/docx');
						$sizeOK1 = false;
						$typeOK1 = false;
						if ($_FILES['file2']['size'] > 0 && $_FILES['file2']['size'] <= 
						MAX_FILE_SIZE1) {
						$sizeOK1 = true;
						}
						// check that file is of a permitted MIME type
						foreach ($permitted as $type) {
						if ($type == $_FILES['file2']['type']) {
						$typeOK1 = true;
						break;}}
						$conn=connect_to_db();
						$conde=mysqli_query($conn,"INSERT INTO usercvs(userid, name, type, size)VALUES('$user','$file_name1','$file_type1','$file_size1')");
								if(!$conde){
								echo "Please try again" .mysqli_error(); echo "</p>";}
						if ($sizeOK1 && $typeOK1) {
						switch($_FILES['file2']['error']) {
						case 0:
						// make sure file of same name does not already exist
						if (!file_exists(UPLOAD_DIR1.$file)) {
						// move the file to the upload folder and rename it
						$success = move_uploaded_file($_FILES['file2']['tmp_name'], UPLOAD_DIR1.$file_name);
						}
						else {
						move_uploaded_file($_FILES['file2']['tmp_name'], UPLOAD_DIR1.time().$file_name);
						}
						break;
						case 3:
						$result = "Error uploading $file. Please try again.";
						default:
						$result = "System error uploading $file. Contact webmaster.";
						}
						}
						elseif ($_FILES['file2']['error'] == 4) {
						$result = 'No file selected';
						}
						else {
						//$result = "$file cannot be uploaded. Maximum size: $max. Acceptable file types: gif, jpg, png.";
						}
						move_uploaded_file($_FILES['file2']['tmp_name'], UPLOAD_DIR1.$_FILES['file2']['name']);
						}			
										
										echo '<meta HTTP-EQUIV="REFRESH" content="0; url=sign_upthanks">';
										//header('Location: sign_upthanks.php');		
											}
						
						
						?>
				<form class="form-horizontal" enctype="multipart/form-data" action="" method="post" name="theForm" id="theForm" onSubmit="return validateForm(this)">
					<fieldset>
					<p>Please provide the following details</p>
					<div class="control-group">
						<label class="control-label req">Field of Expertise :</label>
                       	<div class="controls">Select 5-10 fields you are proficient in:
                       		<?php $sqls = mysqli_query($conn,"SELECT * FROM discipline ") or die(mysqli_error());
								while($rows = mysqli_fetch_array( $sqls)){	
								?><br>
								  <input type="checkbox" name="d[]"  value="<?php echo $rows['disciplineid'];?>" id="disc" />
								  <?php echo $rows['name'];?> 
								  <?php }?>
                        	<div class="error left-align" id="err-fname">Please enter first name.</div>
                        </div>
                   	</div>
					<div class="control-group">
						<label class="control-label req">Brief description of the selected fields of expertise:</label>
                       	<div class="controls">
							<textarea class="span12" id="desc" name="desc" placeholder="* Comments..."></textarea>
                        	<div class="error left-align" id="err-lname">Please enter last name.</div>
                        </div>
                   	</div>
					
					<div class="control-group">
						<label class="control-label req">Academic documents:</label>
                       	<div class="controls">Pdf/word format, rename the file as <?php  echo $_SESSION['ec_userid'].'_'.$_SESSION['print'];?>_ad
                       		<input class="input-file" name="file1" type="file">
                            <div class="error left-align" id="err-country">Please select country.</div>
                        </div>
                   	</div>
					<div class="control-group">
						<label class="control-label req">Your CV or Resume:</label>
                       	<div class="controls">Pdf/word format, rename the file as <?php  echo $_SESSION['ec_userid'].'_'.$_SESSION['print'];?>_cv
                       		<input name="file2" type="file">
                        	<div class="error left-align" id="err-city">Please enter your city.</div>
                        </div>
                   	</div>
					<div class="control-group">
						<label class="control-label req">Passport photo:</label>
                       	<div class="controls">
                       		<input name="file3" type="file">
                        	<div class="error left-align" id="err-email">Please enter valid email.</div>
                        </div>
                   	</div>
					<div class="control-group">    
                       	<div class="controls">
                	        <button type="submit" class="message-btn" name="send">Submit details</button>
                       	</div>
                    </div>
					</fieldset>
                </form>
			</div>
			<div class="span3" align="justify">
				<div class="title2">Navigation Menu</div>
                <div id="menu14">
					<ul>
						<li><a href="get-started">Get Started with expertcage</a></li>
						<li><a href="how-it-works">How expertcage Works</a></li>
						<li><a href="why-expertcage">Why Expertcage</a></li>
						<li><a href="payments">Methodds of Payments</a></li>
						<li><a href="areas">Areas of Expertise</a></li>
						<li><a href="projects">Recent Projects</a></li>
						<li><a href="benefits">Our Benefits</a></li>
						<li><a href="faq">Answers to your questions</a></li>
					</ul>
				</div>
			</div>
			</div>
        </div>
    </div>
    <!-- Portfolio section end -->
	
	<?php include('footer.php');?>
    
        <!-- ScrollUp button start -->
        <div class="scrollup"><a href="#"><img src="images/icon-top.png"></a></div>
        <script src="js2/jquery.js"></script>
        <script type="text/javascript" src="js2/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js2/bootstrap.js"></script>
        <script type="text/javascript" src="js2/modernizr.custom.js"></script>
        <script type="text/javascript" src="js2/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js2/jquery.cslider.js"></script>
        <script type="text/javascript" src="js2/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js2/jquery.inview.js"></script>
    <script type="text/javascript" src="js2/app.js"></script>

</body>
</html>
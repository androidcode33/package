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
		<script type="text/javascript">
		function setValues2() {
		var tel = document.getElementById("phone");
		var contry= document.getElementById("country");
		if(country.value ==1){tel.value =256;}
		else if(country.value==2){tel.value =254;}
		else if(country.value==3){tel.value =93;}
		else if(country.value==4){tel.value =355;}
		else if(country.value==5){tel.value =213;}
		else if(country.value==6){tel.value =244;}
		else if(country.value==7){tel.value =54;}
		else if(country.value==8){tel.value =374;}
		else if(country.value==9){tel.value =61;}
		else if(country.value==10){tel.value =43;}
		else if(country.value==11){tel.value =994;}
		else if(country.value==12){tel.value =375;}
		else if(country.value==13){tel.value =32;}
		else if(country.value==14){tel.value =229;}
		else if(country.value==15){tel.value =242;}
		else if(country.value==16){tel.value =591;}
		else if(country.value==17){tel.value =267;}
		else if(country.value==18){tel.value =55;}
		else if(country.value==19){tel.value =359;}
		else if(country.value==20){tel.value =226;}
		else if(country.value==21){tel.value =257;}
		else if(country.value==22){tel.value =855;}
		else if(country.value==23){tel.value =237;}
		else if(country.value==24){tel.value =238;}
		else if(country.value==25){tel.value =236;}
		else if(country.value==26){tel.value =235;}
		else if(country.value==27){tel.value =56;}
		else if(country.value==28){tel.value =86;}
		else if(country.value==29){tel.value =57;}
		else if(country.value==30){tel.value =269;}
		else if(country.value==31){tel.value =243;}
		else if(country.value==32){tel.value =506;}
		else if(country.value==33){tel.value =225;}
		else if(country.value==34){tel.value =385;}
		else if(country.value==35){tel.value =53;}
		else if(country.value==36){tel.value =357;}
		else if(country.value==37){tel.value =420;}
		else if(country.value==38){tel.value =45;}
		else if(country.value==39){tel.value =593;}
		else if(country.value==40){tel.value =20;}
		else if(country.value==41){tel.value =240;}
		else if(country.value==42){tel.value =291;}
		else if(country.value==43){tel.value =372;}
		else if(country.value==44){tel.value =251;}
		else if(country.value==45){tel.value =358;}
		else if(country.value==46){tel.value =33;}
		else if(country.value==47){tel.value =241;}
		else if(country.value==48){tel.value =220;}
		else if(country.value==49){tel.value =995;}
		else if(country.value==50){tel.value =49;}
		else if(country.value==51){tel.value =233;}
		else if(country.value==52){tel.value =30;}
		else if(country.value==53){tel.value =299;}
		else if(country.value==54){tel.value =224;}
		else if(country.value==55){tel.value =504;}
		else if(country.value==56){tel.value =852;}
		else if(country.value==57){tel.value =36;}
		else if(country.value==58){tel.value =354;}
		else if(country.value==59){tel.value =91;}
		else if(country.value==60){tel.value =98;}
		else if(country.value==61){tel.value =964;}
		else if(country.value==62){tel.value =964;}
		else if(country.value==63){tel.value =353;}
		else if(country.value==64){tel.value =972;}
		else if(country.value==65){tel.value =39;}
		else if(country.value==66){tel.value =81;}
		else if(country.value==67){tel.value =254;}
		else if(country.value==68){tel.value =371;}
		else if(country.value==69){tel.value =961;}
		else if(country.value==70){tel.value =266;}
		else if(country.value==71){tel.value =231;}
		else if(country.value==72){tel.value =218;}
		else if(country.value==73){tel.value =370;}
		else if(country.value==74){tel.value =352;}
		else if(country.value==75){tel.value =389;}
		else if(country.value==76){tel.value =265;}
		else if(country.value==77){tel.value =60;}
		else if(country.value==78){tel.value =223;}
		else if(country.value==79){tel.value =356;}
		else if(country.value==80){tel.value =377;}
		else if(country.value==81){tel.value =382;}
		else if(country.value==82){tel.value =212;}
		else if(country.value==83){tel.value =258;}
		else if(country.value==84){tel.value =264;}
		else if(country.value==85){tel.value =31;}
		else if(country.value==86){tel.value =64;}
		else if(country.value==87){tel.value =227;}
		else if(country.value==88){tel.value =234;}
		else if(country.value==89){tel.value =47;}
		else if(country.value==90){tel.value =92;}
		else if(country.value==91){tel.value =595;}
		else if(country.value==92){tel.value =51;}
		else if(country.value==93){tel.value =63;}
		else if(country.value==94){tel.value =48;}
		else if(country.value==95){tel.value =351;}
		else if(country.value==96){tel.value =974;}
		else if(country.value==97){tel.value =40;}
		else if(country.value==98){tel.value =7;}
		else if(country.value==99){tel.value =250;}
		else if(country.value==100){tel.value =966;}
		else if(country.value==101){tel.value =221;}
		else if(country.value==102){tel.value =381;}
		else if(country.value==103){tel.value =232;}
		else if(country.value==104){tel.value =65;}
		else if(country.value==105){tel.value =421;}
		else if(country.value==106){tel.value =386;}
		else if(country.value==107){tel.value =252;}
		else if(country.value==108){tel.value =27;}
		else if(country.value==109){tel.value =211;}
		else if(country.value==110){tel.value =34;}
		else if(country.value==111){tel.value =249;}
		else if(country.value==112){tel.value =597;}
		else if(country.value==113){tel.value =268;}
		else if(country.value==114){tel.value =46;}
		else if(country.value==115){tel.value =41;}
		else if(country.value==116){tel.value =963;}
		else if(country.value==117){tel.value =886;}
		else if(country.value==118){tel.value =255;}
		else if(country.value==119){tel.value =66;}
		else if(country.value==120){tel.value =228;}
		else if(country.value==121){tel.value =216;}
		else if(country.value==122){tel.value =90;}
		else if(country.value==123){tel.value =688;}
		else if(country.value==124){tel.value =380;}
		else if(country.value==125){tel.value =971;}
		else if(country.value==126){tel.value =44;}
		else if(country.value==127){tel.value =1;}
		else if(country.value==128){tel.value =598;}
		else if(country.value==129){tel.value =58;}
		else if(country.value==130){tel.value =960;}
		else if(country.value==131){tel.value =260;}
		else if(country.value==132){tel.value =255;}
		else if(country.value==133){tel.value =263;}
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
                        <li class="active"><a href="signup">register</a></li>
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
					<?php 	$query1 = "SELECT * FROM discipline order by name ASC limit 20"; $query1 = mysqli_query($conn,$query1) or die(mysqli_error());?>
				<ul class="clip_icn">
					<?php while($row1 = mysqli_fetch_array($query1)){?>
					<li><?php echo $row1['name']; ?></li>
					<?php } ?>
				</ul>
				<p>Professional experience is appreciated, since we do provide non-academic writing jobs.</p>
			</div>
				
			<div class="span6">	
				<div class="title2"> Create Free Expert Account </div>
				<form class="form-horizontal" enctype="multipart/form-data" action="" method="post" name="theForm" id="theForm" onSubmit="return validateForm(this)">
					<fieldset>
					<?php		$conn=connect_to_db();
								if(array_key_exists('send', $_POST)){
								$fn=mysqli_real_escape_string($conn, $_POST['fname']);
								$ln=mysqli_real_escape_string($conn, $conn, $_POST['lname']);
								$sex=mysqli_real_escape_string($conn, $_POST['gender']);
								$country=mysqli_real_escape_string($conn, $_POST['country']);
								$city=mysqli_real_escape_string($conn, $_POST['city']);
								$email=mysqli_real_escape_string($conn, $_POST['email']);
								$pass=mysqli_real_escape_string($conn, $_POST['password1']);
								$pass2=mysqli_real_escape_string($conn, $_POST['password2']);
								$phone1=mysqli_real_escape_string($conn, $_POST['phone']);
								$date=date('d-m-Y');
									$hash_code= md5( rand(0,1000) );
										$sql1 = mysqli_query($conn,"SELECT * FROM user where email='$email'") or die(mysqli_error()); 
									$row = mysqli_fetch_assoc( $sql1);
									$numRow=mysqli_num_rows($sql1);	
									if($pass!=$pass2){ echo '<div class="alert alert-error"><strong>Error! </strong> Your password does not match.</div>';}
									elseif($numRow>0){
										echo '<div id="errorSend" class="alert alert-error"><strong>Error! </strong> 
										The email '.$email.' is used. Please use any other email, each email is entitled to one account!</div>';
										}
									else{	
										$condetails=mysqli_query($conn,"INSERT INTO user (fname, lname, sex, country, city, email, password, phone1, role, status, date, approval_status,hash_code) values('$fn', '$ln', '$sex', '$country', '$city', '$email', '".md5($pass)."', '$phone1', 'Applicant', 'Pending', '$date','Pending','$hash_code')");
								 
										if(!$condetails){
										echo "Please try again" .mysqli_error(); echo "</p>";}
										else{
											$to      = $email; // Send email to our user
											$subject = 'Signup | Verification'; // Give the email a subject
											$message = '
 
											Thanks for signing up!
											Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
											 
											------------------------
											First Name: '.$fn.'
											Last Name: '.$ln.'
											------------------------
											 
											Please click this link to activate your account:
											http://www.package.com/verify.php?email='.$email.'&hash='.$hash_code.'
											 
											'; // Our message above including the link

											$headers = 'From:noreply@package.com' . "\r\n"; // Set from headers
//											mail($to, $subject, $message, $headers); // Send our email

											if (mail($to, $subject, $message, $headers)){
												//echo "<div class='msg-thanks' align='center'><p>Special offer added successfully!.</p></div>";
												//header('Location: sign_uplogin');
												echo '<meta HTTP-EQUIV="REFRESH" content="0; url=thanks">';


											}else{
												echo 'no sent';
											}
												//echo "<div class='msg-thanks' align='center'><p>Special offer added successfully!.</p></div>";	
//												$_SESSION['step2']='ok';
//												echo '<meta HTTP-EQUIV="REFRESH" content="0; url=thanks">';
								}}
								}
								?>
					<div class="span10">
					<p>Please provide the following details</p>
					<div class="control-group">
						<label class="control-label req">First Name :</label>
                       	<div class="controls">
                       		<input type="text" name="fname" id="fname" placeholder="* Your first name..."value="<?php if(array_key_exists('send', $_POST)){echo $_POST['fname'];}?>"/>
                        	<div class="error left-align" id="err-fname">Please enter first name.</div>
                        </div>
                   	</div>
					<div class="control-group">
						<label class="control-label req">Last Name :</label>
                       	<div class="controls">
                       		<input type="text" name="lname" id="lname" placeholder="* Your last name..." value="<?php if(array_key_exists('send', $_POST)){echo $_POST['lname'];}?>"/>
                        	<div class="error left-align" id="err-lname">Please enter last name.</div>
                        </div>
                   	</div>
					<div class="control-group">
						<label class="control-label req">Gender :</label>
                       	<div class="controls">
                       		<select id="gender" class="span9" name="gender" reqiured placeholder="dasd">
									<option selected="selected" ><?php if(array_key_exists('send', $_POST)){echo $_POST['gender'];} else echo 'Select';?></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
                            <div class="error left-align" id="err-gender">Please select gender.</div>
                        </div>
                   	</div>
					<div class="control-group">
						<label class="control-label req">Country :</label>
                       	<div class="controls">
                       		<?php		 $conn=connect_to_db();	
								$sqld = mysqli_query($conn,"SELECT * FROM country ORDER BY name ASC") or die(mysqli_error()); 				   
								$rowd = mysqli_fetch_array($sqld);?>
							  <select id="country" class="span9" name="country"  onblur="setValues2()">
							  <option selected="selected">Select</option>
								<?php do { ?>
								<option value="<?php echo $rowd['countryid']; ?>"><?php echo $rowd['name']; ?></option>
								<?php } while ($rowd = mysqli_fetch_array($sqld)); ?>
						  </select>
                            <div class="error left-align" id="err-country">Please select country.</div>
                        </div>
                   	</div>
					<div class="control-group">
						<label class="control-label req">Your City/Town :</label>
                       	<div class="controls">
                       		<input type="text" name="city" id="city" placeholder="* Your city/town..." value="<?php if(array_key_exists('send', $_POST)){echo $_POST['city'];}?>"/>
                        	<div class="error left-align" id="err-city">Please enter your city.</div>
                        </div>
                   	</div>
					<div class="control-group">
						<label class="control-label req">Email address :</label>
                       	<div class="controls">
                       		<input type="text" name="email" id="email" placeholder="* Your email..." value="<?php if(array_key_exists('send', $_POST)){echo $_POST['email'];}?>"/>
                        	<div class="error left-align" id="err-email">Please enter valid email.</div>
                        </div>
                   	</div>
					<div class="control-group">
						<label class="control-label req">Telephone :</label>
                       	<div class="controls">
                       		<input type="text" name="phone" id="phone" placeholder="* Your telephone..." value="<?php if(array_key_exists('send', $_POST)){echo $_POST['phone'];}?>"/>
                        	<div class="error left-align" id="err-phone">Please enter valid telephone.</div>
                        </div>
                   	</div>
					<div class="control-group">
						<label class="control-label req">Password :</label>
                       	<div class="controls">
                       		<input type="password" name="password1" id="password1" placeholder="* Your password..." />
                        	<div class="error left-align" id="err-pass1">Please enter password.</div>
                        </div>
                   	</div>
					<div class="control-group">
						<label class="control-label req">Repeat Password :</label>
                       	<div class="controls">
                       		<input type="password" name="password2" id="password2" placeholder="* Repeat your password..."/>
                        	<div class="error left-align" id="err-pass2">Please enter password</div>
                        </div>
                   	</div>
					<div class="control-group">    
                       	<div class="controls">
                	        <button type="submit" class="message-btn" name="send">Submit details</button>
                       	</div>
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
			<div class="span3">
				<div class="title2">Hard work pays off</div>
				<ul class="pin_icn">
					<li> Work remotely, without having to leave your home.</li>
                    <li> Work on interesting projects and assignments.</li>
                    <li> Earn money for your knowledge.</li>
                    <li> No shortage of orders.</li>
                	<li> Become a valuable member of our community.</li>
                    <li> Earn much more than with other freelance writing companies.</li>
                	<li> Create your own client base, with loyal customers to your service.</li>
                	<li> Develop, perfect and improve your skills.</li>
				</ul>
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
    <script>
    function inIframe () {
        try {
            return window.self !== window.top;
        } catch (e) {
            return true;
        }
    }
    if(!inIframe()){
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-54039406-1', 'auto');
        ga('send', 'pageview');
    }
    </script>
</body>
</html>
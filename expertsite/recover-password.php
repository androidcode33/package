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
			reason += validateEmail(theForm.mail);
					   
			if (reason != "") {	return false;}
			return true;
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
            		}); error = "The required field has not been filled in.\n"
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
                        <li><a href="signup">Register</a></li>
                        <li><a href="faq">faq</a></li>
						<li><a href="login">login</a></li>
                    </ul>
                </div> <!-- End main navigation -->
            </div>
        </div>
    </div>
    
    <!-- Portfolio section start -->
    <div class="section secondary-section" id="portfolio">
        <div class="triangle"></div>
        <div class="container">
        	<div class="span4">
			</div>
			<div class="span4" align="justify">	
				<div class="title2"> Recover Your Password </div>
				<p>Please provide your email address you have been using and the new password will be sent to your email!...</p>
				<?php
			if(array_key_exists('send1', $_POST)){
			$email=$_POST['email']; $message=""; 
			$conn=connect_to_db();
			$sqle = mysqli_query($conn,"SELECT * FROM users where email='$email' and status='Active'") or die(mysqli_error()); 	
			$rowe = mysqli_fetch_assoc($sqle); $no = mysqli_num_rows($sqle); 
			if($no<1){echo "<div class='alert alert-success fade in' align='center'>email not found</div>";}
			else{
				$fm=$rowe['fname'];
				$pass=$fm.'*1234#'; $new=md5($fm.'*1234#');
				$conde=mysqli_query($conn,"update users set password='$new' WHERE email='$email'"); 
				if(!$conde){echo "Please try again " .mysqli_error();}
				else{echo "<div class='alert alert-success fade in' align='center'>Please check your email...</div>";}
				}
				////send email to the user
						$subject = 'Password reset at IUEA Event System';
						$message .= "Hi $fm \n\n";
						$message .= "Your account password at 'IUEA Events System' has been reset and you have been issued with a new temporary password.\n\n";
						$message .= "Username: $email \n";
						$message .= "Password: $pass \n\n";
						$message .= "Please after login change this password";
						$message .= "Verified by: Administrator \n\n";
						// limit line length to 70 characters
						$message = wordwrap($message, 70);
						$mailSent = mail($email, $subject, $message);
										
		}?>
				<form action="" method="post" name="theForm" id="theForm" onSubmit="return validateForm(this)">
                   	<div class="control-group">
                       	<div class="controls">
                       		<input type="email" name="email" id="mail" placeholder="* Your email..." />
                            <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                        </div>
                   	</div>
                    <div class="control-group">    
                       	<div class="controls">
                	        <button type="submit" class="message-btn" name="send1">Send password</button>
                       	</div>
                    </div>
					<?php if(isset($error)){ 
				  		foreach($error as $err){echo '<div id="errorSend" class="alert alert-error"><strong>Error!</strong> '.$err.'</div>';}} ?>
					<p align="right" ><label><a href="login">Back to login</a></label></p>
                </form>
        	</div>
    	</div>
	</div>
    <!-- Portfolio section end -->
	
	
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
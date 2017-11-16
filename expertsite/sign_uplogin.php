<?php session_start();?>
<?php include('includes/db_connection.php');
	include('includes/loginProcess.php');
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
			reason += validateEmpty(theForm.password);
					   
			if (reason != "") {	return false;}
			return true;
			}
			
			function validateEmpty(fld) {
				var error = "";
				if (fld.value.length == 0) {  
					$('#err-name').show(500);
					$('#err-name').delay(4000);
					$('#err-name').animate({
                	height: 'toggle'
            		}, 500, function () {  // Animation complete.
            		});	error = "The required field has not been filled in.\n"
            		  } 
				else { $('#err-name').hide(500);   }
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
                        <li><a href="signup">sign up</a></li>
                        <li><a href="faq">faq</a></li>
						<li class="active"><a href="login">login</a></li>
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
			<div class="span4">	
				<div class="title2"> Signup Step #2 </div>
				<div class="alert alert-success">
                <strong>Your account was created successfully!</strong>	<br>Please login to preceed to next step.
				</div><div class="span3">
				<form action="" method="post" name="theForm" id="theForm" onSubmit="return validateForm(this)">
                   	<div class="control-group">
                       	<div class="controls">
                       		<input type="email" name="email" id="mail" placeholder="* Your email..." />
                            <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                        </div>
                   	</div>
					<div class="control-group">
                       	<div class="controls">
                           	<input  type="password" id="password" name="password" placeholder="* Your password..." />
                           	<div class="error left-align" id="err-name">Please enter password.</div>
                       	</div>
                   	</div>
                    <div class="control-group">    
                       	<div class="controls">
                	        <button type="submit" class="message-btn" name="Login">Sign in</button>
                       	</div>
                    </div>
					<?php if(isset($error)){ 
				  		foreach($error as $err){echo '<div id="errorSend" class="alert alert-error"><strong>Error!</strong> '.$err.'</div>';}} ?>
					<p align="right" ><label><a href="recover-password">Forgot password?</a></label></p>
                </form></div>
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
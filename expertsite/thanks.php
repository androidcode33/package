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
    <?php
    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
        // Verify data
        $email = mysql_escape_string($_GET['email']); // Set email variable
        $hash = mysql_escape_string($_GET['hash']); // Set hash variable
        $search = mysql_query("SELECT email, hash_code, active FROM user WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
        $match  = mysql_num_rows($search);

        if($match > 0){

            mysql_query("UPDATE user SET active='1' WHERE email='".$email."' AND hash_code='".$hash."' AND active='0'") or die(mysql_error());
            echo '<div class="statusmsg">Your account has been activated, you can now login</div>';

        }else{
            // No match -> invalid url or account has already been activated.
        }

    }

    ?>
    <!-- Portfolio section start -->
    <div class="section secondary-section" id="portfolio">
        <div class="triangle"></div>
        <div class="container">
        	<div class="span3">
			</div>
			<div class="span6" align="center">	
				<div class="title2"> Sign-up Step #2 </div>
				<div class="alert alert-success">
                <strong>Well done!</strong> Your account was created successfully!
				</div>
				<div class="alert alert-success">
                Thanks for creating an account with expertcage. <br>Please check your email to activate your account. 
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
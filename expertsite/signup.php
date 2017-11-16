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
					<?php 	$query1 = "SELECT * FROM discipline limit 10"; $query1 = mysqli_query($conn,$query1) or die(mysqli_error());?>
					<ul class="clip_icn">
						<?php while($row1 = mysqli_fetch_array($query1)){?>
						<li><?php echo $row1['name']; ?></li>
						<?php } ?>
					</ul>
					<p>Professional experience is appreciated, since we do provide non-academic writing jobs.</p>
				</div>
				
				<div class="span6">	
					<div class="title2"> Sign up account Type</div>
					<p>First, tell us what you're looking for. We have two types of accounts; customer(solution seeker) and expert(solution provider) <br>
					By creating an account, you agree to our <a target="_blank" href="terms-and-condition"> Terms and Conditions</a> </p>
					<div class="span10">
						<img src="images/employer.png" width="79" height="74" style="float:left; padding:10px;"/> 
						<h4><strong>I want to hire</strong></h4> <small>Find, hire, manage, and pay for help, on demand.</small>
						<a href="sign_up_client" class="da-link button" style="border-radius:7px; background-color:#ddd; border:#0099FF;">Register as a Client</a>
					</div>
					<div class="span10" style="margin-top:20px;">
						<img src="images/contractor.png" width="77" height="77" style="float:left; padding:10px;"/>
						<h4 align="left"><strong>I want to work</strong></h4>
						<small>Find work, earn money, and grow your career.</small>
						<a href="sign_up" class="da-link button" style="border-radius:7px; background-color:#ddd; border:#0099FF;">Register as an Expert</a>
					</div>
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
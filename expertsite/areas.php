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
                        <li><a href="signup">register</a></li>
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
					<div class="title2">Amazing Work</div>
					<p align="justify">Our services are provided by sole proprietors, partnerships or corporations depending on the type of service. </p>
					<p align="justify">Our Team has special training and hold professional licenses such as doctors, architects, auditors, engineers, lawyers and among others.</p>
                	<div class="title2">The Requirements</div>
					<ul>
					  	<li>A minimum of a bachelor's degree in any field</li>
					    <li>A Computer or Laptop </li>
					    <li>Access to internet</li>
					    <li>English language proficiency</li>
				  </ul>
			   </div>
				
				<div class="span6" align="justify">
					<div class="title2">Areas of Expertise</div>
                	<h5>Professional experts get ready to offer your expertise (of course for a fee) in the following areas.
					If you have a degree or experience in any of the following fields, feel free to apply.</h5>
					<?php 	$query1 = "SELECT * FROM discipline ORDER BY name ASC"; $query1 = mysqli_query($conn,$query1) or die(mysqli_error()); $tot = mysqli_num_rows($query1)?>
					<div class="span6">
						<ul class="clip_icn">
							<?php $no=($tot/2)+1; $x=1; $i=1;
							while($row1 = mysqli_fetch_array($query1)){
							if($x<$no){?>
							<li><?php echo $row1['name']; ?></li>
							<?php }$x++;} ?>
						</ul>
					</div>
					<div class="span5">
					<?php 	$query = "SELECT * FROM discipline ORDER BY name ASC"; $query = mysqli_query($conn,$query) or die(mysqli_error()); $tot = mysqli_num_rows($query)?>
						<ul class="clip_icn">
							<?php 
							while($row = mysqli_fetch_array($query)){
							if($i>=$no){?>
							<li><?php echo $row['name']; ?></li>
							<?php }$i++;} ?>
						</ul>
					</div>
				</div>
				<div class="span3" align="justify">
					<div class="title2">Home of Experts</div>
					<p><img src="images/log.png">
					Unlike most other platforms, in addition to offering millions of projects, Expertcage allows you to compete with other Experts in contests to
					 prove your skills. If you’re competitive and confident in your expertise, it’s a great way to showcase your abilities and attract more clients. 
					</p>
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
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
					<p align="justify">Our services are provided by sole proprietors, partnerships or corporations depending on the type of service. </p>
					<p align="justify">Our Team has special training and hold professional licenses such as doctors, architects, auditors, engineers, lawyers and among others.</p>
				</div>
				
				<div class="span9" align="justify">
					<?php 	$query = "SELECT * FROM projects a, discipline b where b.disciplineid=a.typeid order by client_price DESC"; 
					$query = mysqli_query($conn,$query) or die(mysqli_error());	?>	
					<div class="title2">Top 10 Recent Projects</div>
                	<table class="table table-bordered table-data">
					<tr>
						<th>Price</th>
						<th>Job title</th>
						<th>area</th>
						<th>Type</th>
					  </tr>
						<?php while($row = mysqli_fetch_array($query)){?>
					  <tr>
						<td><b><span class="badge badge-info">$<?php echo $row['client_price']; ?></span></b></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['type']; ?></td>
					  </tr><?php } ?>
					</table>
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
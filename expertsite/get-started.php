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
					<div class="title2">Job well done</div>
					<h4>Tell us what you need</h4>
					<img src="images/expert1.jpg">
					<h4>We send it to curated experts</h4>
					<img src="images/expert2.jpg">
					<h4>job done!</h4>
					<img src="images/expert3.jpg">
                	<?php 	//$query = "SELECT * FROM projects a, discipline b where b.disciplineid=a.typeid order by client_price DESC"; 
					//$query = mysqli_query($conn,$query) or die(mysqli_error());	?>
                	<!--<table class="table table-bordered table-data">
					<tr>
						<th>Price</th>
						<th>area</th>
						<th>Type</th>
					  </tr>
						<?php //while($row = mysqli_fetch_array($query)){?>
					  <tr>
						<td>$<?php //echo $row['client_price']; ?></td>
						<td><?php //echo $row['name']; ?></td>
						<td><?php //echo $row['type']; ?></td>
					  </tr><?php //} ?>
					</table>-->
					
				</div>
				
				<div class="span9">
					<?php 	$query = "SELECT * FROM get_started"; $query = mysqli_query($conn,$query) or die(mysqli_error());
							$row = mysqli_fetch_array($query);
					?>	
					<div class="title2"> <?php echo $row['title']; ?></div>
					<div align="justify"><?php echo $row['content']; ?></div>
					<div class="span6">
						<div class="title2"> Solution Provider</div>
						<?php //echo $row['content1']; ?>
						<div class="cat">
		          			<div class="catImg">1</div>
                  			<div class="meta">
                      			<h3>Signup with expertcage</h3>
								<span>Fill in the registration form and provide us with valid information</span>
                  			</div>
		      			</div>
						<div class="cat">
		          			<div class="catImg">2</div>
                  			<div class="meta">
                      			<h3>Pass a Grammer Test</h3>
								<span>Prove your fluency in english with a grammer test</span>
                  			</div>
		      			</div>
						<div class="cat">
		          			<div class="catImg">3</div>
                  			<div class="meta">
                      			<h3>Upload academic papers</h3>
								<span>Upload academic certificates or transcripts. After we will evaluate your application and decide your cooperation with expertcage.</span>
                  			</div>
		      			</div>
						<div class="cat">
		          			<div class="catImg">4</div>
                  			<div class="meta">
                      			<h3>Bid for project</h3>
								<span>Apply for a project in your field of interest</span>
                  			</div>
		      			</div>
						<div class="cat">
		          			<div class="catImg">5</div>
                  			<div class="meta">
                      			<h3>Get paid for service</h3>
								<span>Payment is made on monthly basis</span>
                  			</div>
		      			</div>
					</div>
					
					<div class="span5">
						<div class="title2"> Solution Seeker</div>
						<?php //echo $row['content2']; ?>
						<div class="cat">
		          			<div class="catImg">1</div>
                  			<div class="meta">
                      			<h3>Signup with expertcage</h3>
								<span>Fill in the registration form and provide us with valid information</span>
                  			</div>
		      			</div>
						<div class="cat">
		          			<div class="catImg">2</div>
                  			<div class="meta">
                      			<h3>Post Project requirements</h3>
								<span>Let us know your project requirements</span>
                  			</div>
		      			</div>
						<div class="cat">
		          			<div class="catImg">3</div>
                  			<div class="meta">
                      			<h3>Deposit on your account</h3>
								<span>Put money on your account</span>
                  			</div>
		      			</div>
						<div class="cat">
		          			<div class="catImg">4</div>
                  			<div class="meta">
                      			<h3>Your project will be worked on</h3>
								<span>The amount for the project will be reducted once your sutificified with the service.</span>
                  			</div>
		      			</div>
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
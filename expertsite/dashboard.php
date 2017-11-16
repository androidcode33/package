<?php session_start();?>
<?php include('includes/db_connection.php');
		include('includes/loginProcess.php');
			?>
<!DOCTYPE html>
<html class="firefox firefox31 desktop custom-responsive" slick-uniqueid="3" idmmzcc-ext-docid="311937024" dir="ltr" lang="en-gb">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="generator" content="expertcage">
  <title>Expertcage.com</title>
  
    <link rel="stylesheet" href="css/system.css">
    <link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/default.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <link rel="stylesheet" href="css/template.css" media="screen">
    <link rel="stylesheet" href="css/template_002.css" media="all">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	
	<script src="js/caption.js" type="text/javascript"></script>
	<script src="js/mootools-more.js" type="text/javascript"></script>
    <script src="js/jquery.js"></script>
    <script src="js/script_002.js"></script>
    <script src="js/script.js"></script>
    <script src="js/modules.js"></script>
</head>

<body>
<div style="display: none;" id="toTop"><p>^Back To Top</p></div>
<div id="dd-main">
<header style="background-position: 50% 0%;" class="dd-header">
    <div class="dd-shapes">
        <div style="left: 508.86px; top: 15.81px; margin-left: 0px !important;" class="dd-textblock dd-object1701156306">
        <div class="dd-object1701156306-text-container">
        <div class="dd-object1701156306-text">
			<p> <a href="http:///"><img src="images/banner2.png" alt="" border="0"></a>
			</p>
		</div>
		</div>
		</div>
    </div>
	<!----------- social networks----------->
	<?php include('social.php');?>
	
	<a style="left: 120.1px; top: 6px; margin-left: 0px !important;" href="#" class="dd-logo dd-logo-825675486">
    <img src="images/log22.png" alt=""></a>
	
	<nav style="left: 148.5px;" class="dd-nav desktop-nav">
		<ul class="dd-hmenu">
			<li><a href="index">Home</a></li>
			<li><a href="dashboard?about-us">About us</a></li>
			<li><a href="dashboard?how-it-works">How it works</a>
			<li><a href="dashboard?payments">Payments</a></li>
			<li><a href="sign_up_type">Sign up</a></li>
			<li class="last"><a href="login">Login</a></li>
		</ul> 
	  </nav>
</header>

<div class="dd-sheet clearfix">
    <div class="dd-layout-wrapper"> <!-- wrapper-->
        <div class="dd-content-layout"> <!-- layout-->
            <div class="dd-content-layout-row"><!-- row-->
			
			<?php include('left.php');?>
				 
                <div class="dd-layout-cell dd-content"> <!-- content-->
				<?php $conn=connect_to_db();
				if(isset($_GET['payments'])){$query = "SELECT * FROM payment_methods";}
				  else if(isset($_GET['get-started'])){$query = "SELECT * FROM get_started";}
				  else if(isset($_GET['about-us'])){	$query = "SELECT * FROM about_us";}
				  else if(isset($_GET['requirements'])){$query = "SELECT * FROM requirements";}
				  
				  else if(isset($_GET['get-paid'])){$query = "SELECT * FROM get_paid";}
				  else if(isset($_GET['why-us'])){	$query = "SELECT * FROM why_us";}
				  else if(isset($_GET['benefits'])){$query = "SELECT * FROM benefits";}
				  
				  else if(isset($_GET['grow-career'])){$query = "SELECT * FROM grow_career";}
				  else if(isset($_GET['categories'])){$query = "SELECT * FROM categories";}
				  else if(isset($_GET['faq'])){	$query = "SELECT * FROM faq";}
				  else if(isset($_GET['terms'])){	$query = "SELECT * FROM terms";}
				  else if(isset($_GET['reports'])){$query = "SELECT * FROM reports";}
				  else{	$query = "SELECT * FROM how_it_works";}
				  $query = mysqli_query($conn,$query) or die(mysqli_error());
					$row = mysqli_fetch_array($query);
					?>
					<article class="dd-post ">
						<div class="dd-postcontent clearfix ">
						<div class="breadcrumbs"><span class="showHere">You are here </span>: <?php echo $row['page_title']; ?></div>
					</div>
					</article>

					<div class="blog-featured"><!-- the main article -->
						<div class="items-leading">
						<div class="leading-0">
						<article class="dd-post">
							<div class="dd-postcontent clearfix">
								<div class="dd-article">
								<h3 class="dd-postheader t"><span class="dd-postheadericon"> <?php echo $row['title']; ?></span></h3>
								<div align="justify">
								<?php echo $row['content']; ?>
								</div>
							</div>
						</article>
						</div>
						</div>
					</div><!-- end of main article -->
                </div><!-- end of content-->
				
				
				<!---- right side navigation column---->
                <div class="dd-layout-cell dd-sidebar2">
					<div class="dd-block clearfix">	
					<div class="dd-blockheader"><h3 class="t">Navigation Menu</h3></div>
					<div class="dd-blockcontent">
						<div id="menu14">
						<ul>
							<li><a href="dashboard?get-started">Get Started</a></li>
						    <li><a href="dashboard?how-it-works">How It Works</a></li>
							<li><a href="dashboard?why-us">Why The Expertcage.com</a></li>
						    <li><a href="dashboard?get-paid">Get Paid in Time</a></li>
						    <li><a href="dashboard?requirements">Requirements To Join</a></li>
						    <li><a href="dashboard?categories">Areas of Expertise</a></li>
						    <li><a href="dashboard?grow-career">Grow Your Career</a></li>
							<li><a href="dashboard?projects">Recent Projects</a></li>
						    <li><a href="dashboard?benefits">Our Benefits</a></li>
						    <li><a href="dashboard?faq">FAQs</a></li>
						</ul>
						</div>
					</div>
					</div>
					
					<div class="dd-block clearfix">
					<div class="dd-blockheader"><h3 class="t">The Home of Experts</h3></div>
					<div class="dd-blockcontent">
						<div class="custom">
						<p style="text-align: justify;"><img src="images/expert3.jpg" width="100%"/></p>
						<p align="justify">
						Unlike most other platforms, in addition to offering millions of projects, Expertcage allows you to compete with other Experts in contests to prove your skills. If you’re competitive and confident in your expertise, it’s a great way to showcase your abilities and attract more clients.
						</p>
						</div>
					</div>
					</div>
					
					
			</div><!-- end of row-->
		</div> <!-- layout-->
	</div><!-- wrapper-->
	
	<?php include('footer.php');?>
	
	<footer class="dd-footer">
		<div style="position:relative;padding-left:0px;padding-right:0px">
		<a class="dd-rss-tag-icon" style="position: absolute; bottom: 0px; right: 6px; line-height: 36px;" href="#">&nbsp;</a>
		Copyright © 2015  &nbsp;&nbsp;
		<span style="font-size: 13px; color: #E6F3D3;">Expertcage.com </span>
		&nbsp;All Rights Reserved.</div>
	</footer>
    </div>
</div>


<!-- responsivenes-->
<div id="dd-resp">
	<div id="dd-resp-m"></div>
	<div id="dd-resp-t"></div>
</div>
<div id="dd-resp-tablet-landscape"></div>
<div id="dd-resp-tablet-portrait"></div>
<div id="dd-resp-phone-landscape"></div>
<div id="dd-resp-phone-portrait"></div>

</body>
</html>
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
                        <li class="active"><a href="index">Home</a></li>
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
        <!-- Start cSlider -->
        <div id="da-slider" class="da-slider">
            <div class="triangle"></div>
            <div class="container">
                <!-- Start first slide -->
                <div class="da-slide">
                    <h2 class="fittext2">Need to Outsource Work?</h2>
                    <h4>Build a Better Business with Outsourcing!</h4>
                    <p>Find the Right Contractors! You may not be able to afford or need a full-time (IT person), and it is easier to change to an outsourced provider with the  
					right skill set as your IT needs change. </p>
                    <a href="post" class="da-link button">Post Your Project Here!</a>
                    <div class="da-img"><img src="images/ss1.png" alt="image01" width="320"></div>
                </div>
                <!-- Start second slide -->
                <div class="da-slide">
                    <h2>Need to Improve Your Business? </h2>
                    <h4>Grow your small business with the right Expert! </h4>
					<p>You may at some point consider hiring outside professionals to help grow your small business.Here are some outside professionals you may want or need to hire
					as your business grows: CPA, Lawyer, Business consultant....... </p>
                    <a href="post" class="da-link button">Post Your Project Here!</a>
                    <div class="da-img">
                        <img src="images/ss2.png" width="320" alt="image02">
                    </div>
                </div>
                <!-- End second slide -->
				 <!-- Start second slide -->
                <div class="da-slide">
                    <h2>Need to Hire a Consultant?</h2>
                    <h4>Find a Professional With The Right Expertise!</h4>
					<p>Success in any given project or activity depends on two things:  available manpower and proper expertise.  If your organization is lacking in either of these
					 two categories, it’s time to look outside for help.</p>
                    <a href="post" class="da-link button">Post Your Project Here!</a>
                    <div class="da-img">
                        <img src="images/ss3.png" width="320" alt="image02">
                    </div>
                </div>
                <!-- End second slide -->
                <!-- Start third slide -->
                <div class="da-slide">
                    <h2>I Need Help on a Project?</h2>
                    <h4>Find Skilled Personal Worldwide Ready To Assist!</h4>
                    <p>Don't give up on a project after trying for nearly a year. But I'm still hoping you could get some help. Can you please describe what's your issue or 
					problem? What are you trying to develop or the piece where you are stuck at?</p>
                    <a href="post" class="da-link button">Post Your Project Here!</a>
                    <div class="da-img">
                        <img src="images/ss4.png" width="320" alt="image03">
                    </div>
                </div>
                <!-- Start cSlide navigation arrows -->
                <div class="da-arrows">
                    <span class="da-arrows-prev"></span>
                    <span class="da-arrows-next"></span>
                </div>
                <!-- End cSlide navigation arrows -->
            </div>
        </div>
    <!-- End home section -->
    <!-- Service section start -->
    <div class="section primary-section" id="service">
        <div class="container">
            <!-- Start title section -->
            <div class="heading">The most highly paid fields</div>
            <div class="row-fluid">
                <div class="span3">
                    <div class="centered service">
                        <div class="circle-border zoom-in">
                            <img class="img-circle" src="images/tech.png" alt="service 1">
                        </div>
                        <h3>Technology</h3>
                        <p>products developed from the application of scientific knowledge</p>
                    </div>
                </div>
                <div class="span3">
                    <div class="centered service">
                        <div class="circle-border zoom-in">
                            <img class="img-circle1" src="images/finance.png" alt="service 2" />
                        </div>
                        <h3>Business</h3>
                        <p>The activity of making, buying, and selling goods or services</p>
                    </div>
                </div>
				<div class="span3">
                    <div class="centered service">
                        <div class="circle-border zoom-in">
                            <img class="img-circle" src="images/eng.png" alt="service 2" />
                        </div>
                        <h3>Engineering</h3>
                        <p>Application of scientific and mathematical principles to practical ends</p>
                    </div>
                </div>
                <div class="span3">
                    <div class="centered service">
                        <div class="circle-border zoom-in">
                            <img class="img-circle" src="images/mng.png" alt="service 3">
                        </div>
                        <h3> Management</h3>
                        <p>Process of dealing with or controlling things or people</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Service section end -->
    <!-- Portfolio section start -->
    <div class="section secondary-section " id="portfolio">
        <div class="triangle"></div>
        <div class="container">
			 <div class="row-fluid">
                <div class="span3">
					<div class="title2">Areas of Expertise</div>
                	<p>If you have a degree or experience in any of the following fields, feel free to apply.</p>
					<?php 	$query1 = "SELECT * FROM discipline limit 14"; $query1 = mysqli_query($conn,$query1) or die(mysqli_error());?>
					<ul class="clip_icn">
						<?php while($row1 = mysqli_fetch_array($query1)){?>
						<li><?php echo $row1['name']; ?></li>
						<?php } ?>
					</ul>
					<p>Professional experience is appreciated, since we do provide non-academic writing jobs.</p>
				</div>
				<div class="span5">
					<?php 	$query = "SELECT * FROM welcome"; $query = mysqli_query($conn,$query) or die(mysqli_error());
							$row = mysqli_fetch_array($query);
					?>	
					<div class="title2"> <?php echo $row['title']; ?></div>
					<div align="justify"><?php echo $row['content']; ?></div>
				</div>
				<div class="span4">
					<?php 	//$query = "SELECT * FROM projects a, discipline b where b.disciplineid=a.typeid order by client_price DESC"; 
					//$query = mysqli_query($conn,$query) or die(mysqli_error());	?>	
					<div class="title2">Community of Experts</div>
                	
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
					</table>--->
					<img src="uploads/expert.png">
					
					
              <div class="cat">
		          <div class="catImg">1</div>
                  <div class="meta">
                      <h3>A platform for Professional services</h3>
                      <span>We provide a platform for both solution seekers and solution providers, we are always trying to make your dealing with us as pleasant and as convenient as possible. Our standards are high and we accept only high-quality work.</span>
                  </div>
		      </div>
               <div class="cat">
		          <div class="catImg">2</div>
                  <div class="meta">
                      <h3>Requirements to join</h3>
                      <span>A minimum of a bachelor's degree, A Computer or Laptop or Smart phone, Access to internet and English language proficiency.</span>
                  </div>
		      </div>
				
				</div>
				<div class="span4">
					<div class="fb-page" 
					  data-href="https://www.facebook.com/theexpertcage/"
					  data-width="380" 
					  data-hide-cover="false"
					  data-show-facepile="false" 
					  data-show-posts="false">
					</div>
					<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your like button code -->
	<div class="fb-like" 
		data-href="http://www.facebook.com/theexpertcage/" 
		data-layout="standard" 
		data-action="like" 
		data-show-faces="true">
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
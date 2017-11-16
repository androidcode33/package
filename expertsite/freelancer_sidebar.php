<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php	$conn=connect_to_db();
		$querym = "SELECT * FROM user where userid='".$_SESSION['ec_userid']."'";
	$querym = mysqli_query($conn,$querym) or die(mysqli_error());	
	$rowm = mysqli_fetch_array($querym);?>
<body>
<div id="sidebar">
  <ul class="side-nav accordion_mnu collapsible">
    <li><a href="freelancer?dashboard"><span class="white-icons price_tag"></span> Balance: <span class="" style="font-size:18px; font-weight:bold; color:#FFFFFF;"> <b>$<?php echo $rowm['amount']; ?></b></span> </a></li>
    <li><a href="freelancer?dashboard"><span class="white-icons list_image"></span> My Current Jobs</a>
		<?php	$conn=connect_to_db();
		$query = "SELECT * FROM projects where freelancerid='".$_SESSION['ec_userid']."' order by deadline ASC";
	$query = mysqli_query($conn,$query) or die(mysqli_error());	?>
        <ul class="acitem">
         <?php while ($row11 = mysqli_fetch_array($query)) { ?>
		 <li><a href="freelancer?ppro898098=<?php echo $row11['projectid']; ?>"><span class="sidenav-icon"><span class="sidenav-link-color">
		 </span></span>#<?php echo $row11['projectid']; ?></a></li>
							<?php }?>
        </ul>
    </li>
    <li><a href="freelancer?dashboard=previous-jobs"><span class="white-icons list_images"></span> Previous Projects</a> </li>
	<li><a href="freelancer?dashboard=available-jobs"><span class="white-icons list"></span> Available Jobs </a> </li>
	<li><a href="freelancer?dashboard=messages"><span class="white-icons inbox"></span> Message Box </a> </li>
    <li><a href="freelancer?dashboard=profile"><span class="white-icons admin_user_2"></span> My Profile</a></li>
    <li><a href="freelancer?dashboard=invitations"><span class="white-icons speech_bubble_2"></span> Invitation jobs</a></li>
	<li><a href="freelancer?dashboard=payments"><span class="white-icons money"></span> Payment Statistics</a></li>
  </ul>
    <div id="side-accordion">
    <div class="accordion-group">
      <div class="accordion-header"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#side-accordion" href="#collapseOne"><i class="nav-icon month_calendar"></i> Contacts Info</a> </div>
      <div id="collapseOne" class="collapse in">
        <div class="accordion-content">
          <div class="site-stat">
            <h5><i class="icon-envelope"></i> Email Address</h5>
            <ul>
              <li>support@expertcage.com<span class="up">35K</span></li>
              <li>info@expertcage.com<span class="down">5%</span></li>
              <li>admin@expertcage.com<span class="up">10m</span></li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="new-update">
    <div class="side-news">
      <h5><a href="#">24/7 hours cooperation</a></h5>
      <p> <img src="images/expert2.jpg" /></p>
    </div>
  </div>
</div>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<!-- styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet">
<link href="css/jquery.jqplot.css" rel="stylesheet">
<link href="css/prettify.css" rel="stylesheet">
<link href="css/elfinder.min.css" rel="stylesheet">
<link href="css/elfinder.theme.css" rel="stylesheet">
<link href="css/fullcalendar.css" rel="stylesheet">
<link href="js/plupupload/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/icons-sprite.css" rel="stylesheet">
<link id="themes" href="css/themes.css" rel="stylesheet">
<link rel="shortcut icon" href="ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<link rel="stylesheet" href="docs/style.css" type="text/css">

<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript">
<script src="jQueryAssets/jquery-ui-1.9.2.datepicker.custom.min.js" type="text/javascript"></script>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css" />
<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css" />
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="timepicker/jquery.timepicker.js"></script>
	<script type="text/javascript" src="timepicker/main.js"></script></script>
<style type="text/css" title="currentStyle">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table.css";
		.style1 {color: #FF0000}
.style15 {font-size: 18px; font-family: "Times New Roman", Times, serif; }
</style>
		
		<!-- Include the WYSIWYG javascript files		-->
		<script type="text/javascript" src="scripts/wysiwyg.js"></script>
		<script type="text/javascript" src="scripts/wysiwyg-settings.js"></script>
		<!-- 	Attach the editor on the textareas		-->
		<script type="text/javascript">
			// Use it to attach the editor to all textareas with full featured setup
			//WYSIWYG.attach('all', full);
			
			// Use it to attach the editor directly to a defined textarea
			//WYSIWYG.attach('textarea1'); // default setup
			WYSIWYG.attach('textarea2'); // full featured setup
			//WYSIWYG.attach('textarea3', small); // small setup
			
			// Use it to display an iframes instead of a textareas
			//WYSIWYG.display('all', full);  
		</script>
</head>

<body>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="nonboxy-widget">
          <div class="widget-head">
            <h5><i class="black-icons blocks_images"></i>OUR BENEFITS PAGE </h5>
          </div>
          <div class="widget-content">
            <div class="widget-box">
	<?php
					  $conn=connect_to_db();
	$sql23 = mysqli_query($conn,"SELECT * FROM benefits where id=1") or die(mysqli_error()); 
	$row = mysqli_fetch_assoc( $sql23); 
	if(array_key_exists('send', $_POST)){
	$title=mysqli_real_escape_string($_POST['title']); 
	$content=mysqli_real_escape_string($_POST['content']);
	$conde=mysqli_query($conn,"update benefits set title='$title', content='$content' WHERE id='1'"); 

		if(!$conde){
		echo "Please try again" .mysqli_error(); echo "</p>";}
		else{
		echo "<div class='success' align='center'>Operation completed successfully!.<br><br> <a href='admin'>Click Here</a></div>";			
    			}}?>
              <form action="" method="post" enctype="multipart/form-data" name="theForm" class="form-horizontal" id="theForm" onsubmit="return validateFormOnSubmit(this)">
		
                <fieldset>
				  <div class="control-group">
                    <label class="control-label">Title</label>
                    <div class="controls">
                      <input id="title" name="title" type="text" class="span6" value="<?php echo $row['title'];?>"/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Page Content </label>
                    <div class="controls">
                      <textarea id="textarea2" name="content" style="width:90%;height:300px;"><?php echo $row['content'];?></textarea>
                    </div>
                  </div>
                <div class="form-actions">
                  <button class="btn btn-inverse" type="submit" name="send">Save changes</button>
                </div>
                </fieldset>
              </form>
			  <script language="JavaScript1.2" type="text/javascript">
function validateFormOnSubmit(theForm) {
var reason = "";
reason += validateEmpty(theForm.title);
reason += validateEmpty(theForm.date);
reason += validateEmpty(theForm.description);


  if (reason != "") {
    alert("Some fields need correction:\n" + reason);
    return false;
  }

  return true;
}

function validateEmpty(fld) {
    var error = "";
 
    if (fld.value.length == 0) {
        fld.style.background = 'Yellow'; 
        error = "The required field has not been filled in.\n"
    } else {
        fld.style.background = 'White';
    }
    return error;  
}
function validateEmpty1(fld) {
    var error = "";
 
    if (fld.value == 'Select') {
        fld.style.background = 'Yellow'; 
        error = "Select a value.\n"
    } else {
        fld.style.background = 'White';
    }
    return error;  
}

function trim(s)
{
  return s.replace(/^\s+|\s+$/, '');
}
function validatePrice(fld) {
    var error = "";
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');    

   if (fld.value == "") {
        error = "You didn't enter price of the product.\n";
        fld.style.background = 'Yellow';
    } else if (isNaN(parseInt(stripped))) {
        error = "The price contains illegal characters.\n";
        fld.style.background = 'Yellow';
    } 
    return error;
}
function validateQty(fld) {
   var error = "";
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');
 
    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter product quantity.\n";
    } else if (isNaN(parseInt(stripped))) {
        error = "The quantity contains illegal characters.\n";
        fld.style.background = 'Yellow';
    } else {
        fld.style.background = 'White';
    }
   return error;
}
                </script>
			   <!-- End Form Elements -->
				<script type="text/javascript">
$(function() {
	$( "#edate" ).datepicker({ dateFormat: "dd-M-yy" }).val(); 
});
$(function() {
	$( "#date" ).datepicker({ dateFormat: "dd-M-yy" }).val(); 
});
$(function() {
	$( "#odate" ).datepicker({ dateFormat: "dd-M-yy" }).val(); 
});
$(function() {
	$( "#dob" ).datepicker({ dateFormat: "dd-M-yy" }).val(); 
});
</script>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>

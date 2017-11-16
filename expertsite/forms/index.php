<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMS System</title>
<link href="css.css" rel="stylesheet" type="text/css" media="screen" />
</head>
	
	<form action="delete_member.php" method="post">
	  <table width="100%" border="1">
	  <tr>
	    <td width="9%">&nbsp;</td>
	    <td width="42%"><label for="textarea"></label>
        <textarea name="textarea" id="textarea" cols="45" rows="3"></textarea></td>
	    <td width="49%"><span class="empty"><a data-placement="top" title="Click to View all Details" id="view" href="view_member.php" class="btn btn-warning"><i class="icon-search icon-large"></i> View</a>
            <script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $id; ?>').tooltip('show');
				$('#view<?php echo $id; ?>').tooltip('hide');
			});
			</script>
        </span></td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td><input type="checkbox" name="checkbox" id="checkbox" />
        <label for="checkbox"></label></td>
	    <td><span class="empty"><a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>" href="edit_member.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-comment icon-large"></i> Edit</a>
            <script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php echo $id; ?>').tooltip('show');
				$('#edit<?php echo $id; ?>').tooltip('hide');
			});
			</script>
	    </span></td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td><label for="select"></label>
	      <select name="select" id="select">
        </select></td>
	    <td><span class="empty"><a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>2" href="edit_member.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-remove icon-large"></i> Edit</a>
            <script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php echo $id; ?>').tooltip('show');
				$('#edit<?php echo $id; ?>').tooltip('hide');
			});
			</script>
        </span></td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td><label for="textfield"></label>
        <input type="text" name="textfield" id="textfield" /></td>
	    <td><span class="empty"><a data-placement="left" title="Click to Save" id="edit<?php echo $id; ?>3" href="edit_member.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-print icon-large"></i> Save</a>
            <script type="text/javascript">
			$(document).ready(function(){
				$('#edit').tooltip('show');
				$('#edit').tooltip('hide');
			});
			</script>
        </span></td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td><input type="submit" name="button" id="button" value="Submit" /></td>
	    <td><span class="empty"><a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>4" href="edit_member.php<?php echo '?id='.$id; ?>" class="btn btn-inverse"><i class="icon-pencil icon-large"></i> add info</a>
            <script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php echo $id; ?>').tooltip('show');
				$('#edit<?php echo $id; ?>').tooltip('hide');
			});
			</script>
        </span></td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
	    <td><span class="empty"><a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>5" href="edit_member.php<?php echo '?id='.$id; ?>" class="btn btn-primary"><i class="icon-save icon-large"></i> add info</a>
            <script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php echo $id; ?>').tooltip('show');
				$('#edit<?php echo $id; ?>').tooltip('hide');
			});
			</script>
        </span></td>
      </tr>
	  </table>
    </form>

		
		     <?php //include('includes/db_connection.php');
			 if(array_key_exists('send', $_POST)){
			$host='localhost';
			$user='root';
			$password="";
			mysql_connect($host,$user,$password)or die("could not connect to database".mysql_error());
			mysql_select_db('galax') or die ('Error selecting Database!');
 $id=$_POST['id'];
		$role=$_POST['role'];
		$user=$_POST['username'];
		$pass=$_POST['pass1'];
		$pass1=$_POST['pass2'];
		$st=$_POST['status'];
if(!$pass==$pass1){
		$error[]='The password not match!';
	}
	else{
	
		
//$conn=connect_to_db();
$query = "SELECT fname, lname, email FROM users where id='$id'";

// run the query and store the results in the $result variable.
$result = mysql_query($query);
	$numRows=mysql_num_rows($result);
		//proceed only if the count of rows returned frm the query is not zero.
		if(!$numRows==0){
		$error[]='The user is not registered as an employee!';
		}
	//if no error up to this point, check that the Username exists in the Database
	if(!isset($error)){	
//$conn=connect_to_db();
		//insert into Birth Records
				$condetails=mysql_query("INSERT INTO users(id,fname,lname,email,email,status,role,username,password)VALUES('$id','$fname','$lname','$email','$st','$role', '$user','$pass')");
		if(!$condetails){
		//echo "Error inserting user's Records".mysql_error();
		echo "Please try again.</p>";}
		else{
		//header('Location: http://localhost/smss/thanks.php');
		echo "<div style='color:#0000FF;' align='center'><b>Student details added successfully.</div>";		
exit;}
}

}}
		
?>
		

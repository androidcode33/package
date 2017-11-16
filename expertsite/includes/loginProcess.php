<?php
if(array_key_exists('Login', $_POST)){
	$username=trim($_POST['email']);
	$password=md5($_POST['password']);
	if($username==''){
		$error[]='Username empty!';
	}
	if(!isset($error)){
		$conn=connect_to_db();
		$sql="SELECT * FROM user WHERE email='$username' AND password='$password' AND active=1";
		$result=mysqli_query($conn, $sql);
		if(!$result){echo "Error Retriving login details".mysqli_error($conn);}
		$numRows=mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if($numRows==0){
			$error[]='Invalid credentials!';
		}else if($row['status']=="Inactive"){
			$error[]='Your account is not active!';
		}
		else{
				$_SESSION['start'] = time();
				$_SESSION['userid']=trim($row['userid']);
				$_SESSION['ec_userid']=trim($row['userid']);
				$_SESSION['amount']=trim($row['amount']);
				$_SESSION['role']=trim($row['role']);
				$_SESSION['name']=trim($row['fname']).' '.trim($row['lname']);
				$_SESSION['print']=trim($row['fname']);
				//$_SESSION['cid']=trim($row['employeeNo']);
				
  				if (isset($_SESSION['name']) && ($_SESSION['role']=='Support')) {		
			    				echo '<meta HTTP-EQUIV="REFRESH" content="0; url=admin?dashboard">';
					exit;
					}
					elseif (isset($_SESSION['name']) && ($_SESSION['role']=='freelancer')) {		
			    				echo '<meta HTTP-EQUIV="REFRESH" content="0; url=freelancer?dashboard">';
					exit;
					}
					elseif (isset($_SESSION['name']) && ($_SESSION['role']=='Client')) {		
			    				echo '<meta HTTP-EQUIV="REFRESH" content="0; url=client?dashboard">';
					exit;
					}
					elseif (isset($_SESSION['name']) && ($_SESSION['role']=='Applicant')) {		
			    				echo '<meta HTTP-EQUIV="REFRESH" content="0; url=sign_up2?">';
					exit;
					}
					elseif (isset($_SESSION['name']) && ($_SESSION['role']=='Pending')) {		
			    				echo '<meta HTTP-EQUIV="REFRESH" content="0; url=signup_pending?">';
					exit;
					}
				
					else{
    				echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index#">';
					exit;
					}
		
						
		}
	}
}

?>
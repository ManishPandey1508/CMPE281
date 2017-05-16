<?php
	
	extract($_POST);
	// db connection
	$dbc = mysqli_connect("localhost", "root", "", "CMPE281");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	// hash the password
	$pass = hash("sha256", $password);
	// query check
	$query = "SELECT email, password FROM user WHERE email=" . quote($username) . " and password=" . quote($pass);
	$response = mysqli_query($dbc, $query);
	$row = mysqli_fetch_assoc($response);
	mysqli_close($dbc);
	// check if there is the row in db
	if($row){
		//start session when login session end when user close browser
		session_start();
		$_SESSION["username"] = $username;
		Redirect("index.php");
	}
	else Redirect("login.php");
	
	/*--------------------------helper function------------------------*/
	function quote($text){
		return "'" . $text . "'";
	}
	
	function Redirect($url){
    		//header("Location:  " . $url);
   		print "<script type='text/javascript'>
   	     	window.location = '". $url ."'; </script>";
    		exit();
	}

?>

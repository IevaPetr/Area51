<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['uname']) && isset($_POST['content'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);

	$email = validate($_POST['email']);
	$content = validate($_POST['content']);

	$user_data = 'uname='. $uname. '&email='. $email. '&content='. $content;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}

	else if(empty($email)){
        header("Location: signup.php?error=Email is required&$user_data");
	    exit();
	}

	else if(empty($content)){
        header("Location: signup.php?error=Surname is required&$user_data");
	    exit();
	}


	else{


	    $sql = "SELECT * FROM help WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

       
           $sql2 = "INSERT INTO help(user_name,email, content) VALUES('$uname','$email','$content')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: help.php?success=Jūsų žinutė išsiųsta");
	         exit();
           }else {
	           	header("Location: help.php?error=unknown error occurred&$user_data");
		        exit();
           }
		
	}
	
}else{
	header("Location: help.php");
	exit();
}
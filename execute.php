<?php session_start(); 
  include('function.php'); 
   
   $name=$_POST['name']; $email=$_POST['email']; 
   $username=$_POST['username']; 
   $password=md5($_POST['password']); 
   $passwordrepeat=md5($_POST['passwordrepeat']); 
   $result = mysql_query("SELECT * FROM member WHERE username='$username'"); 
   $num_rows = mysql_num_rows($result); 
  
  if($name=="" ||$email=="" ||$username=="" 
  	||$password=="" ||$passwordrepeat=="" )
  
    { 
	header("location: index.php?remarks=field_empty"); 
    }
 elseif($password!=$passwordrepeat) 
    { 
	header("location: index.php?remarks=password_mismatch"); 
    }
 elseif($num_rows)
	 { 
		header("location: index.php?remarks=failed"); 
     }
 elseif(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
    { 
	header("location: index.php?remarks=invalid_email"); 
    }
 else { mysql_query("INSERT INTO member(name, email,username, password)
	VALUES('$name', '$email','$username', '$password')"); 
     header("location: index.php?remarks=success"); 
     } 
  ?>
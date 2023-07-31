<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css1/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>
<body>
    
<div class="login-box">
  <div class="container m-3" >
  <img src="images/logo.png" alt="" srcset="" >
  
</div>
  <h2>Provider Login</h2>
  <form method="post" action="">
    <div class="user-box">
      <input type="email" name="provideremail" required="">
      <label>Email ID</label>
    </div>
    <div class="user-box">
      <input type="password" name="provider_pwd" required="">
      <label>Password</label>
    </div>
   
    <INPUT type="submit" name ="submit" value= "Login" id="sub1">
     
      
  </form>
</div>
</body>
</html>

<?php
session_start();
if(count($_POST)>0){
	$conn= mysqli_connect("localhost", "root", "","job_portal");
	if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
	}
	$email=$_POST['provideremail'];
	$pass=$_POST['provider_pwd'];
	$result=mysqli_query($conn, "select * from job_provider where job_provider_email='$email' AND job_provider_pass='$pass'");
	$row=mysqli_fetch_array($result);
	if(is_array($row))
	{
	$_SESSION['pid']=$row['job_provider_id'];
	$_SESSION['pname']=$row['job_provider_name'];
	}
	else{
		$a="invalid pass";
		header("Refresh:2;url=PROVIDER_LOGIN.php");
		echo $a;
	}
}
if(isset($_SESSION['pid'])){
	header("location:job_post.php");
}					
?>	
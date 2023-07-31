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
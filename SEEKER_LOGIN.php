<?php
session_start();
if(count($_POST)>0){
	$conn= mysqli_connect("localhost", "root", "","job_portal");
	if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
	}
	$email=$_POST['seeker_email'];
	$pass=$_POST['seeker_pass'];
	$result=mysqli_query($conn, "select * from job_seeker where seeker_email='$email' AND seeker_pass='$pass'");
	$row=mysqli_fetch_array($result);
	if(is_array($row))
	{
	$_SESSION['sid']=$row['seeker_id'];
	$_SESSION['sname']=$row['seeker_name'];
	}
	else{
		$a="invalid pass";
		header("Refresh:2;url=SEEKER_LOGIN.php");
		echo $a;
	}
}
if(isset($_SESSION['sid'])){
	header("location:see_jobs.php");
}

 ?>


<DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE> Admin Login</TITLE>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css1/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

	</HEAD>
	<BODY >
   <div class="login-box">
  <div class="container m-3" >
  <img src="images/logo.png" alt="" srcset="" >
  
</div>
  <h2>Seeker Login</h2>
  <form method="post" action="">
    <div class="user-box">
      <input type="email" name="seeker_email" required="">
      <label>Email ID</label>
    </div>
    <div class="user-box">
      <input type="password" name="seeker_pass" required="">
      <label>Password</label>
    </div>
   
    <INPUT type="submit" name ="submit" value= "Login" id="sub1">
     
      
  </form>
</div>

<script>
  
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.Adminid.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         if( document.myForm.Admin_pwd.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
     
         return( true );
      }
	  
	       function validateEmail() {
         var emailID = document.myForm.Adminid.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.EMail.focus() ;
            return false;
         }
         return( true );
      }
   
</script>
</body>
</html>	

				
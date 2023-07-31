<?php 
session_start();
if(count($_POST)>0){
	$conn= mysqli_connect("localhost", "root", "","job_portal");
	if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
	}
	$email=$_POST['Adminid'];
	$pass=$_POST['Admin_pwd'];
	
	$result=mysqli_query($conn, "select * from admin where admin_email='$email' AND admin_pass='$pass'");
	$row=mysqli_fetch_array($result);
	if(is_array($row))
	{
	$_SESSION['aid']=$row['admin_id'];
	$_SESSION['aname']=$row['admin_name'];
	}
	else{
		$a="invalid pass";
		header("Refresh:2;url=ADMIN.php");
		echo $a;
	}
}
if(isset($_SESSION['aid'])){
	header("location:admin-index.php");
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
  <h2>Admin Login</h2>
  <form method="post" action="">
    <div class="user-box">
      <input type="email" name="Adminid" required="">
      <label>Email ID</label>
    </div>
    <div class="user-box">
      <input type="password" name="Admin_pwd" required="">
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
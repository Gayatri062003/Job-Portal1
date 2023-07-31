<?php 
session_start();
?>
<!DOCTYPE html>  
<html>  
<head>  
<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>Contact Us</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link href="css1/style.css" rel="stylesheet">

<link href="css1/bootstrap.min.css" rel="stylesheet">

<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">


<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
</head>  
<body>  
 

       
	  
	  <!-- form ahi thi bc -->
     <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Provider Registration</h1>
	  <div class="login_box">
<form name="myForm" action="provider_reg_db.php" method="post" onSubmit="phonenumber(phone)">  
<div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" 
                                            class="form-control"
                                            name="provider_name" placeholder= "Name" size="15" required value="<?php if(isset($_SESSION['provider_name'])){echo $_SESSION['provider_name']; }?>" minlength="2"  pattern="[a-z A-Z]+">
                                            <label for="provider_name">Name</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                       
                                        <input type="text" name="company_name" 
                                        class="form-control"
                                        placeholder= "Name" size="15" required value="<?php if(isset( $_SESSION['provider_name'])){ echo $_SESSION['company_name'];} ?>" minlength="2"  pattern="[a-z A-Z]+" />  
 
                                            <label for="company_name">Company Name</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                         <div class="form-floating">
                                         <input type="tel" name="phone" 
                                         class="form-control"
                                         placeholder="phone no." size="10" required  value="<?php if(isset( $_SESSION['provider_name'])){ echo $_SESSION['phone'];} ?>" minlength="10" maxlength="10" pattern="[6789][0-9]{9}">
 
                                            <label for="phone">Company Phone </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                         <div class="form-floating">
                                         <input type="email" placeholder="Enter Email" 
                                         class="form-control"
                                         name="email" required value="<?php if(isset( $_SESSION['provider_name'])){echo $_SESSION['email']; }?>"> 
 
                                            <label for="email">Email</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                         <div class="form-floating">
                                         <input type="password" 
                                         class="form-control"
                                         placeholder="Enter Password" name="psw" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"> 
 
                                            <label for="psw">Password</label>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                    <textarea name="company_address" class="form-control"
                                          required><?php if(isset( $_SESSION['provider_name'])){echo $_SESSION['company_address'];} ?></textarea>
 
                                            <label for="company_address">Provider Current Address</label>
                                       </div>
                                       </div>
                                    

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                    </div>
                                </div>
                              </div>
                           </div>
                                
  
<table><TR>
<?PHP

if(isset($_SESSION['passerr'])){
echo $_SESSION['passerr'];
//'<font color="red">Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</font>'; 
}
if(isset($_SESSION['phoneerr'])){
echo $_SESSION['phoneerr'];
//'<font color="red">Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</font>'; 

}
 ?>
	 </tr>

</table>
</div>
</form>  
<script>
function phonenumber(inputtxt)
{
  //var phoneno = /^\d{10}$/;
  var phoneno = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
  if(inputtxt.value.match(phoneno))
  {
      return isValid;
  }
  else
  {
     alert("NOT A VALID PHONE NUMBER");
     return false;
  }
  }
  function perform()
{
 if(isValid)
 {
  return true;
 }
 else
 {
  return false;
 }
}
<?php session_destroy(); ?>
</script>
</body>  
</html>  
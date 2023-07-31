<?php 
session_start();
?>
<!DOCTYPE php>  
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
<header class="header">

     

      </header>

<?PHP

if(isset($_SESSION['passerrs'])){
echo $_SESSION['passerrs'];
} ?>
	 <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Seeker Registration</h1>
	  <div class="login_box">
<form name="myForm" action="provider_reg_db.php" method="post" onSubmit="phonenumber(phone)">  
<div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                        <input type="text" name="seeker_name" 
                                        class="form-control"
                                        placeholder= "Name" size="15" required value="<?php if(isset( $_SESSION['seeker_name'])){echo $_SESSION['seeker_name']; }?>" minlength="2"  pattern="[a-z A-Z]+"/>   
                                            <label for="seeker_name">Name</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-check col-sm-2">
                                        <div class="form-floating">
                                       
                                       
                                          
                                        <input type="radio" 
                                        class="form-check-input"
                                        value="Female" name="gender"> Female

                                   
                                          
                                        </div>
                                    </div>

                                    <div class="form-check col-sm-2">
                                        <div class="form-floating">
                                       
                                        <input type="radio" value="Male" 
                                        class="form-check-input"
                                        name="gender" checked > Male   
                                       
                                        </div>
                                    </div>
                                   

                                    <div class="col-md-6">
                                         <div class="form-floating">
                                         <input type="tel" name="phone" 
                                         class="form-control"
                                         placeholder="phone no." size="10" required  value="<?php if(isset( $_SESSION['provider_name'])){ echo $_SESSION['phone'];} ?>" minlength="10" maxlength="10" pattern="[6789][0-9]{9}">
 
                                            <label for="phone"> Phone </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                         <div class="form-floating">
                                         <input type="tel" name="Aadhar" 
                                         class="form-control"
                                         placeholder="Aadhar no." size="10" required size="10" required  value="<?php if(isset( $_SESSION['seeker_aadhar'])){ echo $_SESSION['seeker_aadhar'];} ?>" minlength="12" maxlength="12" pattern="[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}">
 
                                            <label for="">Aadhar No</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                         <div class="form-floating">
                                         <input type="email" placeholder="Enter Email" name="email"
                                         class="form-control" required value="<?php if(isset( $_SESSION['seeker_email'])){echo $_SESSION['seeker_email']; }?>">
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
                                    <textarea name="seeker_address"
                                    class="form-control"
                                    cols="75" rows="5"  required> 
            <?php if(isset($_SESSION['seeker_address'])){echo $_SESSION['seeker_address'];} ?> 
            </textarea>
                                            <label for="company_address"> Current Address</label>
                                       </div>
                                       </div>
                                    

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                    </div>
                                </div>
                              </div>
                           </div>

  
<tr> 

	</tr>
	</table>
</form>  
</div>
</body>  
<?php session_destroy(); ?>
</html>  
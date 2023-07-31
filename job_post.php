<?php
session_start();
	if($_SESSION["pid"]){
        ?>
        <?php
        }else  
        {
            header("location:PROVIDER_LOGIN.php");
		}

        if(isset($_POST['sub1']))
        {
            header("location:provider_profile.php");
        }
  ?>
  
	
  <!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
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
   <body id="inner_page">
      <!-- header -->
    
      
   <div class="container-xxl bg-white p-0" >


             <!-- Spinner Start -->
        
        <!-- Spinner End -->

        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
            <img src="images/logo.png" class="logo" alt="#" />
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link ">About</a>
                    
                    <a href="logout_p.php" class="nav-item nav-link ">LogOut</a>
                    </div>
                    <a href="contact.php " class="nav-item nav-link ">Contact</a>
                </div>
              
            </div>
   </nav>


   <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Provider</h1>
               
                
                      

                            
                            <form action="job_post_db.php" method="post">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Job title">
                                            <label for="name">Job Title</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                        <select 
                                        name="job_category"
                                        class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option value="Business Development Manager">Business Development Manager</option>
	
	<option value="Business Analyst">Business Analyst</option>
	
	<option value="Human Resource Manager">Human Resource Manager</option>
	
	<option value="Project Manager">Project Manager</option>
	
	<option value=" Management Consultant"> Management Consultant</option>
	
	<option value="Marketing Manager">Marketing Manager</option>
	
	<option value="Accounting Consultant">Accounting Consultant</option>
	
	<option value="Digital Marketing Strategist">Digital Marketing Strategist</option>
	
	<option value="Operations Manager">Operations Manager</option>
	
	<option value="Sales Operations Analyst">Sales Operations Analyst</option>
   </select>
 
                                            <label for="job_category">Job Category</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                         <div class="form-floating">
                                        <select 
                                        name="job_location"
                                        class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                       
	
                                        <option value="Ahmedabad">Ahmedabad</option>
	
	                                    <option value="Surat">Surat</option>
	
	                                    <option value="Rajkot">Rajkot</option>
   </select>
 
                                            <label for="job_location">Job Category</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                         <div class="form-floating">
                                        <select 
                                        name="job_months_experiane"
                                        class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option value="0">0</option>
	
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option><option value="7">7</option><option value="8">8</option>
   </select>
 
                                            <label for="job_months_experiane">Job Experiance Required </label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                         <div class="form-floating">
                                        <select 
                                        name="job_hours"
                                        class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option value="0">0</option>
	
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option><option value="7">7</option><option value="8">8</option>
   </select>
 
                                            <label for="job_hours">Job Hours </label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                       <div class="form-floating">
                                       <textarea name="job_description" class="form-control" required></textarea>

                                       <label for="job_description">Job Description </label>
                                       </div>
                                       </div>
                                    

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Post Job</button>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" name="sub1">Post Job</button>
                                    </div>
                                </div>
                            </form>

                            
                     
         


        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Location, City, Country</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>jayraval@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://freewebsitecode.com">Your Site Name</a>, All Right Reserved. 
							
							
							Designed By <a class="border-bottom" href="https://freewebsitecode.com">Free Website Code</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <!-- <section class="layout_padding section">
         <div class="container">
           <div class="row">
               <div class="col-md-12">
                  <div class="contact_section margin_top_30">
                     <div class="row">
                        <div class="col-md-8 offset-md-2">
                           <div class="form_cont">
                               <form action="index.html">
                                  <fieldset>
                                     <div class="field">
                                         Jay Raval<input type="text" name="email" placeholder="Name" value="186330307087.jay.raval@gmail.com" disabled>
                                     </div>
                                     <div class="field">
                                       rhythm patel<input type="text" name="email" placeholder="Name" value="186330307076.rhythm.patel@gmail.com" disabled>
                                     </div>
                                     <div class="field">
                                        vandit shah<input type="text" name="email" placeholder="Name" value="186330307120.vandit.shah@gmail.com" disabled>
                                     </div>
                                     <div class="field">
                                   
                                     </div>
                                     <div class="field center">
                                      
                                  </div></fieldset>
                               </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
   </div>
    
    <!-- section -->
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
   </body>
</html>



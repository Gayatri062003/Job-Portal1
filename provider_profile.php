	
<?php	
session_start();
	if($_SESSION["pid"]){
        ?>
        <?php
        }else  
        {
            header("location:PROVIDER_LOGIN.php");
        }
   
	$con= mysqli_connect("localhost","root","","job_portal");

	$sql="SELECT jobs.job_id, jobs.job_category, jobs.job_title, jobs.job_hours, jobs.job_description, jobs.job_experience, jobs.posted_date, jobs.job_city from jobs where jobs.job_provider_id='" . $_SESSION["pid"] . "' ";
	
	$sql2="SELECT jobs.job_id, jobs.job_category, jobs.job_title, jobs.job_hours, jobs.job_description, response.job_id, response.seeker_id, response.resume, response.status, job_seeker.seeker_name, job_seeker.seeker_email, job_seeker.seeker_phone from jobs, response, job_seeker where jobs.job_id= response.job_id AND jobs.job_provider_id ='" . $_SESSION["pid"] . "'  AND job_seeker.seeker_id=response.seeker_id"  ;
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));
	$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
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




<div class="panelLinks">
		
	
		<center>posted jobs</center>
		
		
		</div>
			
			
			<div class="seekeradmin">
				<center><table class="table">
					<tr>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|JobID|    &nbsp &nbsp    </font></th>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job Title|    &nbsp &nbsp      </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job description|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job hours|      &nbsp &nbsp  </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job experiance|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job category|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job city|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|posted date|      &nbsp &nbsp  </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Edit|  &nbsp &nbsp     </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Delete|    &nbsp &nbsp     </font></th>


					</tr>
					<tr>
						<?php 
						$i=0;
						
					while($row= mysqli_fetch_array($result)){
					?><tr>
										
					<td><?php echo $row["job_id"];?></td>
					<td><?php echo $row["job_title"];?></td>
					<td><?php echo $row["job_description"];?></td>
					<td><?php echo $row["job_hours"];?></td>
					<td><?php echo $row["job_experience"];?></td>
					<td><?php echo $row["job_category"];?></td>
					<td><?php echo $row["job_city"];?></td>
					<td><?php echo $row["posted_date"];?></td>
					<td>
					<a href="edit_jobs.php?id=<?php echo $row["job_id"]; ?>">Edit</a>
							</td>
							<td>
							<a  onclick='check()' href="delete_jobs.php?id=<?php echo $row["job_id"];  ?>">Delete</a>
							</td>
					</tr>
					
					<?php $i++; }
				
					?>
					
					</table></center>
					</div>
					
					
					
					
		<div class="panelLinks">
		<ul>
	
		<li>Responses on my jobs</li>
		
		</ul>
		</div>
			
			
			<div class="seekeradmin">
				<center><table class="table">
					<tr>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|JobID|    &nbsp &nbsp    </font></th>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job Title|    &nbsp &nbsp      </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job seeker id|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job seeker name|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job seeker email|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job seeker phone|      &nbsp &nbsp  </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Resume Link|    &nbsp &nbsp     </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Accept Job|    &nbsp &nbsp     </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Decline Job|    &nbsp &nbsp     </font></th>


					</tr>
					<tr>
						<?php 
						$i=0;
						
					while($row= mysqli_fetch_array($result2)){
					?><tr>
										
					<td><?php echo $row["job_id"];?></td>
					<td><?php echo $row["job_title"];?></td>
					<td><?php echo $row["seeker_id"];?></td>
					<td><?php echo $row["seeker_name"];?></td>
					<td><?php echo $row["seeker_email"];?></td>
					<td><?php echo $row["seeker_phone"];?></td>
					<td><a href="<?php echo $row["resume"];?>">Resume</a></td>
				<td><?php
					if($row['status']==1){
						echo '<font color="green"> Accepted</font>';
					}
					else{
						
							?><a href="accept_job.php?id=<?php echo $row["seeker_id"]; ?>">Accept</a>
							</td><?php } ?>
							<td><?php
					if($row['status']==2){
						echo '<font color="red"> Declined</font>';
					}
					else{
						?>
							<a onclick="check()" href="decline_job.php?id=<?php echo $row["seeker_id"]; ?>">Decline</a>
							</td><?php } ?>
					</tr>
					
					<?php $i++; }
				
					?>
					
					</table></center>
					</div>
							
				
		<script type = "text/javascript">
  
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
	  function check()
	  {
		  confirm("Are you sure you want to decline?");
	  }
   //-->
</script>
	</div>
	</body>
	</html>
				
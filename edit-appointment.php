<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


	</head>
	<body>
		<div id="app">		
		<?php include("include/connect.php");?>	
<?php include('include/sidebar1.php');?>
			<div class="app-content">
				
						<?php include('include/header1.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
								<h1 class="mainTitle">User | Book Appointment</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
							<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12 height-100vh">
									<div class="panel panel-white">
										<div class="panel-body">
										<form role="form" name="book" method="post" class="col-sm-5 border-radius-6">
														


										<div class="form-group">
               <label for="Doctor Specialization">
			   Doctor Specialization
			   </label> 
               <select class="form-control" name="Specialization" required> 
			   <?php

				$sele1=mysqli_query($con,"SELECT * FROM doctor_specialization ");
				if (mysqli_num_rows($sele1)>0) {
					?>
					
					<?php
				while ($frow=mysqli_fetch_array($sele1)) { 
					?>
				<option value="<?php echo $frow["docspecialization"] ?>"><?php echo $frow["docspecialization"] ?></option>
			<?php
				}
				}else{
					?>
					<option>no apoointment</option>
					<?php
				}
			   ?>
			   </select>
            </div>
			
			<div class="form-group">
               <label for="Consultancy Fees">
			   Consultancy Fees
			   </label> 
               <input type="text" name="consultancy" placeholder="Enter Consultancy Fees" class="form-control" required>
            </div>
			<div class="form-group">
               <label for="Date">
			   Date
			   </label> 
               <input type="date" name="date" class="form-control" required>
            </div>
			<div class="form-group">
               <label for="Time">
			   Time
			   </label> 
               <input type="time" name="time" class="form-control" required>
            </div>
			<div class=" justify-content-center ">
                <button type="submit" name="update" class="btn">Update</button>
            </div>
			
			</form>
			
			
										</div>
									</div>
								</div>
								
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>



<?php
include("include/connect.php");
error_reporting(0);
session_start();

if(isset($_POST['update'])){
    $id=$_POST['id'];
	$a=$_POST['Specialization'];
	$b=$_POST['Doctor'];
	$c=$_POST['consultancy'];
	$d=$_POST['date'];
	$e=$_POST['time'];
	

	$upd="UPDATE book_appointment SET Specialization='$a',Doctor='$b',consultancy='$c',date='$d',time='$e' WHERE id='$id'";
	$rs=mysqli_query($con,$upd);

	if($rs){
		header("location:appointment.php");
	}else{
		echo"Fail To Update";
	}
}

?>
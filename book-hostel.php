<?php
session_start();
if(isset($_SESSION["username"])){
	if($_SESSION["account"]=="patient"  OR $_SESSION["account"]=="admin"){

	}else{
		echo"<script>alert('you must be Admin or patient')</script>";
	}

}else{
	header("location:../patient_log.php");
}
?>
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
								<h1 class="mainTitle">User |Applying Hostel</h1>
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
<?php
$fff=$_SESSION['username'];
$que=mysqli_query($con,"SELECT * FROM hostelbooking WHERE studentregnumber='$fff' AND status !='Rejected'");
if (mysqli_num_rows($que)>0) {

?>

<h1  >You have already Applied for hostel!</h1>


<?php

}else{

?>

										<div class="panel-body">
										<form role="form" name="book" method="post" class="col-sm-5 border-radius-6">
														


										<div class="form-group">
               <label for="Doctor Specialization">
			   HostelName
			   </label> 
               <select class="form-control" name="hostelName" required> 
			   <?php

				$sele1=mysqli_query($con,"SELECT * FROM hostels WHERE status !='Taken' ");
				if (mysqli_num_rows($sele1)>0) {
					?>
					
					<?php
				while ($frow=mysqli_fetch_array($sele1)) { 
					?>
				<option value="<?php echo $frow["hostelname"] ?>"><?php echo $frow["hostelname"] ?></option>
			<?php
				}
				}else{
					?>
					<option>no hostel</option>
					<?php
				}
			   ?>
			   </select>
            </div>
			
<!-- 			<div class="form-group">
               <label for="Consultancy Fees">
			   Consultancy Fees
			   </label> 
               <input type="text" name="consultancy" placeholder="Enter Consultancy Fees" class="form-control" required>
            </div> -->
<!-- 			<div class="form-group">
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
            </div> -->
			<div class=" justify-content-center ">
                <button type="submit" name="booking" class="btn">SEND</button>
            </div>
			
			</form>
			
			
										</div>

<?php

}

?>












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

if(isset($_POST['booking'])){
	$a=$_POST['hostelName'];
	$b=$_SESSION["username"];
	$ins="INSERT INTO hostelbooking SET hostelname='$a',status='pending',studentregnumber='$b'";
	$rs=mysqli_query($con,$ins);
	if($rs){
		echo"<script>alert('Hostel booked')</script>";

				?>
				<script type="text/javascript">
			window.location = window.location.href="application-history.php";
		</script>
	<?php 
	}else{
		echo"Fail To Insert".$con->error();
		echo"<script>alert('Hostel Application sent')</script>";
	}
}

?>
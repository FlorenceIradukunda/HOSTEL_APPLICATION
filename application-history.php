
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
$f=$_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Student  | Dashboard</title>
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
								<h1 class="mainTitle">Student | Book Appointment</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Student</span>
									</li>
									<li class="active">
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
						
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12 height-100vh">
									<div class="panel panel-white">
										<div class="panel-body">
										
										<?php
                                        include('include/connect.php');
                                        error_reporting(0);
										session_start();
										$ff=$_SESSION['username'];
										
                                        $sele="SELECT * FROM hostelbooking WHERE studentregnumber='$ff' ";
										$s=mysqli_query($con,$sele);
										
										if(mysqli_num_rows($s)>0){
                                        echo"<table class='table table-hover'>";
                                        echo"<tr><th>Id_N<sup>o</sup></th>
                                        <th>Hostel_Name</th>
                                        <th>StudentRegnumber</th>
                                        <th>dateBooked</th>
										<th>Status</th>
										<th>Action</th>
										</tr>";
										
                                        $i=0;
                                        while($row=mysqli_fetch_array($s)){
										$i++;
										?>
										<tr>
										<form method='post' action="cancelandreturn.php">
	                                    <td><?php echo $row['Id'] ?><input type='text' name='id' value="<?php echo $row['Id'] ?>" hidden></td>
	                                    <td><?php echo $row['hostelname'] ?><input type='text' name='hosteln' value="<?php echo $row['hostelname'] ?>" hidden></td>
	                                    <td><?php echo $row['studentregnumber']?></td>
	                                    <td><?php echo $row['bookedat']?></td>
										<td>
											<?php echo $row['status']?>
												
											</td>
										<td>
										<!--<button class="btn btn-primary" name="approve">Approved</button>-->

										<?php
										if ($row["status"]=='Rejected') {
											?>
										<del class="btn text-warning" disabled><del>Rejected</del></del>
										<?php
									}else if ($row["status"]=='Approved'){
																			?>
										<button class="btn btn-primary" type="submit" name="return">Return</button>
									<?php		
									}else{
										?>
										<button class="btn btn-danger" type="submit" name="cancel">Cancel</button>
										<?php											
									}
										?>
										</td>
										</form>
	                                    </tr>
    
									   <?php 
									   }
									   ?>
									   </table>
									   <?php
									 }else{
										echo "There is no appointmet history availabale";
									 }
									
										
                                        ?>
	
			
			
										</div>
									</div>
								</div>
								
				</div>
				
			</div>
			
			
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

					<?php
include("include/connect.php");

				if (isset($_POST["cancel"])) {
					$a=$_POST["id"];
					$ab=$_POST["hosteln"];
					$cancel=mysqli_query($con,"DELETE FROM hostelbooking  WHERE Id='$a'");
					if ($cancel) {
				$canceld=mysqli_query($con,"UPDATE hostels SET status='Available'  WHERE hostelname='$ab'");	
						
		echo"<script>alert('canceled')</script>";
							?>
				<script type="text/javascript">
			window.location = window.location.href="application-history.php";
		</script>
	<?php 
					}else{
						echo"<script>alert('Appointment not canceled')</script>";
					}
				}
				if (isset($_POST["return"])) {
					$a=$_POST["id"];
					$ab=$_POST["hosteln"];
					$cancel=mysqli_query($con,"DELETE FROM hostelbooking  WHERE Id='$a'");
					if ($cancel) {
				$canceld=mysqli_query($con,"UPDATE hostels SET status='Available'  WHERE hostelname='$ab'");		echo"<script>alert('Returned')</script>";
					?>
				<script type="text/javascript">
			window.location = window.location.href="application-history.php";
		</script>
	<?php 
					}else{
						echo"<script>alert('Appointment not canceled')</script>";
					}
				}


				?>	
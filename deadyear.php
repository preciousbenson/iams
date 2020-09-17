<?php 
	
	require 'conn.php';

	if (isset($_POST['submit'])) {
		# code...
		$name = $_POST['name'];
		$reg_no = $_POST['regNo'];
		$access = $_POST['accessNo'];
		$faculty = $_POST['faculty'];
		$dept = $_POST['dept'];
		$course = $_POST['course'];
		$yos = $_POST['yos'];
		$csem = $_POST['csem'];
		$reason = $_POST['reason'];
		$deadsem = $_POST['deadsem'];
		$resume = $_POST['resume'];
		$date = $_POST['date'];

		$insert = "INSERT INTO dead_sem_application_tbl (name, regNo, accessNo, faculty, dept, course, yos, csem, reason, deadsem,	resume, date) VALUES ('$name', '$reg_no', '$access', '$faculty', '$dept', '$course', '$yos', '$csem', '$reason', '$deadsem', '$resume', '$date')";

		if (mysqli_query($conn, $insert)) {
			# code...
			?>
				<script type="text/javascript">
					window.alert("Submitted Successfully!");
					window.location.href = "home1.html";
				</script>
			<?php

		} else {
			# code...

			?>
				<script type="text/javascript">
					window.alert("Submit failed\nCheck your Entry and ReSubmit");
					window.location.href = "deadyear.html";
				</script>
			<?php
		}
		

	} else {
		# code...
	}
	

 ?>
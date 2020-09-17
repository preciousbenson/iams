<?php

	require 'conn.php';
	require 'register.php';
	// require 'registeration.php';

	if (isset($_POST['login'])) {
		# code...

		$email = $_POST['email'];
		$password = $_POST['password'];

		// $que = "SELECT password FROM register_tbl WHERE email = '$email'";
		// $res = mysqli_query($conn, $que);
		
		// $pswdrow = mysqli_fetch_array($res);
		// // $hash = $pswdrow['passwword'];

		// // $hashVerify = password_verify($password, $hash);

		$query = "SELECT * FROM register_tbl WHERE email = '$email' AND password = '$password'";
		// $query = "SELECT * FROM staff_tbl WHERE email = '$email' AND password = '$password'";

		$result = mysqli_query($conn, $query);

		if ($row = mysqli_fetch_array($result)) {
			# code...

			session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['email'] = $row['email'];

			$id = $row['id'];
			$user = $row['email'];

			if ($email == $user) {
				# code...
				?>

				<script type="text/javascript">
					window.alert("Log in Successful!");
					window.location.href = 'home1.html';
				</script>

				<?php
			} 
		} else {
			# code...
			?>

			<script type="text/javascript">
				window.alert("The Email or Password you entered is incorrect\nPlease Enter the correct Credentials");
				// window.location.href = 'Application.html';
			</script>

			<?php
			// echo $pswdrow;
		}
		

	} else {
		# code...
	}
	
  ?>
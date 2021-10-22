<?php

if (!isset($_GET["register"]))
{
echo " <div class='row'>";
echo " 	<div class='col-lg-5'>";
echo " 		<form method='post' action='index.php?show=register&register=save'>";
echo " 			<h1>Register</h1>";
echo " 		  <div class='form-group'>";
echo " 		    <label for='exampleInputEmail1'>Name</label>";
echo " 		    <input type='username' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter name' name='name'>    ";
echo " 		  </div>";
echo " 		  <div class='form-group'>";
echo " 		    <label for='exampleInputEmail1'>Name</label>";
echo " 		    <input type='username' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter Username' name='username'>    ";
echo " 		  </div>";
echo " 		  <div class='form-group'>";
echo " 		    <label for='exampleInputPassword1'>Password</label>";
echo " 		    <input type='email' class='form-control' id='exampleInputPassword1' placeholder='Enter Email' name='email'>";
echo " 		  </div>";
echo " 		  <div class='form-group'>";
echo " 		    <label for='exampleInputPassword1'>Password</label>";
echo " 		    <input type='password' class='form-control' id='exampleInputPassword1' placeholder='Password' name='password'>";
echo " 		  </div>";
echo " 		  <button type='submit' class='btn btn_darkred_white_innerfade btn-outline-info'>Register</button>		  ";
echo " 		</form>	";
echo " 	</div>";
echo " 	</div>";
}
else {
	$register = $_GET["register"];
	if($register == 'save') {
		$name = $_POST["name"];
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		// double check terhadap NPM
		$perintah = "select *
						from user
						where username='$username'";
		$query = mysqli_query($con,$perintah);
		$byk_record = mysqli_num_rows($query);
		if($byk_record > 0) {
			echo "
			<script>
				alert('Email registered !');
				window.location.href='index.php?show=register';
			</script>";
		}
		else {
			// insert ke database
			$perintah = "INSERT INTO user (`username`, `password`, `nama`, `email`, `level`, `wallet`) VALUES
						('$username', '$password', '$name', '$email', 1, 0)";
			$query = mysqli_query($con,$perintah);
			if(!$query) {
				die("Data gagal disimpan!");
			}
			else {
				echo "
				<script>
					alert('User registered !');
					window.location.href = 'index.php?show=signin';	// redirecting
				</script>";
			}
		}	
	}
}
?>
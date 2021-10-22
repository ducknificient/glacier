<?php

if(!isset($_GET["a"])){	
echo " <div class='row'>";
echo " 	<div class='col-lg-5'>";
echo " 		<form method='post' action='index.php?show=signin&a=in'>";
echo " 			<h1>Sign In</h1>";
echo " 		  <div class='form-group'>";
echo " 		    <label for='exampleInputEmail1'>Email address</label>";
echo " 		    <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email' name='email'>    ";
echo " 		  </div>";
echo " 		  <div class='form-group'>";
echo " 		    <label for='exampleInputPassword1'>Password</label>";
echo " 		    <input type='password' class='form-control' id='exampleInputPassword1' placeholder='Password' name='password'>";
echo " 		  </div>";
echo " 		  <div class='form-group form-check'>";
echo " 		    <input type='checkbox' class='form-check-input' id='exampleCheck1'>";
echo " 		    <label class='form-check-label' for='exampleCheck1'>Remember me</label>";
echo " 		  </div>";
echo " 		  <button type='submit' class='btn btn_darkred_white_innerfade btn-outline-info'>Sign In</button>		  ";
echo " 		</form>	";

echo " 		<div class='form-group'>";
echo " 			<label class='form-check-label' for='exampleCheck1'>";
echo " 				<a href=''>Forgot your password ?</a>";
echo " 			</label>";
echo " 		</div>";
echo " 	</div>";
echo " 	<div class='col-lg-1'>";
echo " ";
echo " 	</div>";
echo " 	<div class='col-lg-6'>";
echo " 		<h1>Create</h1>						";
echo " 		<p>A new free account</p>";
echo " 		<p>It's free to join and easy to use. Continue on to create your Glacier account and get Glacier, the leading digital solution for PC, Mac, and Linux games and Software.</p>";
echo " 		<a href='index.php?show=register'>";
echo "         	<button class='btn_darkblue_white_innerfade btn-lg btn-outline-info' type='button'>Join Now</button>";
echo "       	</a>";
echo " 	</div>";
echo " </div>";
echo " ";
echo " <div class='row'>";
echo " 	<div class='col-lg-1'>		";
echo " 	</div>";
echo " 	<div class='col-lg-11'>		";
echo " 		<h1>Why Join Glacier?</h1>";
echo " 		<ul>";
echo " 		<li> Buy and download full retail games</li>";
echo " 	                                <li> Available for PC, Mac, and Linux</li>";
echo " 	                                <li> Receive automatic game updates</li>";
echo " 	                                <li> Download extras from the Workshop</li>";
echo " 	                                <li> Voice and text chat with friends</li>";
echo " 	                                <li> View rich friend activity and status</li>";
echo " 	                                <li> Rate and comment on Game Hubs</li>";
echo " 	                                <li> Join or create groups and events</li>		</ul>";
echo " 		<p><a href='about'>Learn more about Glacier</a></p>";
echo " 		<p><a href='about' class='btn_grey_white_innerfade btn_medium'><span>Install Glacier</span></a></p>";
echo " 	</div>";
echo " 	";
echo " 	<div class='col-lg-7'>";
echo " 	</div>";
echo " </div>";
}
else{
	$a = $_GET["a"];
	if($a == "in")
	{
		// cari username dan password di tabel
		$email = $_POST["email"];
		//$password = md5($_POST["password"]);
		$password = $_POST["password"];
		$perintah = "select * 
						from user
						where email ='$email' and password='$password'";
		$query = mysqli_query($con,$perintah);
		
		// cek hasil pencarian data
		$byk_record = mysqli_num_rows($query);
		if($byk_record == 0){
			echo "
			<script>
				alert('Email atau password anda salah!');
				window.location.href='index.php?show=signin';
			</script>";
		}
		else {
			$hasil = mysqli_fetch_array($query);
			$_SESSION["email"] = $hasil["email"];
			$level = $hasil["level"];
			if($level == "0"){
				echo "
				<script>
					window.location.href='index.php';
				</script>";
			}
			else {
				echo "
				<script>
					window.location.href='index.php';
				</script>";
			}
		}		
		echo "
		<script>
			window.location.href='index.php';
		</script>";
	}
	else if ($a == "out")
	{		
		session_destroy();
		unset($_SESSION);
		echo "
		<script>
			window.location.href='index.php';
		</script>";
	}

}
?>
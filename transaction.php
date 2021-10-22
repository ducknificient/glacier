<?php
		$email = $_SESSION["email"];
		$perintah = "select * 
						from user
						where email ='$email'";
		$query = mysqli_query($con,$perintah);
		$hasil = mysqli_fetch_assoc($query);		
		$username = $hasil["username"];

if(isset($_GET["user"]))
{
	$user = $_GET["user"];
	if ($user == $username)
	{
		echo "tampil disini";
		echo "<form action='index.php?show=transaction' method='post'>";
		echo "";
		echo "";
		echo "";	
		echo "";
		echo "";
		echo "";
		echo "";
		echo "";
	}
	else
	{
		echo " error transaction ";
	}
}

?>
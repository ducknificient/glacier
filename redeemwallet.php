<?php

echo "<div class='container-fluid'>";
echo "	<div class='row' style='margin-top:1%'>";
echo "		<div class='col-lg-12' style='margin-top:1%'>";
echo "			<h1>REDEEM A GLACIER GIFT CARD OR WALLET CODE</h1>";
echo "		</div>";
echo "	</div>";
echo "";
echo "	<div class='row'>";
echo "		<div class='col-lg-7'>";
echo "			<p>";
echo "				Enter your Steam Wallet Code to add funds to your Steam Wallet";
echo "			</p>";
echo "			<p>Wallet Code</p>";
echo "			<form class='' method='post' action='index.php?show=redeemwallet&wallet=insert'>";
echo "				<div class='form-group'>";
echo "				<input class='form-control-lg col-lg-2' name='code1' type='text' placeholder='insert'>";
						echo "-";
echo "				<input class='form-control-lg col-lg-2' name='code2' type='text' placeholder='wallet'>";
						echo "-";
echo "				<input class='form-control-lg col-lg-2' name='code3' type='text' placeholder='code'>";
						echo "-";
echo "				<input class='form-control-lg col-lg-2' name='code4' type='text' placeholder='here'>";

echo "				</div>				";
echo "";
echo "				<button type='submit' class='btn btn-primary'>Submit</button>";
echo "			</form>";							

echo "		</div>";
echo "		<div class='col-lg-5'>";
echo "		<div class='block accountInfoBlock'>";
echo "					<div class='block_header'>";
echo "						<div>Your Steam Account</div>";
echo "					</div>";
echo "					<div class='block_content block_content_inner'>";

      	$email = $_SESSION["email"];
        $perintah = "select username,wallet 
                from user
                where email='$email'";                        
          $query = mysqli_query($con,$perintah);
          $hasil = mysqli_fetch_array($query);
          //$username = $hasil["username"];
          $wallet = $hasil["wallet"];

echo "						<div class='addfunds_accountBalance accountRow accountBalance'>							";
echo "							<div class='accountLabel'>";
echo "								Wallet balance IDR $wallet";
echo "							</div>";
echo "						</div>";
echo "						";
echo "						<a class='addfunds_linkbar linkbar' href='index.php?show=detailprofile'>See my account details</a>	";
echo "					</div>";
echo "		</div>					";
echo "		</div>		";
echo "	</div>";
echo "</div>";

if (isset($_GET["wallet"]))
{
	$code1 = $_POST["code1"];
	$code2 = $_POST["code2"];
	$code3 = $_POST["code3"];
	$code4 = $_POST["code4"];
	$codeinserted = "$code1" . "-" . "$code2" . "-" . "$code3" . "-" . "$code4";	

	// DLKC-JCEC-OEWS-SFWD
	$perintah2 = "select walletcode,status,walletvalue from wallet where walletcode ='$codeinserted'";
	$query2 = mysqli_query($con,$perintah2);
	$byk_record = mysqli_num_rows($query2);
	if ($byk_record == 0)
	{
		echo "
		<script>
			alert('Wallet code salah !');
			window.location.href='index.php?show=redeemwallet';
		</script>";		
	}
	else
	{				
		$hasil2 = mysqli_fetch_array($query2);
		$walletcode = $hasil2["walletcode"];		
		$status = $hasil2["status"];
		$walletvalue = $hasil2["walletvalue"];
		if ($status == 0)
		{
			//echo "$wallet" . " xx " . "$walletvalue" . " xx " . "$email" . "<br>";			
			$addwallet = $wallet + $walletvalue;			
			$perintah3 = "update user
							set wallet = '$addwallet' where email='$email'";
			//echo "$addwallet" . " xx " . "$perintah3";			
			$query3 = mysqli_query($con,$perintah3);
			$perintah4 = "update wallet
							set status = '1', redeemeduser ='$username' where walletcode ='$walletcode'";
			//echo "$addwallet" . " xx " . "$perintah3";			
			$query4 = mysqli_query($con,$perintah4);
			echo "
			<script>				
				alert('Wallet code sebesar $walletvalue berhasil diisi !');
				window.location.href='index.php?show=redeemwallet';
			</script>";	
			/*
				update wallet set status = '0', redeemeduser = '' where walletcode ='DLKC-JCEC-OEWS-SFWD';
			*/	
			//*/
		}
		else if ($status == 1)
		{
			echo "
			<script>
				alert('Wallet code sudah digunakan !');
				window.location.href='index.php?show=redeemwallet';
			</script>";		
		}    	
	}    

}
?>



<!-- next thing to do -->
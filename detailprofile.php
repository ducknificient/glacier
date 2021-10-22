<?php
    if(!isset($_SESSION["email"])){
		Echo "<script>";
		Echo "window.location.href='index.php?show=signin';";
		Echo "</script>";    	        
    }
    else{

      $email = $_SESSION["email"];
          $perintah = "select username,wallet,email,phone
                from user
                where email='$email'";                        
          $query = mysqli_query($con,$perintah);
          $hasil = mysqli_fetch_array($query);
          $username = $hasil["username"];
          $wallet = $hasil["wallet"];
          //$email = $hasil["email"];
          $phone = $hasil["phone"];
?>

<div class="container-fluid">
	<div class="row" style="margin-top:1%">
		<div class="col-lg-12" style="margin-top:1%">
			<h1><?php echo strtoupper($username."'s Account") ?></h1>
		</div>
	</div>
	<div class="row" style="margin-top:1%;">
		<div style="background-color:grey;width:100%;">
			<img src='Pictures/design/cart.png' alt='cart.png' width="30px" height="30px" style="display:inline-block">
			<span style="margin-top:2px;display:inline-block;color:white">STORE & PURCHASE HISTORY</p></span>
		</div>
		<div class="col-lg-12 glacier-bcc-background">
			<div class="row">
				<div class="col-lg-6">					
					<a href="index.php?show=addfunds">
						+ Add funds to your Steam Wallet					</a>
					<div>
						<span>Wallet Balance: <?php echo "IDR " . $wallet ?></span>						
						<span><a href="https://store.steampowered.com/account/history/"></a></span>							
					</div>							
						<p>You have no payment methods associated with this account.</p>
						<a class="account_manage_link" href="https://store.steampowered.com/checkout/?purchasetype=updatebillinginfo">Add a payment method to this account</a>					
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href=''>View Purchase History</a>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href=''>View License and Product Key Activation</a>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row" style="margin-top:1%;">
		<div style="background-color:grey;width:100%;">
			<img src='Pictures/design/email.png' alt='email.png' width="30px" height="30px" style="display:inline-block">
			<span style="margin-top:2px;display:inline-block;color:white">Contact Info</p>
		</div>		
		<div class="col-lg-12 glacier-bcc-background">
			<div class="row">
				<div class="col-lg-6">
					<div>
						<a href="https://store.steampowered.com/account/emailoptout" style="margin-top: 8px;">
							Manage Email Preferences							</a>
					</div>
					<div>
						<div>
							<span>Email address: </span> <span><?php echo $email ?></span>
						</div>
						<div>
							<span>Status:</span>
								<a href="https://support.steampowered.com/kb_article.php?ref=5151-RUAS-1543">Verified</a>
						</div>
					</div>								
					<div>
						<a href="https://help.steampowered.com/en/wizard/HelpChangeEmail?redir=store/account/">Change my email address</a>
					</div>			
				</div>
				<div class="col-lg-6">			
					<div>
						<a href="https://store.steampowered.com/phone/manage">
							Manage your phone number							</a>
						</div>
					<div>
						<div class="phone_header_description">
							Phone:
								<img src="Pictures/design/phone.png" alt="">
								<span class="account_data_field">Ends in <?php echo substr($phone,-2) ?></span>
						</div>
					</div>										
				</div>
			</div>
		</div>
	</div>
  <!-- Content here -->
</div>
<br>

<?php } ?>
<div class="container-fluid">
	<div class="row" style="margin-top:1%">
		<div class="col-lg-12" style="margin-top:1%">
			<h1>ADD FUNDS TO YOUR GLACIER WALLET</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<P>ADD FUNDS TO YOUR GLACIER WALLET</P>
			<p>
			Funds in your Steam Wallet may be used for the purchase of any game on Steam or within a game 
			<br>
			that supports Steam transactions.
			<br>
			<br>
			You’ll have a chance to review your order before it’s placed.
			</p>
		</div>
	</div>
	<div class ="row">
		<div class="col-lg-7">
			<div class="row">
				<div class="alert alert-dark col-lg-12">
					<div class="addfunds_purchase_action game_purchase_action" style="float: right">
						<div class="game_purchase_action_bg">							
							<div class="game_purchase_price price">
								Rp 45 000								
							</div>
								<a class="btnv6_green_white_innerfade btn_medium" href="#">
									<span>Add funds</span>
								</a>
						</div>
					</div>						
					
					<h1>Add Rp 45 000</h1>
					<p>Minimum fund level</p>

				</div>		
			</div>

			<div class="row">
				<div class="alert alert-dark col-lg-12">
					<div class="addfunds_purchase_action game_purchase_action" style="float: right">
						<div class="game_purchase_action_bg">							
							<div class="game_purchase_price price">
								Rp 90 000
							</div>
								<a class="btnv6_green_white_innerfade btn_medium" href="#">
									<span>Add funds</span>
								</a>
						</div>
					</div>						
					
					<h1>Add Rp 90 000</h1>
					<p>&nbsp;</p>

				</div>			
			</div>

			<div class="row">
				<div class="alert alert-dark col-lg-12">
					<div class="addfunds_purchase_action game_purchase_action" style="float: right">
						<div class="game_purchase_action_bg">							
							<div class="game_purchase_price price">
								Rp 225 000
							</div>
								<a class="btnv6_green_white_innerfade btn_medium" href="#">
									<span>Add funds</span>
								</a>
						</div>
					</div>						
					
					<h1>Add Rp 225 000</h1>
					<p>&nbsp;</p>

				</div>			
			</div>

			<div class="row">
				<div class="alert alert-dark col-lg-12">
					<div class="addfunds_purchase_action game_purchase_action" style="float: right">
						<div class="game_purchase_action_bg">							
							<div class="game_purchase_price price">
								Rp 450 000
							</div>
								<a class="btnv6_green_white_innerfade btn_medium" href="#">
									<span>Add funds</span>
								</a>
						</div>
					</div>						
					
					<h1>Add Rp 450 000</h1>
					<p>&nbsp;</p>

				</div>			
			</div>

			<div class="row">
				<div class="alert alert-dark col-lg-12">
					<div class="addfunds_purchase_action game_purchase_action" style="float: right">
						<div class="game_purchase_action_bg">							
							<div class="game_purchase_price price">
								Rp 900 000
							</div>
								<a class="btnv6_green_white_innerfade btn_medium" href="#">
									<span>Add funds</span>
								</a>
						</div>
					</div>						
					
					<h1>Add Rp 900 000</h1>
					<p>&nbsp;</p>

				</div>			
			</div>
		</div>

		<div class="col-lg-5">
				<div class="block accountInfoBlock">
					<div class="block_header"><div>Your Steam Account</div></div>
					<div class="block_content block_content_inner">
						<div class="addfunds_accountBalance accountRow accountBalance">
<?php							
      $email = $_SESSION["email"];
          $perintah = "select username,wallet 
                from user
                where email='$email'";                        
          $query = mysqli_query($con,$perintah);
          $hasil = mysqli_fetch_array($query);
          //$username = $hasil["username"];
          $wallet = $hasil["wallet"];

echo "								<div class='accountLabel'>Current Wallet balance</div>";
echo "								<div class='accountData price'>IDR $wallet</div>";
echo "												</div>";
?>												
												<a class="addfunds_linkbar linkbar" href="index.php?show=detailprofile">See my account details</a>
												<br>
							<a class="addfunds_linkbar linkbar" href="index.php?show=redeemwallet">Redeem a Steam Gift Card or Wallet Code</a>
										</div>
				</div>
					
		</div>

	</div>
</div>
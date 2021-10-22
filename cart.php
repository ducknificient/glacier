<?php
if (!isset($_SESSION))
{
	session_start();		
}		

		$email = $_SESSION["email"];
		$perintah = "select * 
						from user
						where email ='$email'";
		$query = mysqli_query($con,$perintah);
		$hasil = mysqli_fetch_assoc($query);		
		$username = $hasil["username"];
		$wallet = $hasil["wallet"];

if(!isset($_SESSION[$username]))
{
	//$_SESSION[$username] = array();
}


if(isset($_GET["gameID"]))
	{	
		$id = $_GET["gameID"];    
        if ((!isset($_SESSION[$username][$id])) || ($_SESSION[$username][$id] < 1))
        {
		  $_SESSION[$username][$id] = 1;
        }
        else
        {
		Echo "<script>";
        Echo "alert('game sudah ada di cart !');";
		Echo "</script>";
        }
		Echo "<script>";
		Echo "window.location.href='index.php?show=cart';";
		Echo "</script>";

	}
//$total = 1;
		echo " <form method='post' action='index.php?show=cart'>";		
		echo "<div style='clear:both'>";
		echo "</div>";
		echo "<div class='container'>";
		echo "	<div class='row' style='margin-top:1%;' >";
		echo "		<div class='col-lg-12' style='margin-top:1%'>";
		echo "			<h1>YOUR SHOPPING CART</h1>";
		echo "		</div>";
		echo "	</div>";
		echo "	<div class='row rounded' style='background-color:lightgrey'>";
		echo "		<div class='col-lg-12' style=''>";
		echo "			<div class='row'>";		
			$total = 0;
		    foreach($_SESSION[$username] as $x => $y)
			{					        
			    $perintah2 = "select * 
								from game
								where id ='$x'";
				$query2 = mysqli_query($con,$perintah2);
				$hasil2 = mysqli_fetch_assoc($query2);
				$id_game = $hasil2["id"];
				$title = $hasil2["title"];
				$price = $hasil2["price"];		
				$total = $total + $price;
				?>
							<div class='col-lg-12'>
								<div class='row'>
									<div class='col-lg-2' style=''>
										<img src='Pictures/<?php echo $x?>.jpg' alt='<?php echo $x ?>' width='120px' height='45px'>
									</div>
								<div class='col-lg-6' style=''><?php echo $title ?></div>
									<input type='hidden' name='title[]' value="<?php echo $title ?>">
									<input type="hidden" value="<?php echo $id_game ?>" name="id_game[]">
								<div class='col-lg-1'>
									<div class='row'>
										<div class='col-lg-12'>
											<?php  echo		$price ?>
											<input type='hidden' name='price[]' value="<?php echo $price ?>">
										</div>
										<div class='col-lg-12'>
											<a href='index.php?show=cart&delete=<?php echo $x ?>'>Remove</a>
										</div>
									</div>				
								</div>																										
								</div>
							</div>
			<?php }				
		echo "</div>					";		
		echo ""; // seharus disini diisi pembatas 
		echo "		<div class='col-lg-12' style=''>";
		echo " 			<div class='row'>	";
		echo "				<div class='col-lg-2'>";
		echo "				</div>";
		echo "				<div class='col-lg-4'>";
		echo "					Estimated total";
		echo "				</div>";
		echo "				<div class='col-lg-2' align='right'>";
		echo "					IDR";
		echo "				</div>";
		echo "				<div class='col-lg-4'>";
		echo "					$total";
		echo "				</div>";
		echo "			</div>";
		echo "			<hr>";
		echo "			<div class='row'>";
		echo "				<div class='col-lg-12'>";
		echo "					Is this a purchase for yourself or is it a gift? Select one to continue to checkout.";
		echo "					<br>";
		echo "					<br>";
		echo "				</div>";
		echo "			</div>";
		echo "			<div class='row'>";
		echo "				<div class='col-lg-5'>";
		echo "				</div>";
		echo "				<div class='col-lg-3'>";
		echo "					<a href='index.php?show=transaction&user=$username'>";
		echo "					<button type='submit' class='btn btn-outline-success'";
		if($_SESSION[$username] == null)
		{
			echo "disabled";
		}
		echo ">Purchase for my self</button>";
		echo "					</a>";
		echo "				</div>";
		echo "				<div class='col-lg-3'>";
		echo "					<button type='button' class='btn btn-outline-success'";
		if($_SESSION[$username] == null)
		{
			echo "disabled";
		}
		echo ">Purchase as a gift</button>";
		echo "				</div>";
		echo "			</div>";
		echo "<br>";
		echo "			</div>";
		echo "		</div>";
		echo "	</div>	";
		echo "<br>";
		echo "	<!-- remove all items start -->";
		echo "	<div class='row rounded' style='background-color:lightgrey'>";		
		echo "		<div class='col-lg-8'></div>";
		echo "		<div class='col-lg-4'> ";
		echo "				<a href='index.php?show=cart&clear=true'>";
		echo "					Remove all items";
		echo "				</a>";
		echo "		</div>";
		echo "	</div>";
		echo "	<!-- remove all items end -->";

		echo "	<!-- continue shopping start -->";
		echo "	<div class='row'>";
		echo "		<div class='col-lg-12'>";
		echo "			<a href='index.php'>";
		echo "			<button type='button' class='btn btn-info'>Continue Shopping</button>";
		echo "			</a>";
		echo "		</div>";
		echo "	</div>";
		echo "	<!-- continue shopping end -->";

		echo "<br>";

		echo "</div>";
		echo "</div>";
		echo "</form>";

if(isset($_GET["delete"]))
{
    $id = $_GET["delete"];
    unset($_SESSION[$username][$id]);
    Echo "<script>";
	Echo "window.location.href='index.php?show=cart';";
	Echo "</script>";
}		

if(isset($_GET["clear"]))
{
	unset($_SESSION[$username]);
	Echo "<script>";
	Echo "window.location.href='index.php?show=cart';";
	Echo "</script>";
}


if(isset($_POST['id_game']))
{	
	$id_game_array = $_POST['id_game'];
	//print_r($post_id_game);
	$title_array = $_POST['title'];
	$price_array = $_POST['price'];
	//$post_nama_game1 = null;
	//$post_id_game = implode(", ",$post_id_game);
	$price_total = array_sum($price_array);

	//print_r($post_id_game);
	$game=null;
	$gamestotal = count($id_game_array);
	$i = 0;
	foreach($id_game_array as $id_game) {
		//echo $id_game;		
		$perintah3 = "select title from game where id='$id_game'";	
		$query3 = mysqli_query($con,$perintah3);
		$hasil3 = mysqli_fetch_assoc($query3);
		$title = $hasil3["title"];
		if (sizeof($id_game_array) > 1)
		{						
			  if(++$i === $gamestotal) {
			   $game.= $title; 
			  }
			  else
			  {
				$game.= $title." ,";
			  }			
		}
		else
		{
			$game = $title;
		}				
	};

	if ($price_total <= $wallet)
	{
		$tgl = date('Y-m-d');
		$perintah4 = "insert into transaction (username,transaction_date,game,total_price) values('$username','$tgl','$game','$price_total')";	
		$query4 = mysqli_query($con,$perintah4);	

		$newwallet = $wallet - $price_total;
		$perintah5 = "update user set wallet='$newwallet' where username='$username'";
		$query5 = mysqli_query($con,$perintah5);		
		?>
		<script>
		alert('transaksi sukses');
		window.location.href='index.php?show=cart&clear=true';
		</script>	

<?php}
	else 
	{ ?>
		<script>
		alert('Wallet tidak mencukupi !');	
		</script>
<?php 
	} 
}
?>

			
			
								
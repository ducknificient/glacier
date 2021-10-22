<div class='container'>
<?php

if (isset($_GET["page"])){
	$page = $_GET["page"];
}
else{
	$page=1;
}
$page_size = 12;
$start = ($page - 1) * $page_size;

if(!isset($_GET["show"])){
	include "startpage.php";
}
else {
	$show = $_GET["show"];
	if ($show == "browse")
	{
		include "browse.php";
	}
	else if ($show == "detail")
	{
		include "detail.php";
	}	
	else if ($show == "about")
	{
		include "about.php";
	}
	else if ($show == "support")
	{
		include "support.php";
	}
	else if ($show == "signin")
	{
		include "signin.php";
	}
	else if ($show == "register")
	{
		include "register.php";
	}	
	else if ($show == "profile")
	{
		include "profile.php";
	}
	else if ($show == "detailprofile")
	{
		include "detailprofile.php";
	}
	else if ($show == "cart")
	{
		include "cart.php";
	}
	else if ($show == "addfunds")
	{
		include "addfunds.php";
	}
	else if ( $show == "redeemwallet")
	{
		include "redeemwallet.php";
	}
	else if ( $show == "transaction")
	{
		include "transaction.php";
	}
}
?>
</div>

<?php
echo "<div class='row'>";
include "carousel.php";
echo "</div>";
echo "<div class='row'>";
$hasil = mysqli_query($con, "select * from game limit $start, $page_size");
							// select title,id limit x,y; 
							//					x = dari baris ke berapa
							//					y = jumlah baris yang diamblil
while($baris = mysqli_fetch_assoc($hasil)){
	$id = $baris["id"];
	$title = $baris["title"];
	$summarytemp = $baris["summary"];
	$summary = substr($summarytemp,0, 64);
	echo "<div class='col-lg-3 col-md-4 col-sm-6' style='padding-top: 1rem'>";
	echo "<div class='card' style='width: 16rem;height: 24rem'>";
	echo "<img class='card-img-top' src='Pictures/$id.jpg' alt='Card image cap' style='padding:3%'>";
	echo "<div class='card-body'>";	
    echo "<h5 class='card-title'>$title</h5>";
    echo "<p class='card-text'>$summary . . .</p>";       
	echo "</div>";
	echo "<a href='index.php?show=detail&gid=$id' class='btn btn-success' >Detail</a>";
	echo "<a href='";

	if(!isset($_SESSION["email"])){
		echo "index.php?show=signin";
	}
	else
	{
		echo "index.php?show=cart&gameID=$id";
	}

	Echo "' class='btn btn-primary' >Add to Cart</a>";
	echo "</div>";
	echo ("</div>");	
}
echo "</div>";
Echo "<a href='index.php?show=browse&page=1'>
		<nav aria-label='...' style='display:flex;padding-top: 2rem'>";
Echo "  <ul class='pagination pagination-lg justify-content-end'>";
Echo "    <li class='page-item active' aria-current='page'>";
Echo "      <span class='page-link'>";
Echo "        Browse all";
Echo "        <span class='sr-only'>(current)</span>";
Echo "      </span>";
Echo "    </li>";
Echo "  </ul>";
Echo "</nav>
	  </a>";

?>
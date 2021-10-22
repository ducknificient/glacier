<?php
    include "connection.php"; 
    $q = $_GET["query"]; 
    $hasil = mysqli_query($con,"select id,title,summary from game where TITLE like '%$q%'");
    echo "<div class='row card-search-result'>";
    while($baris = mysqli_fetch_assoc($hasil))
    {
	$id = $baris["id"];
	$title = $baris["title"];
	$summarytemp = $baris["summary"];
	$summary = substr($summarytemp,0, 64);

    echo "<div class='col-lg-4 col-md-4 col-sm-6' style='padding-top: 1rem'>";
    echo "<div class='card' style='width: 22rem;height: 26rem'>";
    echo "<img class='card-img-top' src='Pictures/$id.jpg' alt='Card image cap' style='padding:3%'>";
    echo "<div class='card-body'>"; 
    echo "<h5 class='card-title'>$title</h5>";
    echo "<p class='card-text'>$summary . . .</p>";       
    echo "</div>";
    echo "<a href='index.php?show=detail&gid=$id' class='btn btn-success' >Detail</a>";
    echo "<a href='index.php?show=cart&gameID=$id' class='btn btn-primary' >Add to Cart</a>";
    echo "</div>";
    echo ("</div>");
    }
    echo "</div>";

?>

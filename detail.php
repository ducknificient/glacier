<?php

if (!isset($_GET["gid"])){
    Echo "<script>";
	Echo "window.location.href='index.php';";
	Echo "</script>";	

}
else{
	$gid = $_GET["gid"];	    
    $result = mysqli_query($con, "select * from game where id='$gid'");    
    $baris = mysqli_fetch_assoc($result);
    $id = $baris["id"];
    $title = $baris["title"];
    $price = $baris["price"];
    $genre = $baris["genre"];
    $developer = $baris["developer"];
    $publisher = $baris["publisher"];
	$year = $baris["year"];
	$summary = $baris["summary"];
	$rating = $baris["rating"];
    $discount = $baris["discount"];
    
    echo "<div class='row'>";
    echo "<div class='col-lg-6 col-md-6 col-sm-6'>";    
    echo "<div style='padding: 2rem'>";
    echo "<img src='Pictures/$id.jpg' class='img-thumbnail'>";    
    echo "</div>";
	echo "<div class='' style='margin:0rem 2rem 2rem 2rem'>";
	echo "  <div class='card-header'>";
	echo "    Buy $title Now";
	echo "  </div>";
	echo "  <div class='card-body'>";
    if($discount > 0)
    {
        $discount_price = round(($price * (100 - $discount)/100));
	echo "    <h5 class='card-title'>IDR <strike>$price</strike> $discount_price </h5>";
    }
    else
    {
	echo "    <h5 class='card-title'>IDR $price</h5>";
    }
	//echo "    <p class='card-text'>With supporting text below as a natural lead-in to additional content.</p>";
	echo "    <a href='";
    
    if(!isset($_SESSION["email"])){
        echo "index.php?show=signin";
    }
    else
    {
        echo "index.php?show=cart&gameID=$id";
    }

    echo "' class='btn btn-primary'>Add To Cart</a>";
	echo "  </div>";
	echo "</div>";    
    echo "</div>";
    echo "<div class='col-lg-6 col-md-6 col-sm-6'>";   
    echo "<h3 style='padding-top: 2rem'>";
    echo "$summary";
    echo "</h3>";     
    echo "<h2>";
    echo "<span class='badge-pill badge-secondary'>$genre</span>";
    echo "</h2>";
    echo "<div class='row'>";
    echo "<div class='col-lg-3 col-md-6 col-sm-6' align='right'>";   
    echo "<h5>Developer :</h5>";    
    echo "</div>";
    echo "<div class='col-lg-9 col-md-6 col-sm-6'>";   
    echo "<h5>$developer</h5>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-lg-3 col-md-6 col-sm-6' align='right'>";   
    echo "<h5>Publisher :</h5>";    
    echo "</div>";
    echo "<div class='col-lg-9 col-md-6 col-sm-6'>";   
    echo "<h5>$publisher</h5>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-lg-3 col-md-6 col-sm-6' align='right'>";   
    echo "<h5>Year :</h5>";    
    echo "</div>";
    echo "<div class='col-lg-9 col-md-6 col-sm-6'>";   
    echo "<h5>$year</h5>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-lg-3 col-md-6 col-sm-6' align='right'>";   
    echo "<h5>Rating :</h5>";    
    echo "</div>";
    echo "<div class='col-lg-9 col-md-6 col-sm-6'>";   
    echo "<h5>$rating</h5>";
    echo "</div>";
    echo "</div>";
    /*
    echo "<div class='row'>";
    echo "<div class='col-lg-3 col-md-6 col-sm-6' align='right'>";   
    echo "<h5>Developer :</h5>";
    echo "<h5>Publisher :</h5>";
    echo "<h5>Year :</h5>";
    echo "<h5>Rating :</h5>";
    echo "</div>";
    echo "<div class='col-lg-9 col-md-6 col-sm-6'>";   
    echo "<h5>$developer</h5>";
    echo "<h5>$publisher</h5>";
    echo "<h5>$year</h5>";
    echo "<h5>$rating</h5>";            
    echo "</div>";
    echo "</div>";
    */
    echo "</div>";
    echo "</div>";

	echo "<div>";
	echo "<h2>";
  	echo "More Like This ! — check it out!";
  	echo "</h2>";
	echo "</div>";

	/*
    echo "<div class='row'>";
    echo "<div class='col-lg-3 col-md-6 col-sm-6'>";    
	echo "<img class='card-img-top' src='Pictures/$id.jpg' alt='Card image cap' style='padding:3%'>";    
    echo "</div>";
    echo "<div class='col-lg-3 col-md-6 col-sm-6'>";    
    echo "<img class='card-img-top' src='Pictures/$id.jpg' alt='Card image cap' style='padding:3%'>";
    echo "</div>";
    echo "<div class='col-lg-3 col-md-6 col-sm-6'>";    
    echo "<img class='card-img-top' src='Pictures/$id.jpg' alt='Card image cap' style='padding:3%'>";
    echo "</div>";
    echo "<div class='col-lg-3 col-md-6 col-sm-6'>";    
    echo "<img class='card-img-top' src='Pictures/$id.jpg' alt='Card image cap' style='padding:3%'>";
    echo "</div>";
    echo "</div>";
    */
    echo "<div class='row'>";   
    $query = "SELECT `id`, (select count(*) from `game` where id <= '$gid') as `position`,`id`
                from game where `id` = '$gid'";
    $result = mysqli_query($con,$query);    
    $baris = mysqli_fetch_assoc($result);
    $position = $baris["position"];

    if ($position < 4)
    {
        $querybefore = "select * from game order by id asc limit 2, 3";
        $queryafter = "select * from game order by id asc limit 4, 3;";
        $resultbefore = mysqli_query($con,$querybefore);    
        $barisbefore = mysqli_fetch_assoc($resultbefore);
        $resultafter = mysqli_query($con,$queryafter);    
        $barisafter = mysqli_fetch_assoc($resultafter);
        while ($barisbefore = mysqli_fetch_assoc($resultbefore)) { 
            $id = $barisbefore["id"];
            $title = $barisbefore["title"];
        echo "<div class='col-lg-3 col-md-6 col-sm-6'>";        
        echo "<div class='card' style='width: rem;height: 16rem'>";
        echo "  <img src='Pictures/$id.jpg' class='card-img-top' alt='...'>";
        echo "  <div class='card-body'>";
        echo "    <h5 class='card-title'>$title</h5>";
        echo "    <a href='index.php?show=detail&gid=$id' class='btn btn-primary'>Info</a>";
        echo "  </div>";
        echo "</div>"; 
        echo "</div>";
        }
        while ($barisafter = mysqli_fetch_assoc($resultafter)) { 
            $id = $barisafter["id"];
            $title = $barisafter["title"];
        echo "<div class='col-lg-3 col-md-6 col-sm-6'>";        
        echo "<div class='card' style='width: rem;height: 16rem'>";
        echo "  <img src='Pictures/$id.jpg' class='card-img-top' alt='...'>";
        echo "  <div class='card-body'>";
        echo "    <h5 class='card-title'>$title</h5>";
        echo "    <a href='index.php?show=detail&gid=$id' class='btn btn-primary'>Info</a>";
        echo "  </div>";
        echo "</div>"; 
        echo "</div>";
        }    
    }
    else if ( $position > 98)
    {
        $querybefore = "select * from game order by id asc limit 93, 2";
        $queryafter = "select * from game order by id asc limit 95, 2;";
        $resultbefore = mysqli_query($con,$querybefore);    
        $resultafter = mysqli_query($con,$queryafter);    

        while ($barisbefore = mysqli_fetch_assoc($resultbefore)) { 
            $id = $barisbefore["id"];
            $title = $barisbefore["title"];
        echo "<div class='col-lg-3 col-md-6 col-sm-6'>";        
        echo "<div class='card' style='width: rem;height: 16rem'>";
        echo "  <img src='Pictures/$id.jpg' class='card-img-top' alt='...'>";
        echo "  <div class='card-body'>";
        echo "    <h5 class='card-title'>$title</h5>";
        echo "    <a href='index.php?show=detail&gid=$id' class='btn btn-primary'>Info</a>";
        echo "  </div>";
        echo "</div>"; 
        echo "</div>";
        }
        while ($barisafter = mysqli_fetch_assoc($resultafter)) { 
            $id = $barisafter["id"];
            $title = $barisafter["title"];
        echo "<div class='col-lg-3 col-md-6 col-sm-6'>";        
        echo "<div class='card' style='width: rem;height: 16rem'>";
        echo "  <img src='Pictures/$id.jpg' class='card-img-top' alt='...'>";
        echo "  <div class='card-body'>";
        echo "    <h5 class='card-title'>$title</h5>";
        echo "    <a href='index.php?show=detail&gid=$id' class='btn btn-primary'>Info</a>";
        echo "  </div>";
        echo "</div>"; 
        echo "</div>";
        }
    }
    else {
        $limitlow = $position-4; 
        $limitup = $position-1;
        $querybefore = "select * from game order by id asc limit $limitlow, 3";
        $queryafter = "select * from game order by id asc limit $limitup, 3;";
        $resultbefore = mysqli_query($con,$querybefore);    
        $barisbefore = mysqli_fetch_assoc($resultbefore);
        $resultafter = mysqli_query($con,$queryafter);    
        $barisafter = mysqli_fetch_assoc($resultafter);
        while ($barisbefore = mysqli_fetch_assoc($resultbefore)) { 
            $id = $barisbefore["id"];
            $title = $barisbefore["title"];
        echo "<div class='col-lg-3 col-md-6 col-sm-6'>";    	
    	echo "<div class='card' style='width: rem;height: 16rem'>";
    	echo "  <img src='Pictures/$id.jpg' class='card-img-top' alt='...'>";
    	echo "  <div class='card-body'>";
    	echo "    <h5 class='card-title'>$title</h5>";
    	echo "    <a href='index.php?show=detail&gid=$id' class='btn btn-primary'>Info</a>";
    	echo "  </div>";
    	echo "</div>"; 
    	echo "</div>";
        }
        while ($barisafter = mysqli_fetch_assoc($resultafter)) { 
            $id = $barisafter["id"];
            $title = $barisafter["title"];
        echo "<div class='col-lg-3 col-md-6 col-sm-6'>";        
        echo "<div class='card' style='width: rem;height: 16rem'>";
        echo "  <img src='Pictures/$id.jpg' class='card-img-top' alt='...'>";
        echo "  <div class='card-body'>";
        echo "    <h5 class='card-title'>$title</h5>";
        echo "    <a href='index.php?show=detail&gid=$id' class='btn btn-primary'>Info</a>";
        echo "  </div>";
        echo "</div>"; 
        echo "</div>";
        }
    }    
    echo "</div>";
}

?>
<!-- 

SELECT `id`, (select count(*) from `game` where id <= 'GMS00078') as `position`,`id`
from game where `id` = 'GMS00078';
-->
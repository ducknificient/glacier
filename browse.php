<br>
<div class="row">
<div class="col-lg-8">
<?php
$hasil = mysqli_query($con, "Select COUNT(*) as total_game from game");
$temp = mysqli_fetch_assoc($hasil);
$jum_item = $temp["total_game"];
$jum_page = ceil($jum_item/$page_size);

    $prev = $page-1;
    $next = $page+1;

    echo ('<nav aria-label="Page navigation">');
    echo ('<ul class="pagination pagination-lg">');
    echo ('<li class="page-item ');
    if($page==1)
        echo (' disabled');

    echo ('">');
    echo ("<a class='page-link' href='index.php?show=browse&page=$prev' aria-label='Previous'>");
      echo ('<span aria-hidden="true">&laquo;</span>');
      echo ('<span class="sr-only">Previous</span>');
    echo('</a></li>');

    if ( $jum_page<11)
    {
        for ($i=1;$i<=$jum_page;$i++)
            {
                echo('<li class="page-item ');
                if($i == $page)
                {
                    echo ('disabled');
                }  
                echo ('"><a class="page-link" href=');
                echo("index.php?show=browse&page=$i>$i");
                echo("</a></li>");
            }
    }
    else
    {
        if(!isset($_GET["page"]))
        {
            for ($i=1;$i<11;$i++)
            {
                echo('<li class="page-item ');
                if($i == $_GET["page"])
                {
                    echo ('disabled');
                }                
                echo ('"><a class="page-link" href=');
                echo("index.php?show=browse&page=$i>$i");
                echo("</a></li>");
            }
        }
        else
        {            
            $curpage = $_GET["page"];
            if ($curpage == ($jum_page-10))
            {                        
                $maxpage = $jum_page;                
            }            
            else
            {
                $maxpage = $curpage+10;
            }
            
            for ($curpage;$curpage<$maxpage;$curpage++)
            {
                if ($curpage == ($jum_page-10))
                {
                    if($curpage == $jum_page)
                    {
                        $curpage == $maxpage;
                    }
                    else
                    {
                        echo('<li class="page-item"><a class="page-link" href=');
                echo("index.php?show=browse&page=$curpage>$curpage");
                echo("</a></li>");                
                    }
                }
                else
                {
                echo('<li class="page-item"><a class="page-link" href=');
                echo("index.php?show=browse&page=$curpage>$curpage");
                echo("</a></li>");                
                }                
            }
            
        }
    }

    echo ('<li class="page-item ');
    if($page==$jum_page)
        echo (' disabled');

    echo ('">');
    echo ("<a class='page-link' href='index.php?show=browse&page=$next' aria-label='Next'>");
      echo ('<span aria-hidden="true">&laquo;</span>');
      echo ('<span class="sr-only">Next</span>');
    echo('</a></li>');

    echo ('</ul>');
    echo ('</nav>');
?>
    </div>
    <div class="col-lg-4">
        <input class="form-control mr-sm-2" ID="EditSearch" type="text" placeholder="Search Game ..." aria-label="Search" >        
    </div>
</div>
    <div id="search-card-ajax">

    </div>
<?php
echo "<div class='row' id='browse-card'>";
$hasil = mysqli_query($con, "select * from game limit $start, $page_size");
							// select title,id limit x,y; 
							//					x = dari baris ke berapa
							//					y = jumlah baris yang diamblil
while($baris = mysqli_fetch_assoc($hasil)){
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
    /*
	echo "<div class='col-lg-4 col-md-4 col-sm-6' style='padding: 1rem 0rem 2rem 0rem'>";
	echo "<div class='card' style='width: 22rem;height: 24rem'>";
	echo "<img class='card-img-top' src='Pictures/$id.jpg' alt='Card image cap' style='padding:3%'>";
	echo "<div class='card-body'>";
    echo "<h5 class='card-title'>$title</h5>";
    echo "<p class='card-text'>$summary . . .</p>";
    echo "<a href='#' class='btn btn-primary'>Buy</a>";
	echo "</div>";
	echo "</div>";
	echo ("</div>");	
    */
}
echo "</div>";

	echo "<div>";
	echo "<br><br>";
	echo "</div>";
echo "</div>";
?>
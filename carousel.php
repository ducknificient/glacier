<div id="carouselExampleIndicators" class="carousel slide col-lg-12" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>    
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>                    
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>    
  </ol>
  <div class="carousel-inner">

  <?php 
$hasil = mysqli_query($con, "select title,id from game limit 0,8");
      $a = 0;
while($baris = mysqli_fetch_assoc($hasil)){
      //for($i=1;$i<9;$i++){
  //$baris = mysqli_fetch_assoc($hasil);
  $title = $baris["title"];
  $id = $baris["id"];  
  echo "  <div class='carousel-item";
  if($a == 0)
  {
      echo " active";
  }
  echo "'>";
  echo "      <a href='index.php?show=detail&gid=$id'>";
  echo "      <img src='Pictures/$id.png' class='d-block w-100 img-thumbnail' alt='$title' style='width:100%;height:75%'>";
  echo "      </a>";
  echo "      <div class='carousel-caption d-none d-md-block'>";
  echo "        <h5 style='background-color:grey'>$title</h5>";
  echo "        <p></p>";
  echo "      </div> ";
  echo "    </div>";
  $a++;
}
  ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
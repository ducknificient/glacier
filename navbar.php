<nav class="navbar navbar-expand-lg navbar-dark gl-navbar">
  <a class="navbar-brand" href="index.php">
    <img src="Pictures/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      GLACIER® 
      <!-- src=/docs/4.2/assets/brand/bootstrap-solid.svg -->
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">STORE <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?show=about">ABOUT</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="index.php?show=support">SUPPORT</a>
      </li>
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href=

        <?php

        if(!isset($_SESSION["email"]))
        {
          echo "'index.php?show=signin'";
        }
        else
        {
          echo "'index.php?show=cart'";          
        }
        ?>        
        >
        <img src='Pictures/design/cart.png' alt='cart.png' width='16px' height='16px'>
        <?php        
        if (!isset($_SESSION["email"]))
        {
          echo "CART";
        }
        else
        {          
          
          $email = $_SESSION["email"];
          $perintah = "select * 
                  from user
                  where email ='$email'";
          $query = mysqli_query($con,$perintah);
          $hasil = mysqli_fetch_assoc($query);    
          $username = $hasil["username"];
          if(!isset($_SESSION[$username]))
          {
            $_SESSION[$username] = array();
          }                 
          $banyak = sizeof($_SESSION[$username]);        
          echo "CART " . "(" . "$banyak" . ")";
          
        }
        ?>
        <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    </ul>
  <!-- OLD ONE
    <ul class="navbar-nav mr-2">
  <a class="navbar-brand" href="#">
    <img src="Pictures/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      SIGN IN
  </a>    
      <li class="nav-item">
        <a class="nav-link" href="#">GET GLACIER</a>
      </li>      
    </ul>
  -->
  </div>  
  <?php

  if(!isset($_SESSION["email"])) {
    echo "    <form class='form-inline'>";
    echo "    <ul class='navbar-nav mr-2'>";
    echo "      ";
    echo "        <a class='navbar-brand' href='#'>";
    echo "         <img src='Pictures/logo.png' width='30' height='30' class='d-inline-block align-top' alt=''>";
    echo "        </a>";
    echo "      ";
    echo "      <a href='index.php?show=signin'>";
    echo "        <button class='btn btn-sm btn-outline-secondary' type='button'>Sign In</button>";
    echo "      </a>";
    echo "        <li class='nav-item'>";
    echo "          <a href='index.php?show=about'><button class='btn btn-outline-success' type='button'>Get GLACIER</button></a>";
    echo "        </li>      ";
    echo "    </ul>";
    echo "  </form>";
  }
  else 
  {
      $email = $_SESSION["email"];
          $perintah = "select username,wallet 
                from user
                where email='$email'";                        
          $query = mysqli_query($con,$perintah);
          $hasil = mysqli_fetch_array($query);
          $username = $hasil["username"];
          $wallet = $hasil["wallet"];

    echo " <ul class='list-group'>";
    echo "    <ul class='navbar-nav mr-2'>";
    echo "      ";
    echo "        <a class='navbar-brand' href='#'>";
    echo "         <img src='Pictures/Profiles/PU0001.png' width='30' height='30' class='d-inline-block align-top' alt=''>";
    echo "        </a>";
    echo "      ";    
    echo "      <li class='nav-item dropdown'>";
    echo "        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";          
    echo "          $username";
    echo "        </a>";
    echo "        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
    echo "          <a class='dropdown-item' href='index.php?show=profile'>View Profile</a>";
    echo "          <a class='dropdown-item' href='index.php?show=detailprofile'>Account Details</a>";
    echo "          <div class='dropdown-divider'></div>";
    echo "          <a class='dropdown-item' href='index.php?show=signin&a=out'>Log Out</a>";
    echo "        </div>";
    echo "      </li>";
    echo "      <li class='nav-item'>";
    echo "        <a class='nav-link' href='#'>IDR $wallet</a>";
    echo "      </li>    ";
    echo "    </ul>";  
    echo " </ul>";          

  }
?>

</nav>

<!-- 
About and get glacier redirect to same page 

Home and store redirect to same page

login and store has the same header

-->
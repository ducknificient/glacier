<?php
if(!isset($_SESSION)){
	session_start();
}
?>
<html>
<?php
include "connection.php";
include "header.php";
?>
<body style=""> <!-- style="background-color:#D4d4d4" background-color:#E3DCB3-->
<?php 
include "navbar.php";
include "content.php";
include "footer.php";
 ?>
</body>
<!-- test git push by dumplin duck -->
</html>

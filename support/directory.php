<?php

if (!isset($_GET["directory1"]))
{
	echo "What do you need help with ?";
}
else
{	

	if(!isset($_GET["directory2"]))
	{		
		$directory1 = $_GET["directory1"];
		echo "<nav aria-label='breadcrumb'>";
		echo "  <ol class='breadcrumb'>";
		echo "    <li class='breadcrumb-item'><a href='index.php?show=support'>Home</a></li>";
		echo "    <li class='breadcrumb-item active' aria-current='page'>$directory1</li>";
		echo "  </ol>";
		echo "</nav>";		
	}
	else
	{
		$directory1 = $_GET["directory1"];
		$directory2 = $_GET["directory2"];
		echo "<nav aria-label='breadcrumb'>";
		echo "  <ol class='breadcrumb'>";
		echo "    <li class='breadcrumb-item'><a href='index.php?show=support'>Home</a></li>";
		echo "    <li class='breadcrumb-item'><a href='index.php?show=support&directory1=$directory1'>$directory1</a></li>";
		echo "    <li class='breadcrumb-item active'>$directory2</li>";
		echo "  </ol>";
		echo "</nav>";		
	}
}

?>
<?php

echo "about";

for ($i=1; $i < 13; $i++) { 
	$month ="1-" . $i . "-1";
	echo date('d F ', strtotime($month));
}
?>
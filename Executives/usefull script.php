<?php

$dob ='2009-04-13';
echo date('d F Y', strtotime($dob));

for ($i=1; $i < 13; $i++) { 
	$month ="1-" . $i . "-1";
	echo date('d F ', strtotime($month));
}

//  January 01 February 01 March 01 April 01 May 01 June 01 July 01 August 01 September 01 October 01 November 01 December

$query_position = "SELECT `id`, (select count(*) from `game` where id <= 'GMS00078') as `position`,`id`
from game where `id` = 'GMS00078'";
?>
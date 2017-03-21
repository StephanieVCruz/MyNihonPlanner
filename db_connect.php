<?php

$mysqli = new mysqli("localhost", "st437983", "Clueless1!", "st437983");

if($mysqli->error)
	{
		echo "Cannot connect. Message: ".$mysqli->error;
	}

?>

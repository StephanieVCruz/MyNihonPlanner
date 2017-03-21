<?php

$mysqli = new mysqli("localhost", "st437983", "Pass123", "st437983");

if($mysqli->error)
	{
		echo "Cannot connect. Message: ".$mysqli->error;
	}

?>

<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Indian_bank";

	$conn = mysqli_connect('localhost', 'root','', 'Indian_bank');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
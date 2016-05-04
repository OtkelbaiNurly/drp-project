<?php

	$connection = new mysqli("localhost","root","","movie");	

	if(!$connection->connect_error){

		define("CONNECTED",true);

	}else{

		define("CONNECTED",false);

	}

?>
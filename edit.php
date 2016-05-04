<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){

		include 'init/db.php';
		include 'init/user.php';

		

			$title = $_POST['title'];
			$text = $_POST['text'];
			$uid = $_SESSION['user_id'];
			
			$connection->query ("INSERT INTO events(id, u_id, title, text, time, active) 
								VALUES(NULL, '$uid', '$title', '$text', NOW(), 1 )");

			header("Location:index.php?page=event");

		
	}	
?>
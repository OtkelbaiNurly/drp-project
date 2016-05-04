<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){

		include 'init/db.php';

		$login = $_POST['login'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];

		if($pass1==$pass2){
			
			$sql_text = "
				INSERT INTO users(id,login,password,name,surname,active) 
				VALUES (NULL,\"".$login."\",\"".sha1($pass1)."\",\"".$name."\",\"".$surname."\",1)";

			$connection->query($sql_text);
			header("Location:index.php?success=1");

		}else{

			header("Location:index.php?error=1");

		}

	}

?>

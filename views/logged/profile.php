<?php 

	$sql_text = "SELECT * from users WHERE id =".$_SESSION['user_id'];
	$query = $connection->query($sql_text);
          
            while($row=$query->fetch_object())
    		{
    			$login = $row->login;
    			$name = $row->name;
    			$surname = $row->surname;
                $email = $row->email;
				$mobile = $row->mobile;
				
?>
<HTML>
    
	<body>
	    
	<p><h4><?php echo $row->name." ".$row->surname;?></p>
	e-mail: <p><?php echo $row->email; ?></p><br>
	mobile: <p><?php echo $row->mobile; ?></p></h4>
	<?php 
			}
	    $sql = "SELECT * from events where u_id=".$_SESSION['user_id'];
		$query1 = $connection->query($sql);
		while($row1 = $query1->fetch_object()){
	?>
	<div class="jumbotron">
	    <p><a href="?page=eventshow&&id=<?php echo $row->id;?>"><?php echo $ro->title; ?></a><br></p>
	</div>
		
	</body>
	
</html>
<?php 
		
			}
?>
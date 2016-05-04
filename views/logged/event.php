<div class="row newev jumbotron col-md-12">
   <div class="col-md-10">
<div class="col-md-2"><i class="fa anew fa-plus"></i></div>
   <div class="col-md-10"><h4 class="hnewev"> Publish skill for exchange </h4></div>
    
    </div>
    <div class="col-md-2">
        <button class="btn btn-warning btncreate"><a class="crt" href="?page=create">Create</a></button>
    </div>
</div>

<?php


$query = $connection->query("SELECT * FROM events");

$uid = $USER_DATA->id;

while($row = $query->fetch_object()){
	
	$eid=$row->e_id;
    $query1=$connection->query("SELECT * FROM joins WHERE u_id='$uid' AND e_id='$eid' ");
	
	?>
	<div class="row events jumbotron col-md-12">
	 <div class="col-md-8">
	<p><a href="?page=eventshow&&id=<?php echo $row->id;?>"><?php echo $row->title; ?></a><br></p>
	</div>
	<div class="col-md-3">
          <h4>
           <?php
    echo $row->date."<br>";
    echo $row->place."<br>";
    echo $row->city."<br>";
    
        ?>
		<div class="col-md-2">
           <button class="btn btn-info" ><a class="but" href="?page=eventshow&&id=<?php echo $row->e_id ; ?>">Show details..</a></button>
           <br><br>
           <button class="btn btn-success"><a class="but" href="?page=eventshow&&e_id=<?php echo $row->e_id ;?>"><?php 
        if($row2=$query1->fetch_object()){
            echo $row2->text;
        }else echo "join";
		
        
     ?></a></button>
       </div>
        
     

	
       </div>
	
	<?php
	
}

?>
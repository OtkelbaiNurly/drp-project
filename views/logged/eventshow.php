<?php
if(isset($_GET['id'])){
    
    $evid=$_GET['id'];
    $usid=$USER_DATA->u_id;
    $uname=$USER_DATA->name;
    $query=$connection->query("SELECT * FROM events WHERE id='$evid'");
    
    if($row=$query->fetch_object()){
    
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(document).ready(function(){

$("#hide").hide();
$(".show_hide").show();

$('.show_hide').click(function(){
$("#hide").slideToggle();
});

});
</script>

       
       
       <h2>
        
        <?php
        
        echo $row->title;
        if($row->u_id == $usid){
        ?>
                   <h4>Author: </h4><a href="?page=profile"><?php echo $uname; ?></a>
                   <?php
                    ?>
            </h2>    


    <h4>

    <?php
        } else{
            $authorid = $row->u_id;
            $queuery = $connection->query("SELECT * FROM users WHERE id = '$authorid'");
            if ($newrow = $queuery->fetch_object()){
         ?>
           <h4>Author: </h4><a href="?page=profile&&u_id=<?php echo $authorid ?>"><?php echo $newrow->name; ?></a><br>
           <h4><?php
            }
            
        }
        echo $row->text."<br>";
        ?></h4>
</h4>
        
        
        
            
        
         <script>
       var id= "<?php echo $evid ?>";
           
          $(document).ready(function(){
              $.post("add_comment.php",{id:id},function(result){
                  $('#slidingDiv').html(result);
              });
             
              
          });
              
</script>
        <script>
$(document).ready(function(){
 $('#com').click(function(){
                  
               var id="<?php echo $evid; ?>";
                  var usid="<?php echo $usid; ?>"
                  var text=$('#comment').val();
                 $.post("get_comment.php",
                        {id:id,
                         usid:usid,
                         text:text},
                        function(result){
                  $('#slidingDiv').html(result);   
                     
                 });
                  $('#name').val('');
                  $('#comment').val('');
                  
              });   
    
});
 </script>
        
        
        <?php
        $now= new DateTime();
        $pre=strtotime($now->format('Y-m-d'));
        $exp=strtotime($row->date);
        $res=round(($exp-$pre)/86400);
        if($res>=0){
            echo "<h3>".
       $res." days left</h3>"; 
            
            
            
        }else{
            
         echo "<h3>".$res*(-1)." days expired</h3>";   
        }
        
         echo" <h4>Joined users: </h4>";
		 $query1=$connection->query("SELECT users.id, users.name, users.surname FROM users INNER JOIN joins ON users.id=joins.u_id");
		 ?>
		 <h4><?php echo $row->name;?></h4>
		 <?php
      /*  $query1=$connection->query("SELECT * FROM joins WHERE e_id=$evid AND pressed=1");
        
    while($row1=$query1->fetch_object()){
        
        $uid=$row1->u_id;
        
        $query2=$connection->query("SELECT * FROM users WHERE id ='$uid'");
        
        while($row2=$query2->fetch_osbject()){
        
            $usid=$row2->u_id;
        
        
        $query1=$connection->query("SELECT * FROM joins WHERE e_id=$evid AND pressed=1");
        
    while($row1=$query1->fetch_object()){
        
        $uid=$row1->u_id;
        
        $query2=$connection->query("SELECT * FROM users WHERE id ='$uid'");
        
        while($row2=$query2->fetch_object()){
        
            $usid=$row2->u_id;
            
            if($usid==$_SESSION['user_id']){
            
?>
        <a href="?page=profile"><?php echo $row2->name." ".$row2->surname."</a> &nbsp;&nbsp;"; }else { ?>

        <a href="?page=aprofile&&uid=<?php echo $uid; ?>"><?php echo $row2->name." ".$row2->surname."</a> &nbsp;&nbsp;"; } } } } }
} }
else
    
if(isset($_GET['eid'])){
        $eid=$_GET['eid'];
        $uid=$USER_DATA->u_id;
    
        $query=$connection->query("SELECT * FROM joins WHERE u_id='$uid' AND e_id='$eid'");
        
    if($row1=$query->fetch_object()){
            
        if($row1->pressed==1){
               
            $query1=$connection->query("UPDATE joins SET pressed=0, text='join' WHERE u_id='$uid' AND e_id='$eid'");
           
        }else if($row->pressed==0){
               
            $query1=$connection->query("UPDATE joins SET pressed=1, text='rejoin' WHERE u_id='$uid' AND e_id='$eid'");
          
        }       
          
        
        } 
    else{
            
         $query1=$connection->query("INSERT INTO joins(id,u_id,e_id,pressed,text) VALUES('','$uid','$eid',1,'rejoin')");   
        }
header("Location:?page=eventshow&&id=$eid"); */   
}
}
            ?>
            
           
<?php 

    include 'init/db.php';
	
	if(CONNECTED){
		
		include 'init/user.php';
		
		$page;
		
		if($USER_DATA!=null){
			
			if($_SERVER['REQUEST_METHOD']=='POST'){

			    if(isset($_POST['act'])){

    				if($_POST['act']=='logout'){
 
    					unset($_SESSION['user_id']);
	     				header("Location:?");
					}
				}
			}
		

		
		
		    $page = 'profile';
		
		    if(isset($_GET['page'])){
			    if($_GET['page']=='profile'){
				    $page = 'profile';
	    		}else if($_GET['page']=='event'){
		    		$page = 'event';
	    		}else if($_GET['page']=='create'){
		    		$page = 'create';
	    		}else if($_GET['page']=='eventshow'){
		    		$page = 'eventshow';
	    		}else if($_GET['page']=='photo'){
		    		$page = 'photo';
			    }else if($_GET['page']=='logout'){
		    		$page = 'logout';
			    }else{
				    $page = '404';
		     	}
	    	}
	    }else{
			
	    	$page = 'login';
		
	    	if(isset($_GET['page'])){
	  		
	    		if($_GET['page']=='home'){
	    			$page='home';
	    		}else if($_GET['page']=='about'){
	    			$page = 'about';
	      		}else if($_GET['page']=='contacts'){
		    		$page='contacts';
		    	}else if($_GET['page']=='login'){
		    		$page='login';
		    	}else if($_GET['page']=='register'){
		    		$page='register';
		    	}else{
			    	$page='404';
			    }
     		}
	    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog Post - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
  
        <!-- Custom CSS -->
        <link href="css/blog-post.css" rel="stylesheet">

    </head>
	
<body>	
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	    <div class="container">
		    <div class="navbar-header">
			    <a class="navbar-brand" href="?">Movie</a>
			</div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav">
				    <?php
					    if($USER_DATA==null){
					?>
					
					<li>
					    <a href="?page=about">About</a>
                    </li>
                    <li>
					    <a href="?page=contacts">Contacts</a>
					</li>
					<li>
					    <a href="?page=login"><strong>Sign in</strong></a>
					</li>
					<li>
					    <a  href="?page=register">Sign Up</a>
					</li>
					<?php
						}else{
					?>
					<li> 
					    <a href="?page=event">Event</a>
					</li>
					<li> 
					    <a href="?page=photo">Photo</a>
					</li>
					<li> 
					    <a href="?page=profile">Profile</a>
					</li>
					<li>
					<br>
                    <form action="?" method="post">
                    	<input type="hidden" name = "act" value = "logout">
                    	<button type="submit" class="btn btn-info">Logout</button>
                    </form>
                    </li>
					<?php
						}
					?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
	    
		<?php
		
		    include 'views/'.($USER_DATA!=null?'logged':'notlogged').'/'.$page.'.php';
	    ?>
		
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
</body>
	
</html>



<?php
	}
?>
<html>

    <head>
	    
		<style type="text/css">
            button.new {
            background: -moz-linear-gradient(#00BBD6, #EBFFFF);
            background: -webkit-gradient(linear, 0 0, 0 100%, from(#00BBD6), to(#EBFFFF));
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00BBD6', endColorstr='#EBFFFF');
            padding: 3px 7px;
            color: #333;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            border: 1px solid #666;
			}
  </style>
		
	</head>
    
	<body>
	    <form class="form-signin" role="form" action="edit.php" method="post">
		<h2 class="form-sign"> Please create event </h2>
		<input type="title" name="title" style="width: 337px; padding-right: 35px; overflow: hidden; resize: none; height: 32px;" placeholder="Event name"><br><br>
		<textarea name="text" onkeyup="Wall.postChanged()" onkeydown="onCtrlEnter(event, Wall.sendPost)" onfocus="Wall.showEditPost()" style="width: 337px; padding-right: 35px; overflow: hidden; resize: none; height: 32px" placeholder="Description of event"></textarea><br><br>
		<button class="new" type="submit">Create</button>
		
		</form>
	</body>
	
</html>
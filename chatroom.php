<?php 
		include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>

<title>Chat_Room</title>
    <link rel="stylesheet" href="Des.css" media="all"/>
	
    <script>
	
        function fun() {
            var req = new XMLHttpRequest();
            req.onreadystatechange = function () {

                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET','chat.php',true);
            req.send();
        }
        setInterval(function(){fun()},1000);
		
    </script>

		</head>
		<style>
			body {
				background-image: url('walls (16).jpg');
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
			
			}
		</style>
		
		<span style="color: #f9986c">
		<center><h1 style=font-size:65px>Chat Group</h1></center>
		</span>
		
	<body onload="ajax ();">
			<div id="container">
			<div id="chat_box">
			<div id="chat"></div>
			</div>
			
    <form method="post" action="chatroom.php">		
		<h2><span style="color:  #ff7536"><?php echo "Welcome back " , $Cname , "!"; ?></span></h2>

	    <br>
        <input type="text" name="msg" placeholder="insert message"/>
        <br>
       <br>
	   <center><input type="submit" name="submit" value="Send"/></center>
    
    </form>
	
   <?php
            if (isset($_POST['submit'])){
                $name=$Cname;
                $msg=$_POST['msg'];
						$query="INSERT INTO chatroom (name,msg) VALUES ('$name','$msg')";   
						$run=$conn->query($query);
            }         
        ?>
</div>

</body>

</html>
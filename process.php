<?php
	session_start();

    $conn = new mysqli("127.0.0.1:8111","root","","chatdb");

    $usernm= $_POST['usernm'];
    $password=$_POST['pass'];
    $sql = "Select * FROM log WHERE usernm = '$usernm' AND pass = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

	error_reporting(0);
	$_SESSION['Cname'] = $row['name'];
	
    if($row['usernm'] ==  $usernm && $row['pass'] == $password){
			header("Location: http://localhost/Chat/chatroom.php");
			exit();
	  //echo '<center><h2> Click <a href="http://localhost/Chat/chatroom.php">Here</a> to go to Group chat</h2>';

	}
    else{
		echo '<br>';
        echo '<center><h2>Wrong username or password</h2>';
		echo '<br>';
		echo '<center><h2> Back to  <a href="http://localhost/Chat/login.html"> Login</h2>';
    }
?>
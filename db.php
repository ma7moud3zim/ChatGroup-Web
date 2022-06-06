<?php
	session_start();
	
	
    $conn = new mysqli("127.0.0.1:8111","root","","chatdb");  
	$Cname = $_SESSION['Cname'];
	

	function formatData($data){
		return date('g:i a', strtotime($data));
	} 

?>
<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username == 'Boaz' && $password == 'Sze'){
		header("survey.php");
	}else{
		header("index.php");
	}

?>
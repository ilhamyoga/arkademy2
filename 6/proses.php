<?php 
	include('database.php');
	$db = new database();

	$load = $_GET['load'];
 	if($load == "insert"){
 		$db->insert($_POST['nama']);
 		header("location:index.php");
 	}
 	else if($load == "insert_skil"){
 		$db->insert_skil($_POST['nama'],$_POST['id']);
 		header("location:index.php");
 	}
?>
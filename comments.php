<?php
session_start();
include_once("server.php");
if(!empty($_POST["comment"])){
	$username = $_SESSION['username'];
	$insertComments = "INSERT INTO comment (page_id, comment, username) VALUES ('".$_POST["page_id"]."', '".$_POST["comment"]."', '$username')";
	mysqli_query($conn, $insertComments);	
	$message = '<label class="text-success">Comment posted Successfully.</label>';
	$status = array(
		'error'  => 0,
		'message' => $message
	);	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else {
	$message = '<label class="text-danger">Error: Comment not posted.</label>';
	$status = array(
		'error'  => 1,
		'message' => $message
	);	
}
echo json_encode($status);
?>
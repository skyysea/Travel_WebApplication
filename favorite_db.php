<?php 
session_start();
include('server.php');

$username = $_SESSION['username'];
if (isset($_POST['page_dele'])){
    $delsql = "DELETE FROM `favorite` WHERE `username`= '$username' AND `page_id`= '".$_POST["page_dele"]."'";
    mysqli_query($conn, $delsql);
    unset($_SESSION['unfavorite']);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else{
    $sql = "INSERT INTO favorite (username, page_id, img_id, name, link) VALUES ('$username', '".$_POST["page_id"]."', '".$_POST["img_id"]."', '".$_POST["name"]."', '".$_POST["link"]."')";
    mysqli_query($conn, $sql);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
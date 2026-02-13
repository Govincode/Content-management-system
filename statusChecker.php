<?php
include ("includes/db.php");

$postId = $_GET['pId'];

$stmt = $conn->prepare("SELECT status FROM post where pId = ?");
$stmt->bind_param("i",$postId);
$stmt->execute();

$result = $stmt->get_result();
$status = $result->fetch_assoc();


if($status['status'] == 'published'){
    header("Location:update_post.php?pId=$postId");
}else{
    header("location:edit_post.php?pId=$postId");
    
}






?>
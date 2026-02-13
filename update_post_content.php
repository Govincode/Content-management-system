<?php

include "includes/db.php";

if(isset($_POST['update'])){
    $postId = $_GET['pId'];
    
    if(isset($_POST['content'])){
        $postContent = $_POST['content'];
        $stmt = $conn->prepare("UPDATE postcontent SET pContent = ? WHERE pId = ?");
        
        $stmt->bind_param("si",$postContent, $postId);
        $stmt->execute();
        
        if($stmt->affected_rows > 0){
            header("Location:post_list.php");
        }
        }
        
    if(isset($_POST['title'])){
            $pName = $_POST['title'];
             $stmt = $conn->prepare("UPDATE post SET pName = ? WHERE pId = ?");
             $stmt->bind_param("si",$pName, $postId);
            $stmt->execute();
            
        if($stmt->affected_rows > 0){
            header("Location:post_list.php");
        }
    }
    

}






?>
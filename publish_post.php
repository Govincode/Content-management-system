<?php

include_once "includes/db.php";
include_once "functions.php";
//publish post 
        if(isset($_POST['publish'])){
        $content = $_POST['content'];
        $pId = $_GET['pId'];
        $stmt = $conn->prepare("INSERT INTO postcontent(pContent,pid) VALUES (?,?)");
    
        $stmt->bind_param("si",$content,$pId);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            
            updatePostStatus($conn);
            header("Location:statusChecker.php?pId=$pId");

        }else{
            
        }

        
    }


    



    

?>
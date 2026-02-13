<?php

include_once "includes/db.php";
//publish post 
        if(isset($_POST['publish'])){
        $content = $_POST['content'];

        $stmt = $conn->prepare("INSERT INTO postcontent(pContent,pid) VALUES (?,?)");
        $pid = 1;
        $stmt->bind_param("si",$content,$pid);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            echo "uploaded into database";
        }else{
            echo "failed upload into database";
        }

        
    }


    



    

?>
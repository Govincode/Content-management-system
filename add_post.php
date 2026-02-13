<?php

include_once "includes/db.php";

if(isset($_POST['Add'])){
    $postName = htmlspecialchars($_POST['postName']);

    $stmt = $conn->prepare("INSERT INTO post (pName) VALUES(?)");
    if(empty($postName)){
        echo "<script>
            alert('name is empty');
            window.location.href='new_post.php';

        </script>";
       
        exit();
    }else{
            $stmt->bind_param("s",$postName);
            $stmt->execute();
            
            if($stmt->affected_rows>0){
               
                header('Location: post_list.php');
                exit();
            }
    }

   

}


?>
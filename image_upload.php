<?php
 include "includes/db.php";




    
    if(isset($_FILES['file'])){
        $file = $_FILES['file'];
        // file details
        
        $size = $file['size'];
        $fileName = $file['name'];
        $temp_location = $file['tmp_name'];
        $error = $file['error'];
        
        // validation file type

        $ext = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
        $allowed = ['jpg','png','gif','webp'];
        if(!in_array($ext,$allowed)){
            http_response_code(400);
            echo json_encode(['error'=>'Invalid file type']);
            exit;
            }
        $target = "uploads/".time(). $fileName;
            
        
        
        if(move_uploaded_file($temp_location,$target)){
           
        echo json_encode(['location' => $target]);
        

        }else{
            http_response_code(500);
           echo json_encode(['error'=>'upload failed']);
        }

        //save image on database
        $stmt = $conn->prepare("INSERT INTO images (imagePath) VALUES (?)");
        $stmt->bind_param("s",$target);
        $stmt->execute();

        
    }

     



?>



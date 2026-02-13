<?php

function updatePostStatus($conn){
    $postId = $_GET['pId'];
    $changeStatus = "published";
    $stmt = $conn->prepare("UPDATE post SET status = ? where pId = ?");
    $stmt->bind_param("si",$changeStatus,$postId);
    $stmt->execute();
}

function postInfo($conn){
    $postId = $_GET['pId'];
    
    $stmt = $conn->prepare("SELECT * FROM post NATURAL JOIN postcontent where pId = ?");
    $stmt->bind_param("i",$postId);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if($row != NULL){

        $pName = $row['pName'];
        $pContent = $row['pContent'];
        $pcreated_date = $row['create_date'];
        
        $postDetails = [
        "postTitle" => $pName,
        "contents" => $pContent,
        "created_date" => $pcreated_date

        ];

        return $postDetails;
    }else{
        echo "<script>
        alert('Post is empty so please edit first to enable preview feature.');
        window.location.href = 'edit_post.php?pId=$postId';

        </script>";
    }
    

}



?>
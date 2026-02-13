<?php 

include "includes/db.php";
include "functions.php";
$post = postInfo($conn);
?>

<!DOCTYPE html>


<html lang="en">
<head>
<meta charset="UTF-8">
<!-- css -->
 <link rel="stylesheet" href="css/preview.css">
<title>Post Preview</title>


</head>

<body>

<div class="preview-box">
  <div class="post-title">
    <h4><?php echo $post["postTitle"] ?></h4>
  </div>    

  <div class="post-meta">
    Created date : <?php echo $post["created_date"]?>
  </div>

  <div class="post-content">
  <?php echo $post["contents"] ?>
  </div>

  <a href="post_list.php" class="back-btn">← Back to list</a>
</div>

</body>
</html>

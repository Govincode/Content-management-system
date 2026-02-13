<?php
include "includes/db.php";
if(isset($_GET['pId'])){
  $postId = $_GET['pId'];
  $stmt = $conn->prepare("SELECT * from postcontent NATURAL JOIN post WHERE pId = $postId;");

  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $postTitle = $row['pName'];
  $postContent = $row['pContent'];


}


?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>New Post</title>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: #f4f6f9;
}

/* Header */
.page-header {
  background: white;
  padding: 15px 25px;
  font-size: 20px;
  font-weight: bold;
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}

/* Form Layout */
#content-form {
  display: flex;
  gap: 20px;
  padding: 20px;
}

/* Left Editor Area */
.content-area {
  flex: 3;
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 6px 15px rgba(0,0,0,0.08);
  display: flex;
  flex-direction: column;
  gap: 15px;
}

/* Title Input */
.title-input {
  padding: 12px;
  font-size: 18px;
  border: 1px solid #ddd;
  border-radius: 6px;
  outline: none;
  text-transform: capitalize;
}

.title-input:focus {
  border-color: #4a90e2;
}

/* Editor */
#content_area {
  height: 400px;
  border-radius: 6px;
}

/* Sidebar */
.side-bar {
  flex: 1;
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 6px 15px rgba(0,0,0,0.08);
  height: fit-content;
}

/* Publish Button */
.publish-btn {
  width: 100%;
  padding: 12px;
  border: none;
  background: #4a90e2;
  color: white;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
  transition: 0.2s;
}

.publish-btn:hover {
  background: #357bd8;
}

/* Responsive */
@media (max-width: 900px) {
  #content-form {
    flex-direction: column;
  }
}
</style>
</head>

<body>

<div class="page-header">Post Editor</div>

<form action="update_post_content.php?pId=<?php echo $postId ?>" method="POST" id="content-form">

  <div class="content-area">
    <input type="text" name="title" placeholder="Post title..." class="title-input" value="<?php echo $postTitle ?>">

    <textarea name="content" id="content_area">
      <?php
        echo $postContent;
      ?>

    </textarea>
  </div>

  <div class="side-bar">
    <input type="submit" value="Update Post" name="update" class="publish-btn">
  </div>

</form>

<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>

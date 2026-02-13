<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
     <link rel="stylesheet" href="css/post_list.css">
    <title>Add New Post</title>
</head>
<body>
    
<div class="table-container">
<h2>Post List</h2>

<a href="new_post.php" class="add-btn">+ Add New Post</a>

<table>
<tr>
  <th>ID</th>
  <th>Post Name</th>
  <th>Actions</th>
</tr>

<?php


include "includes/db.php";
$result = $conn->query("SELECT * FROM post");

while($row = $result->fetch_assoc()){
?>

<tr>
  <td><?php echo $row['pId']; ?></td>
  <td><?php echo htmlspecialchars($row['pName']); ?></td>
  <td>
    <a class="action-btn edit" href="statusChecker.php?pId=<?php echo $row['pId']; ?>">Edit</a>
    <a class="action-btn preview" href="preview.php?pId=<?php echo $row['pId']; ?>">Preview</a>
    <a class="action-btn delete" href="delete.php?pId=<?php echo $row['pId']; ?>" onclick="return confirm('Delete this post?')">Delete</a>
  </td>
</tr>

<?php } ?>

</table>
</div>
</body>
</html>


<style>
body {
  font-family: Arial, sans-serif;
  background: #f5f7fa;
  padding: 40px;
}

.table-container {
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 6px 15px rgba(0,0,0,0.08);
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #eee;
}

th {
  background: #f0f2f5;
}

.action-btn {
  padding: 6px 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 13px;
  text-decoration: none;
  color: white;
}

.edit { background: #4CAF50; }
.preview { background: #2196F3; }
.delete { background: #f44336; }

.action-btn:hover {
  opacity: 0.85;
}
</style>

<div class="table-container">
<h2>Post List</h2>

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
    <a class="action-btn edit" href="edit_post.php?id=<?php echo $row['pId']; ?>">Edit</a>
    <a class="action-btn preview" href="preview_post.php?id=<?php echo $row['pId']; ?>">Preview</a>
    <a class="action-btn delete" href="delete_post.php?id=<?php echo $row['pId']; ?>" onclick="return confirm('Delete this post?')">Delete</a>
  </td>
</tr>

<?php } ?>

</table>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new Post</title>
    <style>
body {
  font-family: Arial, sans-serif;
  background: #f4f6f9;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

form {
  background: #ffffff;
  padding: 25px 30px;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
  width: 300px;
  display: flex;
  flex-direction: column;
  gap: 15px;
}

#postName {
  padding: 10px 12px;
  border: 1px solid #dcdcdc;
  border-radius: 6px;
  font-size: 14px;
  outline: none;
  transition: 0.2s;
}

#postName:focus {
  border-color: #4a90e2;
  box-shadow: 0 0 0 2px rgba(74,144,226,0.15);
}

input[type="submit"] {
  padding: 10px;
  border: none;
  border-radius: 6px;
  background: #4a90e2;
  color: white;
  font-size: 15px;
  cursor: pointer;
  transition: 0.2s;
}

input[type="submit"]:hover {
  background: #357bd8;
}
</style>
</head>
<body>
    
    <form action="add_post.php" method="post">

        <input type="text" name="postName" id="postName">
        <input type="submit" value="Add Post" name="Add">

    </form>


    <?php

    

    ?>

</body>
</html>
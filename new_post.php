<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="css/new_post.css">
     <link rel="stylesheet" href="css/preview.css">


    <title>new Post</title>

</head>
<body>
    <div class="newpost">
        <div class="newPost-form">
        <form action="add_post.php" method="post">

            <input type="text" name="postName" id="postName">
            <input type="submit" value="Add Post" name="Add">

        </form>
        </div>
    
        <div class="backtolist">
            <a href="post_list.php" class="back-btn">← Back to list</a>
        </div>
    </div>
    



</body>
</html>
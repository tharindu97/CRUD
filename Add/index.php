<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    <div class="container">
        <form action="add.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label><br>
                <input type="text" name="post_title" required \>
            </div>

            <div class="form-group">
                <label for="">Masseage</label><br>
                <textarea name="post_mes" cols="30" rows="10" required></textarea>
            </div>

            <div class="form-group">
                <label for="">Image</label><br>
                <input type="file" name="image" required \>
            </div>
            <br>
            <input type="submit" value="Submit" name="submit" \>
        </form><br>
        <button><a href="viewPost.php">View</a></button>
    </div>
</body>
</html>
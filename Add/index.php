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
        <form action="add.php" method="post">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="post_title" \>
            </div>

            <div class="form-group">
                <label for="">Masseage</label>
                <textarea name="post_mes" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="post_image" \>
            </div>
            <input type="submit" value="Submit" name="submit" \>
        </form>
    </div>
</body>
</html>
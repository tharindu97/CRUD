<?php require("db.php"); ?>
<?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $query = "SELECT * FROM post";
    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $title = $row['title'];
        $mes = $row['ms'];
        $image = $row['image'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label><br>
                <input type="text" name="post_title" value="<?php echo $title; ?>" \>
            </div>

            <div class="form-group">
                <label for="">Masseage</label><br>
                <textarea name="post_mes" cols="30" rows="10" ><?php echo $mes; ?></textarea>
            </div>

            <div class="form-group">
                <label for="">Image</label><br>
                <?php echo "<img src='$image' width='25%'  height = '25%'>"; ?><br>
                <input type="file" name="image" \>
            </div>
            <br>
            <input type="submit" value="Update" name="update" \>
        </form>
</div>
</body>
</html>

<?php 
    if(isset($_POST['update'])){
        $id = $_GET['id'];

        $title = $_POST['post_title'];
        $mes = $_POST['post_mes'];

        $filetemp = $_FILES['image']['tmp_name'];
        $filename = $_FILES['image']['name'];

        $filepath = "./image/";

        $query = "UPDATE post SET title = '$title', ms = '$mes', image = '$filepath/$filename' WHERE id = '$id'";

        $result = mysqli_query($con, $query);
        move_uploaded_file($filetemp, $filepath.$filename);

        if($result){
            echo "Succefull";
            return header("Localhost: viewPost.php");
        }
    }
?>

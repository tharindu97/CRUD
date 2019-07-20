<?php require("db.php"); ?>
<?php 
    if(isset($_POST['submit'])){
        $title = $_POST['post_title'];
        $mes = $_POST['post_mes'];

        $filetemp = $_FILES['image']['tmp_name'];
        $filename = $_FILES['image']['name'];

        $filepath = "./image/";

        $query = "INSERT INTO post(title,ms,image) VALUES('$title','$mes','$filepath/$filename')";
        $result = mysqli_query($con, $query);
        
        move_uploaded_file($filetemp, $filepath.$filename);
        
        if(!$result){
            echo "Not Updated!";
        }
    }
    return header("Localhost: index.php");

?>
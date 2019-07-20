<?php require("db.php"); ?>
<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "DELETE FROM post WHERE id = $id";
        $result = mysqli_query($con, $query);

        if($result){
            echo "Deleted!";
        }else{
            return header("Localhost: viewPost.php");
        }
    }
?>
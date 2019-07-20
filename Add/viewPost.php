<?php require("db.php"); ?>
<?php 
    $query = "SELECT * FROM post";
    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $title = $row['title'];
        $mes = $row['ms'];
        $image = $row['image'];

        echo "<tr>
        <td>$title<br></td>
        <td>$mes<br></td>
        <td><img src='$image' width='15%' height = '25%'><br></td>
        <br>
        <td><button><a href='updatePost.php?id=$id'>Update</a></button><br></td>
        <br>
        <td><button><a href='deletePost.php?id=$id'>Delete</a></button><br></td>
        <br><br>
        </tr>";
    }
?>


<?php
if (isset($_POST['add'])) {

    $Name=$_POST['name'];
    $Comment=$_POST['comment'];
    
    require_once('connect.php');

    $sql="INSERT INTO comments_user (username,title)
    VALUES (' $Name', '$Comment')
    ";
    mysqli_query($conn, $sql);
    header('Location:http://localhost/comment/comment.php');
}
?>
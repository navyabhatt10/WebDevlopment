<?php
include('connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM `users` WHERE id=$id";
if(mysqli_query($conn,$sql)){
    header("Location:ques5.php");
}
else{
    echo "Deletion failed...";
}
?>
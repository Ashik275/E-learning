<?php
include 'dbconnect.php';
    $id=$_POST['id_delete'];
    $sql="DELETE FROM `ourcourses` WHERE `id`='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
       echo 'Deleted Successfully';
    }
    else{
        echo 'Cnat';
    }
?>
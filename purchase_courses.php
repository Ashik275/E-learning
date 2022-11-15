<?php
include 'common/dbconnect.php';
$user_id   =$_POST['user_id'];
$course_id=$_POST['course_id'];
$courses_sql="SELECT  `course_title`,`image`, `course_desc` FROM `ourcourses` WHERE `id`='$course_id'";
$result=mysqli_query($conn,$courses_sql);
$row=mysqli_fetch_assoc($result);
$course_title= $row['course_title'];
$image =$row['image'];
$course_desc= $row['course_desc'];
$sql="SELECT `course_name` FROM `purchase_courses` WHERE `user_id`='$user_id '";
$result=mysqli_query($conn,$sql);
$courses_array=array();
while($row=mysqli_fetch_assoc($result)){
    array_push($courses_array,$row['course_name']);
}
$new_array=$courses_array;
if(in_array($course_title,$new_array)){
    echo 'You Have Already Purchased This Course';
}
else{
     $purchase_sql="INSERT INTO `purchase_courses`(`user_id`, `course_name`, `course_desc`, `image`) 
               VALUES ('$user_id','$course_title','$course_desc','$image')";
    $result_2=mysqli_query($conn,$purchase_sql);
    if($result_2){
        echo'You Purchased The Course Successfully';
    } 
}


?>
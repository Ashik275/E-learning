<?php
if($_FILES['update_file']['name']){
    $fileName=$_FILES['update_file']['name'];
    $update_title=$_POST['update_title'];
    $update_id=$_POST['update_hidden'];
    $update_hidden_pic=$_POST['update_hidden_pic'];
    $update_description=$_POST['update_description'];
    $update_course_fee=$_POST['update_course_fee'];
    


    $extension= pathinfo($fileName,PATHINFO_EXTENSION);

    $valid_extensions=array("jpg","jpeg","png","gif");

    if(in_array($extension,$valid_extensions)){
        $new_name=rand().".".$extension;
        $path="image/". $new_name;
        if(move_uploaded_file($_FILES['update_file']['tmp_name'],$path)){
            include 'common/dbconnect.php';
            // unlink($update_hidden_pic);
            $sql="UPDATE `ourcourses` SET `course_title`='$update_title',`course_desc`='$update_description',`image`='$path',`course_fee`='$update_course_fee' WHERE `id`='$update_id'";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo 'Updated';
            }
            else{
                echo 'not Updated';
            }
        }else{
            echo '<script>alert("Invalid File ")</script>';
        }
    }
}
else{
  echo '<script>alert("select File ")</script>';

 }
?>
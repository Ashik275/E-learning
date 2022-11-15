<?php
session_start();
include 'common/dbconnect.php';
$sql='SELECT * FROM `ourcourses`';
$sql_student='SELECT * FROM `users`';
$sql_purchase='SELECT * FROM `purchase_courses`';
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
$result_student=mysqli_query($conn,$sql_student);
$num_student=mysqli_num_rows($result_student);
$result_purchase=mysqli_query($conn,$sql_purchase);
$num_purchase=mysqli_num_rows($result_purchase);
// add courses
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['add-courses'])){ 
              include 'common/dbconnect.php';
              $title=$_POST['title'];
              $desc=$_POST['description'];
              $course_fee=$_POST['course_fee'];
              $file =$_FILES['file'];
              $nowTime = strtotime(date("Y-m-d H:i:s"));
              $fileName=$file['name'];
              $filePath=$file['tmp_name'];
              $filePath=$file['tmp_name'];
              $fileError=$file['error'];
              $explode=explode(".",$fileName);
              $extension = end($explode);
              $allowed_extension = array('jpg', 'png', 'jpeg', 'gif');
              if($fileError==0 && in_array($extension,$allowed_extension)){
                $newImageName = $nowTime.".".$extension;
                 $destFile="image/".$newImageName;
                 move_uploaded_file($filePath,$destFile);
                 $inertsql="INSERT INTO `ourcourses`(`course_title`, `course_desc`, `image` , `course_fee`)
                            VALUES ('$title','$desc','$destFile','$course_fee')";
                $result=mysqli_query($conn,$inertsql);
                if($result){
                //   echo '<script>alert("data inserted successfully");</script>';    
                }
                else{
                    echo "Error: " . $inertsql . "<br>" . mysqli_error($conn);
                }
               }
               else{       
                     echo 'wrong formate';         
                }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/admin.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/fontawesome/css/all.css">
</head>
<body>
    <?php
      if(isset($_SESSION['adminloggedin']) &&  $_SESSION['adminloggedin']==true){
    ?>
    <?php include 'common/adminheader.php';?>
    <?php include 'common/addcourses_modal.php';?>
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-sm-3 ">
                <div class="p-4 mt-3" style="background-color:#3c4b64;"></div>
                <ul class="navbar-nav mb-3 mb-lg-0 ">
                    <li class="nav-item">
                    <a class="nav-link active " aria-current="page" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcourses" >Add Courses</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" onclick="studentTable()">Students</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" >Feedback</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active " aria-current="page"  >Change Password</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="common/admin-logout.php">Logout</a>
                    </li>
                
                </ul> 
            
        
            </div>
            <div class="col-sm-9 mt-3">
                
                    <div class="row row-cols-1 row-cols-md-3 g-4 ">
                        <div class="col">
                            <div class=" h-100 bg-danger p-3 text-center border rounded">
                             <span class="fw-bold text-white">Courses</span> <br>
                             <span class="fw-bold text-white"><?php echo $num;?></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border rounded h-100 bg-success p-3 text-center ">
                             <span class="fw-bold text-white">Students </span> <br>
                             <span class="fw-bold text-white"><?php echo $num_student;?></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border rounded h-100 bg-warning p-3 text-center">
                             <span class="fw-bold text-white">Purchased Courses</span> <br>
                             <span class="fw-bold text-white"><?php echo $num_purchase;?></span>
                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="courses-table">
                        <?php include 'courses-table.php';?>
                        </div>
                        <div class="student-table" style="display:none;">
                        <?php include 'students.php';?>
                        </div>
                    
                    </div>
            </div>
        </div>
    </div>
    <script src="boot-js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/admin.js"></script>
    <script>
        function studentTable(){
            $('.student-table').css('display','block');
            $('.courses-table').css('display','none');
         }
        
    </script>
<?php }
else{
?>
<h5>Please Login</h5>
<?php }?>
</body>
</html>
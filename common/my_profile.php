<?php
session_start();
include 'dbconnect.php';
 $user_sno=$_SESSION['sno'];
 $user_email=$_SESSION['user_email'];
 $user_name=$_SESSION['user_name'];
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $file =$_FILES['user_pic'];
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
                 $destFile="user_image/".$newImageName;
                 move_uploaded_file($filePath,$destFile);
                 $inertsql="UPDATE `users` SET `user_image`='$destFile' WHERE `sno`='$user_sno'";
                $result=mysqli_query($conn,$inertsql);
                if($result){
                echo 'Image inserted successfully';    
                }
                else{
                    echo "Error: " . $inertsql . "<br>" . mysqli_error($conn);
                }
              }
              
 }
 $sql="SELECT  `user_image` FROM `users` WHERE `sno`='$user_sno'";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($result);
 $user_pic=$row['user_image'];
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/fontawesome/css/all.css">
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-sm-3 ">
                <div class="p-2 mt-3" style="background-color:#3c4b64;">
                   <p class="fw-bold text-white text-center">Welcome <?php echo $user_name;?></p>
                </div>
                <div class="w-25"> 
                
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                <img  style="width:120px;height:120px" class="border rounded-circle my-2" src="<?php echo $user_pic;?>" alt="profile">
                    <input  type="file" name="user_pic" id="user_pic">
                    <button type="submit" class="btn btn-danger btn-sm">Submit</button>
                </form>
                </div>
                <p>Name : <?php echo $user_name;?></p>
               
                <!-- <a href="_logOut.php" class="btn btn-outline-dark" >Logout</a> -->
                <a href="_logOut.php" class="text-decoration-none text-dark"><p>Logout</p></a>
        
            </div>
            <div class="col-sm-9 mt-3">
                <?php include 'purchased_courses.php';?>
                 
            </div>
        </div>
    </div>
</div>

    <script src="../boot-js/bootstrap.bundle.min.js"></script>
</body>
</html>
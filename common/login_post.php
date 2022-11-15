<?php
    include 'dbconnect.php';
    if($_POST['type']=="user_login"){
     $login_email=$_POST['loginEmail'];
     $login_pass=$_POST['loginPass'];
    $sql="SELECT * FROM `users` WHERE `user_email`='$login_email'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
     $num= mysqli_num_rows($result);
    if($num==1){
        if($login_pass == $row['pass']){
           session_start();
           echo $_SESSION['loggedin']=true;
           $_SESSION['sno']=$row['sno'];
           $_SESSION['user_email']=$login_email;
           $_SESSION['user_name']=$row['user_name'];
        }
       }
       }
       if($_POST['type']=="admin_login"){
        $admin_name=$_POST['adminName'];
        $admin_pass=$_POST['adminPass'];
        $sql="SELECT * FROM `admin_login` WHERE `admin_name`='$admin_name'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
         $num= mysqli_num_rows($result);
        if($num==1){
            if($admin_pass == $row['admin_pass']){
               session_start();
               echo $_SESSION['adminloggedin']=true;
            }
           }
       }
       
?>
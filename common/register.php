<?php
//   $add=false;
  $insert='false';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    
    if(isset($_POST['registration'])){
        $full_name=$_POST['full_name'];
        $user_name=$_POST['user_name'];
        $user_email=$_POST['user_email'];
        $user_number=$_POST['user_number'];
        $user_pass=$_POST['user_pass'];
        $user_cpass=$_POST['user_cpass'];
        $gender=$_POST['gender'];
        $userEmail=trim($user_email," ");
        if( $user_pass==$user_cpass){
            if($full_name==" " or  $user_name==" " or  $userEmail==" " or $user_number==" " ){
             echo'please fill the fiels';
            }
            else{
                $sql="SELECT * FROM `users` WHERE `user_email`='$userEmail'";
                $result=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($result);
                if($num>0){
                    $insert="User Email Already Existed";
                }
                else{
                    $sql="INSERT INTO `users`(`full_name`, `user_name`, `user_email`, `phone_number`, `pass`, `gender`)
                          VALUES ('$full_name ','$user_name','$userEmail','$user_number','$user_pass','$gender')";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        $insert='Registration Completed Please Login Now';
                    }              
                
                }
            }
        }
   
    }
}
?>
<div class="containers">
          <div class="title">Registration</div>
          <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter Your  Name" name="full_name" required>
                </div>
                <div class="input-box">
                    <span class="details">User Name</span>
                    <input type="text" placeholder="Enter Your User Name" name="user_name" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter Your Email" name="user_email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="number" placeholder="Enter Your Phone Number" name="user_number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter Your Password" name="user_pass" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm Password" name="user_cpass" required>
                </div>
            </div>
            <div class="gender-details">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="">
                        <input type="radio" id="html"  class="dot one" name="gender" value="Male">
                        <span class="gender">Male</span>
                    </label>
                    <label for="">
                        <input type="radio" id="html"  class="dot one" name="gender" value="Female">
                        <span class="gender">Female</span>
                    </label>
                    <label for="">
                        <input type="radio" id="html"  class="dot one" name="gender" value="Common">
                        <span class="gender">Common</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="registration" value="Registration">

            </div>
            <?php 
              if($insert !='false'){
            ?>
            <div>
                <?php echo $insert;?>
            </div>
            <?php } ?>
           
          </form>
    </div>



<div class="p-2 mb-3" style="background-color:#3c4b64;">
                   <p class="fw-bold text-white text-center">Your Purchased Courses</p>
    </div>
<div class="row row-cols-1 row-cols-md-2 g-4">
    <?php 
      include 'dbconnect.php';
      $user_sno=$_SESSION['sno'];
      $sql="SELECT * FROM `purchase_courses` WHERE `user_id`='$user_sno'";
     
      $result=mysqli_query($conn,$sql);
      $num= mysqli_num_rows($result);
      if($num>0){
      while($row= mysqli_fetch_assoc($result)){
      
    ?>
       
  <div class="col">

<div class="card w-75">
  <a href="https://www.youtube.com/results?search_query=<?php echo $row['course_name'];?>+tutorial">
  <img src="../<?php echo $row['image'];?>"  class="d-flex mx-auto rounded-circle w-25 h-25" alt="...">
  </a>
 
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['course_name'];?></h5>
     <p><?php echo $row['course_desc'];?></p>
      <a href="https://www.google.com/search?q=<?php echo $row['course_name'];?>">
        <button type="button" class="btn btn-success">Read More</button>
      </a>
     <a href="https://www.youtube.com/results?search_query=<?php echo $row['course_name'];?>+tutorial">
     <button type="button" class="btn btn-warning text-white ms-4">Our Video Tutorial</button>
      </a>
  </div>
</div>
</div>
<?php } 
}
else{
?>
<!-- <marquee> <h4>No purchased courses</h4> </marquee> -->
    <h4>No purchased courses</h4>
 <?php }?>

</div>


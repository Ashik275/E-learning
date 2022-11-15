<div class="p-2 mb-3 " style="background-color:#3c4b64;">
  <h3 class="fw-bold text-white text-center">Our Latest Courses</h3>
</div>
<div class="container" id="our-courses">
  
<div class="row row-cols-1 row-cols-md-3 g-4 " >
<?php
include 'common/dbconnect.php';
 $sql="SELECT * FROM `ourcourses` ORDER BY id DESC LIMIT 6";
 $sql_all="SELECT * FROM `ourcourses`";
  $result= mysqli_query($conn,$sql);
  $result_all= mysqli_query($conn,$sql_all);
  $num=mysqli_num_rows($result_all);
  if($num<=0){
    ?>
    <h3>No Courses are available</h3>
  
  
  <?php }
  else{
  $sno=0;
  while($row= mysqli_fetch_assoc($result)){
      $id= $row['id'];
      $title= $row['course_title'];
      $pic=$row['image'];
      $description= $row['course_desc'];
      $course_fee= $row['course_fee'];
  
  ?>
  <div class="col">
    <div class="card h-100 ">
      <img class="d-flex mx-auto rounded-circle w-25 h-25" src="<?php echo $pic;?>"alt="...">
      <div class="card-body">
        <span class="card-title fw-bold me-3">Course Name :</span><?php echo $title;?> <br>
        <span class="card-text fw-bold me-3">About Course :</span><?php echo $description;?> <br>
        <span  class="card-text fw-bold me-3">Course Fee :</span><?php echo $course_fee;?> <br>
        <?php
          if(isset($_SESSION['loggedin']) &&  $_SESSION['loggedin']==true){
        ?>
       
          <button type="button" class="mt-5 btn btn-outline-dark" onclick=purchase_course(<?php echo $_SESSION['sno'];?>,<?php echo $id;?>);>Purchase</button>
      <?php }?>
      </div>
    
    </div>
    
  </div>
  <?php }}
  
  ?>
</div>
</div>
<?php 
 if($num>6){
?>
<div class="d-flex justify-content-center mt-2">
<button id="view-more" onclick="viewMore(<?php echo $id;?>)"class="btn btn-primary btn-sm ">View More</button>
</div>
<?php }?>
<script> 
  function purchase_course(user_id,course_id){
      var user_id=user_id;
      var course_id=course_id;
        $.ajax({
          url:'purchase_courses.php',
          method:'post',
          data:{user_id:user_id,course_id:course_id},
              success:function(data){
                  alert(data);
                  
              }
        })
  
      }
  function viewMore(id){
      var id=id;
        $.ajax({
          url:'load-data.php',
          method:'post',
          data:{id:id},
              success:function(data){
                  $('#view-more').css('display','none');
                  $('#our-courses').append(data); 
              }
        })
  
      }
</script>

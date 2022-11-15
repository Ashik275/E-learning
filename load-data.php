<?php
session_start();
 $id=$_POST['id'];
?>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-2" >
<?php
include 'common/dbconnect.php';
$sql="SELECT * FROM `ourcourses` WHERE `id`<$id";
  $result= mysqli_query($conn,$sql);
  $sno=0;
  while($row= mysqli_fetch_assoc($result)){
      $id= $row['id'];
      $title= $row['course_title'];
      $pic=$row['image'];
      $description= $row['course_desc'];
      $course_fee= $row['course_fee'];
  
  ?>
  <div class="col">
    <div class="card h-100">
      <img  class="d-flex mx-auto rounded-circle w-25 h-25" src="<?php echo $pic;?>"  alt="...">
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
  <?php }
  
  ?>
</div>

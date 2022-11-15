<?php
include 'common/dbconnect.php';
 $update_id=$_POST['update_id'];
 $sql="SELECT * FROM `ourcourses` WHERE `id`='$update_id'";
 $result=mysqli_query($conn,$sql);
 while($row= mysqli_fetch_assoc($result)){
?>
      <form method="post"  id="update_form">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course Title</label>
                <input  type="text" class="form-control" name="update_title"  id="update_title" aria-describedby="emailHelp" value="<?php echo $row['course_title'];?>">
                 <input type="hidden" name="update_hidden" value="<?php echo $row['id'];?>">
                 <input type="hidden" name="update_hidden_pic" value="<?php echo $row['image'];?>">
            </div>
            <div class="mb-3">
                    <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="update_description" id="description" name="update_description" value="<?php echo $row['course_desc'];?>"></textarea>
                    <label for="floatingTextarea">Description</label>
                    </div>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course fee</label>
                <input  value="<?php echo $row['course_fee'];?>" type="number" class="form-control" name="update_course_fee"  id="update_course_fee" aria-describedby="emailHelp">
            
            </div>
            <div class="mb-3">
                <input type="file" id="update_file" name="update_file" >
            
            </div>

            <button type="submit" class="btn btn-primary update" name="update">Update Course</button>
        
        </form>
<?php }?>
<script>
     $(document).ready(function(){
        $("#update_form").on("submit",function(e){
            e.preventDefault();
           var formData= new FormData(this);
           $.ajax({
            url:'update-course.php',
            type:"POST",
            data:formData,
            contentType:false,
            processData:false,
            success:function(data){
                $("#myTable3").load(" #myTable3> *");
                $('#updatecourses').modal('hide');
            }

           })
        })
    })
  
</script>
<!-- Update Modal  -->
<div class="modal fade" id="updatecourses" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title  fw-bold " id="exampleModalLabel">Update Course </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="update-modalBody">

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>
<!-- Modal FInished  -->

<h5 class="border rounded p-3 text-center text-white fw-bold"  style="background-color:#3c4b64;">Our Available Courses</h5>         
    <table class="table" id="myTable3">
        <thead class="bg-dark">
            <tr>
            <!-- <th scope="col">#</th> -->
            <th class="text-white fw-bolder" scope="col">Sno</th>
            <th class="text-white fw-bolder" scope="col">Course Title</th>
            <th class="text-white fw-bolder" scope="col">Course Description</th>
            <th class="text-white fw-bolder" scope="col">Course Fee</th>
            <th class="text-white fw-bolder" scope="col">Update</th>
            <th class="text-white fw-bolder" scope="col">Delete</th>
            </tr>
        </thead>
        <?php
          $sql="SELECT * FROM `ourcourses` ";
          $sql_2="SELECT * FROM `ourcourses`";
          $result= mysqli_query($conn,$sql);
          $result_2= mysqli_query($conn,$sql_2);
          $num=mysqli_num_rows($result_2);
          $sno=0;
          while($row= mysqli_fetch_assoc($result)){
              $id=$row['id'];
              $sno=$sno+1;
              $id= $row['id'];
              $title= $row['course_title'];
              $course_fee= $row['course_fee'];
              $description= $row['course_desc'];
         ?>
            <tbody >
                <tr id="our-tabele">
                
                <td><?php echo $sno;?></td>
                <td><?php echo $title;?></td>
                <td><?php echo $description;?></td>
                <td><?php echo $course_fee;?></td>
                
                <td>
                    <!-- <button  class="btn btn-success btn-sm edit" aria-current="page" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updatecourses">Update</button> -->
                    <button onclick="upate_data(<?php echo $id;?>)"  class="btn btn-success btn-sm" ><i class="fa-solid fa-pen-nib"></i></button>
                    
                </td>
                <td>
                <button onclick="delete_data(<?php echo $id;?>)"  class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                </td>
                </tr>
            </tbody>
        <?php  }?>
    </table>
    <script>
        
             //update data
             function upate_data(id){
                   $('#updatecourses').modal('show');
                  var update_id=id;
                   $.ajax({
                    url:'update.php',
                    method:"POST",
                    data:{update_id:update_id},
                        success:function(data){
                            $('#update-modalBody').html(data);
                            // alert(data);
                            // $("#myTable3").load(" #myTable3> *");
                            // $('#updatecourses').modal('show');
                        }

                    })

             } 
           
// delete data
        function delete_data(id){
            var id_delete=id;
            // alert(id_delete);
         var sure=confirm("Are You Sure to Delete it?");
         if(sure==true){
            $.ajax({
                url:'common/delete.php',
                method:"POST",
                data:{id_delete:id_delete},
                success:function(data){
                  // alert(data);
                    $("#myTable3").load(" #myTable3> *");
                }

               })
         }
      }
    </script>

   
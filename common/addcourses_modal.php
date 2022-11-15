<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="addcourses" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title  fw-bold " id="exampleModalLabel">Add New Courses</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            
            </div>
            <div class="mb-3">
                    <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"></textarea>
                    <label for="floatingTextarea">Description</label>
                    </div>
            </div>
            <div class="mb-3">
                <input type="file" name="file" id="file">
            
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course fee</label>
                <input type="number" class="form-control" id="title" name="course_fee" aria-describedby="emailHelp">
            
            </div>

            <button type="submit" class="btn btn-primary" name="add-courses">Submit</button>
        
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>


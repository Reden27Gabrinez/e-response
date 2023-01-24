<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form method="POST" action="admin_action.php">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Administrator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">    
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="full-name" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" id="full-name" placeholder=" ">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder=" ">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder=" ">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone No.</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder=" ">
                    </div>
                    </div>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
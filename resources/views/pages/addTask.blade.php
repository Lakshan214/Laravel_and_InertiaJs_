
  
  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="{{Route('task.save')}}" method="POST" >
        @csrf
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addModalLabel">Add Task</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="errMsgContainer mb-3" >
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name"placeholder="Product Name" required>
            </div>
            <div class="form-group">
                <label for="name">age</label>
                <input type="number" class="form-control" name="age" id="age"placeholder="Product Name" required>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary add_product">Save Product</button>
        </div>
      </div>
    </div>
</form>
  </div>
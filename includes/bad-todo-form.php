<form action="post.php" class="bad-todo" method="POST">
  <div class="form-group">
    <label for="">Date</label>
    <input required name="date" type="date" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Developer's Name (First and Last)</label>
    <input required name="developer" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Project Manager's Name (First and Last)</label>
    <input required name="pm" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Designers name (if applicable)</label>
    <input name="designer" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Project Manager's Team</label>
    <input required name="pmteam" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Name of Todo (ass seen in madoffice todo title)</label>
    <input required name="todo" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="">todo length in hours (as assigned by project manager)</label>
    <input required name="time" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="">developer time to complete todo</label>
    <input required name="completion" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="">bad todo description</label>
    <textarea required class="form-control" name="description" id="" cols="30" rows="10"></textarea>
  </div>
  <input type="submit" name="add-bad-todo" id="add-bad-todo" class="btn btn-primary form-control">
</form>
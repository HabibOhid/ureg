<?php include 'inc/header.php'; ?>
<br>
  <h2 class="page-header" style="text-align:center">Registration Form</h2>
  <br>
  <form method="post" action="create.php" class="container">
      <div class="form-group" style="text-align:center">
        <label>Previous Company</label>
        <input type="text" class="form-control" name="previous_company">
      </div>
      <div class="form-group" style="text-align:center">
        <label>Category</label>
        <select class="form-control" name="category">
          <option value="0">Choose Category</option>
          <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
          <?php endforeach; ?>
         </select>
      </div>
      <div class="form-group" style="text-align:center">
        <label>Job Title</label>
        <input type="text" class="form-control" name="job_title">
      </div>
      <div class="form-group" style="text-align:center">
        <label>About</label>
        <textarea class="form-control" name="about"> </textarea>
      </div>
      <div class="form-group" style="text-align:center">
        <label>Location</label>
        <input type="text" class="form-control" name="location">
      </div>
      <div class="form-group" style="text-align:center">
        <label>Contact User</label>
        <input type="text" class="form-control" name="contact_user">
      </div>
      <div class="form-group" style="text-align:center">
        <label>Contact Email</label>
        <input type="text" class="form-control" name="contact_email">
      </div>
      <input type="submit" class="btn btn-default" value="Submit" name="submit">
  </form>
<?php include 'inc/footer.php'; ?>

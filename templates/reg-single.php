<?php include 'inc/header.php'; ?>
<br>
  <h2 class="page-header" style="text-align:center"><?php echo $reg->job_title; ?> (<?php echo $reg->location; ?>)</h2>
  <small class="container ">Posted By <?php echo $reg->contact_user; ?> on <?php echo $reg->post_date; ?></small>
  <hr>
  <p class="lead container"><?php echo $reg->about; ?></p>
  <ul class="list-group container">
      <li class="list-group-item"><strong>Previous Company:</strong> <?php echo $reg->previous_company; ?></li>
      <li class="list-group-item"><strong>Contact Email:</strong> <?php echo $reg->contact_email; ?></li>
  </ul>
  <br><br>
  <a href="index.php" class="container float-right">Go Back</a>
  <br><br>
  <div class="well container">
      <a href="edit.php?id=<?php echo $reg->id; ?>" class="btn btn-default">Edit</a>
      <form style="display:inline;" action="reg.php" method="post">
        <input type="hidden" name="del_id" value="<?php echo $reg->id; ?>">
        <input type="submit" class="btn btn-danger" value="Delete">
      </form>
  </div>
 <br><br>
<?php include 'inc/footer.php'; ?>

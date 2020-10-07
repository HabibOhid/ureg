<?php include 'inc/header.php'; ?>
  <main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="images/img3.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Wellcome to Unemployment Register</h1>
              <p>Register yourself to get picked by company in the same filed that you worked before!</p>
              <p><a class="btn btn-lg btn-primary" href="create.php" role="button">Register Now</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 offset-lg-2 offset-md-1 float-md-center">
    <div class="jumbotron">
      <h1>Search Application</h1>
      <form method="GET" action="index.php">
          <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
              <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
          </select>
          <br>
          <input type="submit" class="btn btn-lg btn-primary" value="Search">
      </form>
    </div>
  </div>


    <h5 style="text-align:center"><?php echo $title; ?></h5>


    <?php foreach($regs as $reg): ?>
        <div class="container">
        <div class="row">
          <div class="col-lg-12 col-centered">

            <h5><?php echo $reg->job_title; ?></h5>
            <h6><?php echo $reg->contact_user; ?></h6>
            <p><?php echo $reg->about; ?></p>
            <a class="btn btn-primary" href="reg.php?id=<?php echo $reg->id; ?>">View details</a>
            <p></p>
          </div>
          <?php endforeach; ?>
        </div>
        </div>


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette" style="text-align:center">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img src="images/1.jpg" alt="Generic placeholder imag">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" style="text-align:center">
        <div class="col-md-7">
          <h2 class="featurette-heading">Second featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img src="images/2.jpg" alt="Generic placeholder imag">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img src="images/3.jpg" alt="Generic placeholder imag">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


<?php include 'inc/footer.php'; ?>

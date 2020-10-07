<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Unemployment Registration</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>

    <header>
     <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
       <a class="navbar-brand" href="#"><?php echo SITE_TITLE; ?></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item">
             <a class="nav-link" href="index.php">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="create.php">Registration</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Sign Up</a>
           </li>
         </ul>
       </div>
     </nav>
   </header>
    <?php displayMessage(); ?>

<!-- THIS IS THE START OF BEGINNING CODE BLOCK FOR ALL PAGES! -->
<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FirstName LastName - <?php echo $pageTitle ?></title>
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  
   <style>
    html {
     background: url(images/<?php echo $bkgdImage ?>) no-repeat center center fixed;
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     background-size: cover;
        }
   </style>
  </head>
  <body>
   <nav class="navbar navbar-expand-sm navbar-dark navbar-custom">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
     <span class="navbar-toggler-icon"></span>
    </button>
     <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
       <li class="nav-item"><a class="nav-link<?php if ($pageTitle =="Home") {?> active<?php } ?>" href="index.php">Home</a></li>
       <li class="nav-item"><a class="nav-link<?php if ($pageTitle =="About") {?> active<?php } ?>" href="about.php">About</a></li>
       <li class="nav-item"><a class="nav-link<?php if ($pageTitle =="Classes") {?> active<?php } ?>" href="classes.php">Classes</a></li>
       <li class="nav-item"><a class="nav-link<?php if ($pageTitle =="Interests") {?> active<?php } ?>" href="interests.php">Interests</a></li>
      </ul>
     </div>
   </nav>

<div class="container" style="margin-top:30px">
 <div class="row justify-content-center">
  <div class="col-sm-10">
   <div class="card">
    <div class="card-body">

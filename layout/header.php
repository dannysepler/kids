<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="kids doc pediatrics, dr. scaccabarrozzi, Luis E. Scaccabarrozzi, M.D., MPH">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../dist/img/stetho.ico">

    <title>Kids Doc Pediatrics <?php echo $pageTitle ?></title>

    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/css/bootstrap.css" rel="stylesheet">
    <link href="../dist/css/custom.css" rel="stylesheet">
    <link href="../dist/css/customs/<?php echo $css ?>.css" rel="stylesheet">
    
    <?php echo $else ?> 
      <!-- for any extra necessary javascript/css files... -->

    <script src="../dist/js/customs/<?php echo $js ?>.js"></script>
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="../demo.html">Home</a></li>
          <li <?php echo $insur ?> ><a href="insurance.php">Insurance</a></li>
		      <li <?php echo $new ?> ><a href="newpatients.php">New Patients</a></li>
          <li <?php echo $cont ?> ><a href="contact.php">Contact</a></li>
        </ul>
        <h3 class="main-logo"><a href="../demo.html">Kids Doc Pediatrics</a></h3>
      </div>

      <!-- Still in .container -->

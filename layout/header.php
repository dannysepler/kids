<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="kids doc pediatrics, dr. scaccabarrozzi, Luis E. Scaccabarrozzi, M.D., MPH">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../dist/img/stetho.png">

    <title>Kids Doc Pediatrics <?php echo $pageTitle ?></title>

    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/css/bootstrap.css" rel="stylesheet">
    <link href="../dist/css/custom.css" rel="stylesheet">
    <link href="../dist/css/customs/<?php echo $css ?>.css" rel="stylesheet">
    
    <?php echo $else ?> 
      <!-- for any extra necessary javascript/css files... -->

    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script>
      $('.collapse').collapse()
    </script>
    <script src="../dist/js/customs/<?php echo $js ?>.js"></script>
  
  </head>

  <body>

    <div class="container">
      <div>
        <a href="../demo.html"><img src="../dist/img/page-specific/kids-logo.png" /></a>
        <img src="../dist/img/phone.png" id="phone" align=right />
      </div>
      <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="demo.html">Kids Doc Pediatrics</a>-->
        </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="../demo.html">Home</a></li>
              <li <?php echo $immu ?> ><a href="immunization-home.php">Immunizations</a></li>
              <li <?php echo $new ?> ><a href="newpatients.php">New Patients</a></li>
              <li <?php echo $pare ?> ><a href="parent.php">For Parents</a></li>
              <li <?php echo $staf ?> ><a href="staff.php">Staff</a></li>
              <li <?php echo $cont ?> ><a href="contact.php">Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!-- Still in .container -->

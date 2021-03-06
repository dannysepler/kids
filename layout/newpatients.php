<?php 
	$pageTitle 	= '| New Patients';
	$css 		    = "newpatients";
  $js         = "none";
  $else       = "";

    /* for CSS to highlight header which page user is on */
  $immu		="";
  $new 		="class = \"active\"";
  $pare   ="";
  $cont 	="";
  $staf		="";

	include 'header.php'; 
?>

	<div class="row banner">
  </div>

  <div class="row pt-background">
    <div class="col-md-6">
			<!-- ENGLISH -->
			<h2>Information for New Patients</h2>
			<p>Welcome to Kids Doc Pediatrics. We are looking forward to meeting you. Please fill out the forms below and bring them to your first visit.</p>
			<p>Also, be advised of our privacy	practices by reading the <a href="#">Notice of Privacy Practices</a></p>
			<p><a href="#">Welcome</a></p>
			<p><a href="#">Developmental</a></p>
			<p><a href="#">Informed Consent</a></p>
			<p><a href="#">HIPPA</a></p>
			<p><a href="#">Records Release</a></p>
		</div>

    <!-- SPANISH -->
    <div class="col-md-6">
      <h2>Informacion para Pacientos Nuevos</h2>
      <p>Bienvenidos a Kids Doc Pediatrics, esperamos verlos pronto. Por favor llene las siguientes formas antes de su primera visita con el doctor.</p>
      <p>Recuerdo de leer como guardamos su privacidad en nuestro<a href="#"> Notice of Privacy Practices</a>.</p>    
      <p><a href="#">Welcome</a></p>
      <p><a href="#">Developmental</a></p>
      <p><a href="#">Informed Consent</a></p>
      <p><a href="#">HIPPA</a></p>
      <p><a href="#">Records Release</a></p>
    </div>
	</div>

<?php include 'footer.php'; ?>
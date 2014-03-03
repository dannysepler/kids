<?php 
	$pageTitle 	= '| Parents';
	$css 		= "parent";
  	$js         = "none";
  	$else       = "";

    /* for CSS to highlight header which page user is on */
  	$immu		="";
  	$new 		="";
  	$cont 		="";
  	$pare 		="class = \"active\"";
  	$staf		="";

	include 'header.php'; 
?>
	<div class="row banner">
  	</div>

  	<div class="row team">
		<h1 style="">We recommend:</h1>
		<p style="">
			<ul>
				<li><a href="http://www.aap.org/">American Academy of Pediatrics</a></li>
				<li><a href="http://www.cdc.gov/">Center for Disease Control</a></li>
				<li><a href="/immunization-home.php">Our Immunization Schedule</a></li>				
			</ul>
		</p>
  	</div>

<?php include 'footer.php'; ?>
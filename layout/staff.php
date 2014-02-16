<?php 
	$pageTitle 	= '| New Patients';
	$css 		    = "newpatients";
  $js         = "none";
  $else       = "";

    /* for CSS to highlight header which page user is on */
  $immu  ="";
  $new    ="";
  $cont   ="";
  $staf	  ="class=\"active\"";

	include 'header.php'; 
?>
	<div class="row tour">
		<div class="col-md-3">
			<h2>Meet our Team</h2>
		</div>
  	</div>

  	<div class="row pt-background">
  		<div class="col-lg-4" id="dr_s">
		  <img class="img-circle" img src="../dist/img/dr.png" alt="140x140">
		  <h2>Dr. Scaccabarrozzi<br><small>Paediatrician</small></h2>
		  <p>Luis E. Scaccabarrozzi, M.D., MPH., is a pediatrician in Gainesville. Dr. Scaccabarrozzi graduated from the San Martin de Porres University – Faculty of Medicine in Lima, Peru.  In Peru, he served as the Director of the Municipal Health Center in the main port of Peru (Callao).  He was the coordinator for many immunizations programs and health care of children in the community.  He completed a Masters of Public Health at the University of Illinois.  Upon completion of his master’s degree he was involved in research at the University of Illinois, Erie Family Health Center, Centro San Bonifacio, and the Federal Bureau of Investigation.  In 2004, he completed his post graduate Pediatric Medical Residency at St. Louis Children’s Hospital in St. Louis, Missouri.  After graduating he settled in Gainesville in private practice until establishing Kids Doc Pediatrics in 2007. He participates professionally as a member of the University of Florida – Pediatrics After Hours as an Adjunct Assistant Professor.   He has privileges at Shands at AGH, Shands at University of Florida, and North Florida Regional Medical Center</p>
		  <p>Dr. Scaccabarrozzi is a resident of Gainesville.  Outside of work, he enjoys spending time with his wife and 3 children (Gianella, Andrea, and Piero).  </p>
	  </div><!-- /.col-lg-4 -->
	  <div class="col-lg-4" id="mrs_s">
		  <img class="img-circle" img src="../dist/img/yvonne.png" alt="140x140">
		  <h2>Mrs. Scaccabarrozzi<br><small>Office Manager</small></h2>
		  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
	  </div><!-- /.col-lg-4 -->
	<div class="col-lg-4" id="nurse">
		  <img class="img-circle" img src="../dist/img/rn.png" alt="140x140">
		  <h2>Nurse Name<br><small>Registered Nurse</small></h2>
		  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
	  </div><!-- /.col-lg-4 -->
  	</div>

<?php include 'footer.php'; ?>
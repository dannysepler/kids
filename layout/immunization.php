<?php
	$pageTitle 	= "| Immunization Schedule"; 
	$css 		= "custom";
	$js 		= "iframe_resize";
	$else 		= "";

	    /* for CSS to highlight header which page user is on */
	$insur		="class = \"active\"";
	$new		="";
	$cont		="";

	include 'header.php'; 
?>
<div class="row tour">
	<div class="col-md-3">
		<h2>Vaccination Schedule</h2>
	</div>
	<div class="col-md-9">
	</div>
</div>
	
<div class="row team">
	<h1>Here's the recommended vaccination schedule from the CDC</h1>
	<iframe src="http://www.cdc.gov/vaccines/schedules/hcp/imz/child-adolescent-shell.html" width="100%" height="800px" frameborder="0" scrolling="auto" id="Iframe" title="Child Immunization Schedule" onload="autoResize();">Child Immunization Schedule</iframe>
</div>

<?php include 'footer.php'; ?>
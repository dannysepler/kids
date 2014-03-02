<?php
	$pageTitle 	= "| Immunization Schedule"; 
	$css 		= "immunization";
	$js 		= "iframe_resize";
	$else 		= "";

	    /* for CSS to highlight header which page user is on */
	$immu		="class = \"active\"";
	$new		="";
	$cont		="";
	$staf		="";

	include 'header.php'; 
?>
<div class="row banner">
</div>
	
<div class="row team">
	<h1>Welcome to your one-stop shop for immunization info</h1>
	<h2>
		Take a look at the CDC-recommended <em><a href="http://www.cdc.gov/vaccines/schedules/hcp/imz/child-adolescent-shell.html" target="_blank">immunization schedule</a></em> for your child
	</h2>
	<h3> Or.... </h3>
	<h2>Scroll down for VIS forms</h2>

	<p>The forms</p>
		<ul>
			<li> <!-- 1 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/hep-b.pdf" target="_blank">
					Hepatitis B
				</a>
			</li>
			<li> <!-- 2 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/rotavirus.pdf" target="_blank">
					Rotavirus
				</a>
			</li>
			<li> <!-- 3 -->
				<a href="http://www.immunize.org/vis/dtap.pdf" target="_blank">
					Diphtheria, tetanus, and acellular pertussis
				</a>
			</li>
			<li> <!-- 4 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/hib.pdf" target="_blank">
					Haemophilus influenzae type b
				</a>
			</li>
			<li> <!-- 5 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/pcv13.pdf" target="_blank">
					Pneumococcal conjugate
				</a>
			</li>
			<li> <!-- 6 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/ppv.pdf" target="_blank">
					Pneumococcal polysaccharide
				</a>
			</li>
			<li> <!-- 7 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/ipv.pdf" target="_blank">
					Polio
				</a>
			</li>
			<li> <!-- 8 -->
				Influenza - 
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/flulive.pdf" target="_blank">
					Live, Intranasal
				</a>
				, or
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/flu.pdf" target="_blank">
					Inactivated
				</a> 
			</li>
			<li> <!-- 9 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/mmr.pdf" target="_blank">
					Measles, mumps, rubella
				</a>
			</li>
			<li> <!-- 10 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/varicella.pdf" target="_blank">
					Varicella
				</a>
			</li>
			<li> <!-- 11 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/hep-a.pdf" target="_blank">
					Hepatitis A
				</a>
			</li>
			<li> <!-- 12 -->
				Human papillomavirus
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/hpv-gardasil.pdf" target="_blank">
					Gardasil
				</a>
			</li>
			<li> <!-- 13 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/mening.pdf" target="_blank">
					Meningococcal
				</a>
			</li>

		</ul>
</div>

<?php include 'footer.php'; ?>
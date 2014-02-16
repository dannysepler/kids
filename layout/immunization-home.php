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
<div class="row tour">
	<div class="col-md-3">
		<h2>Immunization Home</h2>
	</div>
</div>
	
<div class="row team">
	<h1>Welcome to your one-stop shop for immunization info</h1>
	<h2>
		Take a look at the CDC-recommended <em><a href="http://www.cdc.gov/vaccines/schedules/hcp/imz/child-adolescent-shell.html">immunization schedule</a></em> for your child
	</h2>
	<h3> Or.... </h3>
	<h2>Scroll down for VIS forms</h2>

	<p>The forms</p>
		<ul>
			<li> <!-- 1 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/hep-b.html">
					Hepatitis B
				</a>
			</li>
			<li> <!-- 2 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/rotavirus.pdf">
					Rotavirus
				</a>
			</li>
			<li> <!-- 3 -->
				<a href="http://www.immunize.org/vis/dtap.pdf">
					Diphtheria, tetanus, and acellular pertussis
				</a>
			</li>
			<li> <!-- 4 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/hib.pdf">
					Haemophilus influenzae type b
				</a>
			</li>
			<li> <!-- 5 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/pcv13.pdf">
					Pneumococcal conjugate
				</a>
			</li>
			<li> <!-- 6 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/ppv.pdf">
					Pneumococcal polysaccharide
				</a>
			</li>
			<li> <!-- 7 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/ipv.pdf">
					Polio
				</a>
			</li>
			<li> <!-- 8 -->
				Influenza - 
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/flulive.pdf">
					Live, Intranasal
				</a>
				, or
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/flu.pdf">
					Inactivated
				</a> 
			</li>
			<li> <!-- 9 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/mmr.pdf">
					Measles, mumps, rubella
				</a>
			</li>
			<li> <!-- 10 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/varicella.pdf">
					Varicella
				</a>
			</li>
			<li> <!-- 11 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/hep-a.pdf">
					Hepatitis A
				</a>
			</li>
			<li> <!-- 12 -->
				Human papillomavirus
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/hpv-cervarix.pdf">
					Cervarix
				</a>
				or
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/hpv-gardasil.pdf">
					Gardasil
				</a>
			</li>
			<li> <!-- 13 -->
				<a href="http://www.cdc.gov/vaccines/hcp/vis/vis-statements/mening.pdf">
					Meningococcal
				</a>
			</li>

		</ul>
</div>

<?php include 'footer.php'; ?>
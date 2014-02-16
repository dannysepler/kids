<?php
	$pageTitle 	= "| Immunization Schedule"; 
	$css 		= "immunization";
	$js 		= "iframe_resize";
	$else 		= "";

	    /* for CSS to highlight header which page user is on */
	$immu		="class = \"active\"";
	$new		="";
	$cont		="";

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

	<p>Birth to 15 months</p>
		<ul>
			<li> <!-- 1 -->
				<a href="">
					Hepatitis B
				</a>
			</li>
			<li> <!-- 2 -->
				<a href="">
					Rotavirus
				</a>
			</li>
			<li> <!-- 3 -->
				<a href="">
					Diphtheria, tetanus, and acellular pertussis
				</a>
			</li>
			<li> <!-- 4 -->
				<a href="">
					Haemophilus influenzae type b
				</a>
			</li>
			<li> <!-- 5 -->
				<a href="">
					Pneumococcal conjugate
				</a>
			</li>
			<li> <!-- 6 -->
				<a href="">
					Pneumococcal polysaccharide
				</a>
			</li>
			<li> <!-- 7 -->
				<a href="">
					Inactivated poliovirus
				</a>
			</li>
			<li> <!-- 8 -->
				<a href="">
					Influenza
				</a>
			</li>
			<li> <!-- 9 -->
				<a href="">
					Measles, mumps, rubella
				</a>
			</li>
			<li> <!-- 10 -->
				<a href="">
					Varicella
				</a>
			</li>
			<li> <!-- 11 -->
				<a href="">
					Hepatitis A
				</a>
			</li>
			<li> <!-- 12 -->
				<a href="">
					Human papillomavirus
				</a>
			</li>
			<li> <!-- 13 -->
				<a href="">
					Meningococcal
				</a>
			</li>

		</ul>

	<p>18 months to 18 years</p>
		<ul>
		</ul>

</div>

<?php include 'footer.php'; ?>
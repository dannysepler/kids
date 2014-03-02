<?php 
	$pageTitle	="| Contact";
	$css		="contact";
	$js			="contact";
	$else 		="<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB4Kd67wuhdWb_M9hTK3biBB9nosn5sxng&sensor=true\"> </script>";

	    /* for CSS to highlight header which page user is on */
	$immu		="";
	$new		="";
	$cont		="class = \"active\"";
	$staf		="";

	include 'header.php'; 
?>
	<div class="row banner">
  	</div>

	<div class="row pt-background">
		<div class="col-md-6 pd">
			<h2>Contact Information</h2> <!-- The google map -->
			<address><h4><span class="glyphicon glyphicon-envelope"></span> Kids Doc Pediatrics</h4>6440 W Newberry Rd #105, <br> Gainesville, FL 32605</address>
			<address>Phone: <a href="tel:3523324400">(352) 332-4400</a><br>Email: <a href="mailto:kidsdocpediatrics@yahoo.com">kidsdocpediatrics@yahoo.com</a></address> 
			<h4><span class="glyphicon glyphicon-time"></span> Hours of Operation</h4>
			<time itemprop="openingHours" datetime="Mo,Fr 8:00-17:00">Monday - Friday 8 AM-5 PM <br></time>
			<time>Lunch hour is observed from 12 PM-1 PM<br></time>
			<time itemprop="openingHours" datetime="Sa 8:00-12:00">Saturday 8 AM-12 PM As needed for sick visits</time>
		</div>
		<div class="col-md-6">
			<h2><span class="glyphicon glyphicon-map-marker"></span> Find Us</h2> <!-- The google map -->
			<div id="map-canvas"></div>
		</div>
	</div>
	<div class="row pt-background">
		<div class="col-md-6 col-md-offset-3">

			<h2><span class="glyphicon glyphicon-hand-right"></span> Talk to Us</h2> <!-- The contact form -->
			<form id="contact-form" method="post" action="../dist/php/smtp-form.php">
				<div>
					<label>
						<span>Name: (required)</span>
						<input name="name" placeholder="Name" type="text" tabindex="1" required>
					</label>
				</div>

				<div>
					<label>
						<span>Email: (required)</span>
						<input name="email" placeholder="Email" type="email" tabindex="2" required>
					</label>
				</div>

				<div>
					<label>
						<span>Telephone</span>
						<input name="tel" placeholder="Telephone" type="tel" tabindex="3">
					</label>
				</div>

				<div>
					<label>
						<span>Message: (Required)</span>
						<textarea name="message" placeholder="Please include all relevant information" tabindex="4" required></textarea>
					</label>
				</div>

				<div>
					<button name="submit" type="submit" id="contact-submit">Send Email</button>
				</div>
			</form>
  		</div>
  	</div>

<?php include 'footer.php'; ?>
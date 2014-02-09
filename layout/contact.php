<?php 
	$pageTitle	="| Contact";
	$css		="contact";
	$js			="contact";
	$else 		="<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB4Kd67wuhdWb_M9hTK3biBB9nosn5sxng&sensor=true\"> </script>";

	    /* for CSS to highlight header which page user is on */
	$insur		="";
	$new		="";
	$cont		="class = \"active\"";

	include 'header.php'; 
?>
	<div class="row tour">
		<div class="col-md-3">
			<h2>Contact Us</h2>
		</div>
		<div class="col-md-9">
		</div>
  	</div>

	<div class="row team">
  		<h2>Find Us</h2> <!-- The google map -->
  		<div id="map-canvas" style="height:500px;width:80%;margin-left:10%;"></div>

  		<h2>Talk to Us</h2> <!-- The contact form -->
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

<?php include 'footer.php'; ?>
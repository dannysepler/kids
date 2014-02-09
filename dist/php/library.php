<?php
	/* this is for the contact form page. Will send e-mail
	through the noted email address. Am using a combination
	of Thunderbird and GMail's SMTP server to do this. 

	Helpful links:
		http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/

		Look up Mozilla Thunderbird

	*/

	error_reporting(0);

	define("SMTP_HOST", "smtp.googlemail.com");
	define("SMTP_PORT", "587");

	define("SMTP_UNAME", "kidsdocgville@gmail.com");
	define("SMTP_PWORD", "qwop1290!");

?>
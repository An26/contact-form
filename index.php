<?php
	$sent=$_GET['send'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>A Nice &amp; Simple Contact Form</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<img src="assets/images/title.gif" alt="A Nice &amp; Simple Contact Form" /><br /><br />
		<!--<p>By <a href="http://css-tricks.com">CSS-Tricks</a></p>-->
		
		<p>Please feel free to reach me by email at anytime with any questions or comments.</p>
				
		<div id="contact-area">

			<?php
			//  echo $sent;
				if ($sent === 'true') {
					echo "<h1>Thank you, your email has been sent.</h1><br />";
				} elseif ($sent === 'false') {
					echo "<h1>Sorry your email did not go through, please try again or contact me at anh@sherrymatthews.com</h1><br />";
				} else {
					echo "";
				}
			?>
		
			<form method="post" action="contactengine.php">
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="Name" />
				
				<label for="City">City:</label>
				<input type="text" name="City" id="City" />
	
				<label for="Email">Email:</label>
				<input type="text" name="Email" id="Email" />
				
				<label for="Message">Message:</label><br />
				<textarea name="Message" rows="20" cols="20" id="Message"></textarea>

				<input type="submit" name="submit" value="Submit" class="submit-button" />
			</form>
			
			<div style="clear: both;"></div>
			
		
		</div>
	
	</div>

</body>

</html>
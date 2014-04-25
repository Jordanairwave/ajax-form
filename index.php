<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title>Ajax Form</title>
	<meta charset="utf-8">
</head>
<body>
	<div id="page-wrap">
		<article class="section-class" id="contact-section">
			<form id="contact-form" method="post" action="form/send.php">
				<fieldset>
					<label>Name</label>
					<input type="text" name="name" id="name" placeholder="Your full name" />
				</fieldset>
				<fieldset>
					<label>Email</label>
					<input type="email" name="email" id="email" placeholder="you@yourmail.com" />
				</fieldset>
				<fieldset>
					<label>Message</label>
					<textarea name="message" id="message" placeholder="Enter your message"></textarea>
				</fieldset>
				<fieldset>
					<button type="submit">Send</button>
				</fieldset>
				<p id="form-messages"></p>
				<div id="error-messages">
					<div class="container">
					</div>
				</div>
			</form>
		</article>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.44232.js"></script>
	<script type="text/javascript" src="js/scripts.js?v=1.0"></script>
</body>
</html>
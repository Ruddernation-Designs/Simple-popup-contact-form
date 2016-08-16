<!DOCTYPE html>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<head>
<title>Contact Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel=stylesheet type="text/css" media=all href="css/contact.css">
<link rel=stylesheet type="text/css" media=all href="css/jquery.fancybox.css">
<link rel="shortcut icon" href="https://cdn.ruddernation.com/images/ico/favicon.ico">
<script src="js/jquery/jquery-latest.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/contact.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<button class="modalbox button" href="#inlinetext">Contact</button>
<!-- Contact -->
<div id="inlinetext">
<form id="contact" name="contact" action="#" method="post">
<label for="name">Name:</label>
<input type="text" id="name" name="name" class="txt" required><br />
<label for="email">Email:</label>
<input type="email" id="email" name="email" class="txt" required><br />
<label for="enquiry">Enquiry:</label>
<select id="enquiry" name="enquiry" class="txt">
<option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>General</option>
<option value="Information" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Information') ? "selected='selected'" : '' ?>>Information</option>
<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Support</option>
</select>
<br/>
<label for="msg">Enter a Message</label>
<textarea id="msg" name="msg" class="txtarea" required></textarea>
<div class="g-recaptcha" data-sitekey="Google-Site-Key"></div>
<button id="send">Submit</button>
</form>
</div>
<!-- /Contact -->
</body>
</html>

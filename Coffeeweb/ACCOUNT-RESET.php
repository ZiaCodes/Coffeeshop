<!DOCTYPE html>
<html>
<head>
<title>Reset your Ziacodes Account</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Login , registration, forgot password "./>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
		<div class="login-03">
		<div class="three-login  hvr-float-shadow">
			<div class="three-login-head">
					<img src="images/top-key.png" alt=""/>
					<h3>account reset</h3>
					<lable></lable>
			</div>
			<form action="Registration.php" method="post">
				<h5>Forgot Password or Username?</h5>
				<p>To reset your account password or username, enter the
					email address and we will send your instruction.</p>
				<li>
					<input type="text" name="E-mail" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}" ><a href="#" class=" icon3 mail2"></a>
				</li>
				<div class="g-recaptcha" data-sitekey="6Lfq-NwUAAAAADH15lzAR2F2jmiJ1B_V2WndAwAp"></div>
				<div class="submit three">
					<input type="submit" name="RESET" value="RESET" >
				</div>
				<h5>Back to<a href="index.php"style="color:#f26122;">Home </a>page.</h5>
			</form>
		</div>
	</div>
</body>
</html>

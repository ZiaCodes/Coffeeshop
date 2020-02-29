<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Login , registration, forgot password "./>
<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<div class="login-02">
		<div class="two-login  hvr-float-shadow">
			<div class="two-login-head">
					<img src="images/top-note.png" alt=""/>
					<h2>register</h2>
					<lable></lable>
			</div>

			<!--################# Form Start from here ##############-->

			
			<form action="Registration.php" method="post">
			<!--	<li>
					<input type="text" class="text" value="Invitation Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'code';}" ><a href="#" class=" icon2 num"></a>
				</li>
				<li>
					<input type="text" class="text" value="Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Full Name';}" ><a href="#" class=" icon2 name"></a>
				</li>
				-->
				<li>
					<input name="user" type="text" class="text" placeholder="Create a username" required autocomplete="off"><a href="#" class=" icon2 user2"></a>
				</li> 
				
				<!--
				<li style="height:47px;">
					<select style="height:47px;width:88%;float:right;" type="text" class="text" value="Username" ><a href="#" class=" icon2 user2"></a>
							<option value="volvo">Department and Year of Studying</option>
							<option value="saab">DME-1</option>
							<option value="opel">DME-2</option>
							<option value="audi">DME-3</option>
							<option value="saab">DEE-1</option>
							<option value="opel">DEE-2</option>
							<option value="audi">DEE-3</option>
							<option value="saab">DCE-1</option>
							<option value="opel">DCE-2</option>
							<option value="audi">DCE-3</option>
							<option value="saab">DETCE-1</option>
							<option value="opel">DETCE-2</option>
							<option value="audi">DETCE-3</option>
						</select>
						<a href="#" class=" icon2 user2"></a>
				</li>
				-->
				<li>
					<input name="password" type="password" placeholder="Create a passward" required><a href="#" class=" icon2 lock2"></a>
				</li>
				<div class="g-recaptcha" data-sitekey="6LfiSN0UAAAAAMDbIzUyWho_xXLS2WE_cSf4A4fW"></div>
				<!--
				<li>
					<input name="cpassword" type="password" placeholder="Confirm your passward" required><a href="#" class=" icon2 lock2"></a>
				</li>
				
				
				<li>
					<input type="text" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}" ><a href="#" class=" icon2 mail"></a>
				</li>
				<div class="p-container">
					<label><input type="checkbox" name="checkbox" ><i></i>I agree to the <a href="#">Terms of Servicee</a></label>
				</div>
				-->
				<div class="submit two">
						<input name="submit" type="submit"  value="SIGN UP" >
				</div>
					<h5>Already a member ?<a href="index.php">Go Back</a></h5>
			</form>
		</div>
	</div>
</body>
</html>

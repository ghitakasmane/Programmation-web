
<!DOCTYPE HTML>
<html>  

<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container" id="container">	

<div class="form-container sign-in-container">
	
<form action="logindb.php" method="post">
<h1> Connectez-vous </h1> <br>
	<tr>
		<td>
login       :
</td>
<td>
<input type="text" name="login" value=<?php $login ?>><br>
</td>
</tr>
<tr>
	<td>
Mot de passe: </td>
<td><input type="password" name="passwd" value=<?php $passwd ?>><br></td>
<br>
</tr>

<tr>
	<td>
		
<button type="submit" name="signin" value="sign in" >Sign in </button>
</td>

</tr>
</div>
</form>
</table>

<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button  id="signIn">Sign In</button>
				
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button  id="signUp"><a href="formsignup.php">Sign Up</button></a>
			</div>
		</div>
	</div>


</div>
</body>
</html>


<!--<h2>Weekly Coding Challenge #1: Sign in/up Form</h2>
<div class="container" id="container" align="center">
	<div class="sign-in-container">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
-->

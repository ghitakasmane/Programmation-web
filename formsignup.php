
<!DOCTYPE HTML>
<html>  

<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container2" id="container">
<div class="form-container2 sign-in-container2">
    <br>
<h1 align=center> Create your account  </h1>
<br>
<br>

<table  align="center">

<form action="registrationdb.php" method="post"  enctype="multipart/form-data">
<div align=center >
login       :
<input type="text"  name="login" required><br>
</div>
<br>
<div align=center>
Mot de passe: 
<input type="password" name="passwd" required><br>
</div>
<br>
<div align=center>
NOM          :
<input type="text" name="name" required><br>
</div>
<br>
<div align=center>
Prenom: 
<input type="text" name="prenom" required><br>
</div>
<br>
<div align=center>
FILIERE:
 <input type="text" name="filiere" required><br>
</div>
<br>
<div align=center>
CNE    :
<input type="text" name="cne" required><br>
</div>
<br>
<div align=center>
<input type="file" name="image"  required> 
</div>
<br>
<div class="ghost" align=center>
<button type="submit" name="signup" value="sign up">Sign up </button>
</div>

<br>

</form>

</table>
</div>



<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>To return to your login page press the button below</p>
				<button class="ghost" id="signUp"><a href="home.php">Sign In</button></a>
			</div>
		</div>
	</div>


</div>
</body>
</html>
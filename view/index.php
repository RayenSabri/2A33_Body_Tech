

<!DOCTYPE html>
<html>
<head>
	
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<title>Page de connexion</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #F2F2F2;
		}
		.container {
			margin: 0 auto;
			padding: 50px;
			background-color: #FFFFFF;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			max-width: 400px;
		}
		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: none;
			border-radius: 4px;
			background-color: #F2F2F2;
		}
		button {
			background-color: #FF0000;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}
		button:hover {
			background-color: #FF0000;
		}
	</style>
	<script src="captcha.js"></script>
</head>
<body onload="generate()">
	<div class="container">
		<h2>Connexion</h2>
		<form method="post" action="verif.php">
			<label for="username">Nom d'utilisateur</label>
			<div>
				<span style="color:red"> <?php if(isset($_GET['error'])) echo "Numéro de carte d'identité ou mot de passe incorrect."   ?></span>
			</div>
			<input type="text" id="username" name="username"  placeholder="Nom d'utilisateur">

			<label for="password">Mot de passe</label>
			<input type="password" id="password" name="password" placeholder="Mot de passe">

			<button id="signup-btn" type="submit" disabled >Se connecter   </button>
			<p>Vous n'avez pas de compte ? <button type="submit"><a href="addA.php">Créer un compte</a></button></p>
		
			<div class="g-recaptcha" data-sitekey="6Le6eboaAAAAAHgYnCDd9qjLk6V8Ge1y2Gsxn5Fw" data-callback="enableSubmit">
				
			</div>
		
			
		 
			
		 
		</form>
		<script>

			
			function enableSubmit() {
				document.getElementById('signup-btn').removeAttribute('disabled');
			}
		</script>
		<script src="https://www.google.com/recaptcha/api.js" ></script>
</body>
</html>

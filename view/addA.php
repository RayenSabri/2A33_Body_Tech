<?php


    include_once '../Model/admin.php';
    include_once '../Controller/adminC.php';
    use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;
                
                require 'PHPMailer/src/Exception.php';
                require 'PHPMailer/src/PHPMailer.php';
                require 'PHPMailer/src/SMTP.php';
                

    $error = "";

    // create deplacement
    $admin = null;

    // create an instance of the controller
    $adminC = new adminC();

    if (
        isset($_POST["cin"]) &&
        isset($_POST["nom"]) &&
        isset($_POST["prenom"]) &&
        isset($_POST["type"]) &&
        isset($_POST["email"]) &&
        isset($_POST["tel"]) &&
        isset($_POST["password"])
    ) {
        if (
            !empty($_POST["cin"]) &&
            !empty($_POST["nom"]) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["type"]) &&
            !empty($_POST["email"]) &&
            !empty($_POST["tel"]) &&
            !empty($_POST["password"])
        ) {

            
            $admin = new admin(
                
                $_POST['cin'],
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['type'],
                $_POST['email'],
                $_POST['tel'],
                $_POST['password']
                
            );
            if($adminC->ajouteradmin($admin))
            /*
            header('location addA.php');
            else*/
            {
                
                if(isset($_POST['submit'])){
                    $name = ($_POST['nom']);
                    $email = ($_POST['email']);
                    $subject = ($_POST['type']);
                    $message = ($_POST['tel']);
                
                    $mail = new PHPMailer(true);
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'yassinouri4@gmail.com';
                    $mail->Password = 'vadjjbzinffzkyka';
                    $mail->Port = 465;
                    $mail->SMTPSecure = 'ssl';
                    $mail->isHTML(true);
                    $mail->setFrom('yassinouri4@gmail.com', "crococoders");
                    $val=random_int(100000,999999);
                    $mail->addAddress($email);
                    $mail->Subject =("email verification");
                    $mail->Body = ("your verification code is :".$val);
                    $mail->send();
                
                    header("Location: ./response.html");
                }
            }
            exit();
        } else {
            $error = "Missing information";
        }

    }



?>
<!DOCTYPE html>
<html>
<head>
	<title>Créer un compte administrateur</title>
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
			max-width: 600px;
		}
		input[type="text"], input[type="password"], input[type="email"], input[type="number"] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: none;
			border-radius: 4px;
			background-color: #F2F2F2;
		}
		button {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}
		button:hover {
			background-color: #45a049;
		}
		.form-footer {
			margin-top: 10px;
			font-size: 14px;
			text-align: center;
		}
		.form-footer a {
			color: #4CAF50;
			text-decoration: none;
		}
		.error-message {
			color: red;
			font-size: 12px;
			margin-top: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Créer un compte administrateur</h2>
		<form action="email.php" method="post" name="inscription">
			<label for="cin">CIN</label>
			<input type="number" id="cin" name="cin" placeholder="CIN">

			<label for="nom">Nom</label>
			<input type="text" id="nom" name="nom" placeholder="Nom">

			<label for="prenom">Prénom</label>
			<input type="text" id="prenom" name="prenom" placeholder="Prénom">

			<label for="type">type</label>
			<input type="text" id="salaire" name="type" placeholder="type">

			<label for="email">Adresse email</label>
			<input type="email" id="email" name="email" placeholder="Adresse email">

			<label for="tel">Téléphone</label>
			<input type="number" id="tel" name="tel" placeholder="Téléphone">

			<label for="password">Mot de passe</label>
			<input type="text" id="password" name="password" placeholder="Mot de passe">

			<label for="confirm-password">Confirmer le mot de passe</label>
			<input type="text" id="confirm_password" name="confirm_password" placeholder="Confirmer le mot de passe">
           
			<button  type="submit" name="submit" id="mybtn" onclick="passvalidation()"  >Créer un compte</button>
            
            <input type="reset" value="reset">
			
            <div class="form-footer">
                <a href="index.php">J'ai déjà un compte</a>
            </div>
    </form>
</div>

<script>
 
    const bouton=document.getElementById("mybtn");
     bouton.addEventListener("click",passValidation)
     function passValidation()
     {
        const password1 = document.getElementById("password").value;
  const password2 = document.getElementById("confirm_password").value;

  // Vérifier si les deux mots de passe sont identiques
  if (password1 === password2 && password1.length!=0 && password2.length!=0) {
    // Les mots de passe sont identiques, renvoyer true
    alert("identiques");
     
   
  } else {
    // Les mots de passe ne sont pas identiques, renvoyer false
   alert("ne sont pas identiques");
   
   var sh='azertyuiopqsdfghjklmwxcvbn';
       var kh='AZERTYUIOPQSDFGHJKLMWXCVBN';
       var bh='AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghjklmwxcvbn';
       var dh='AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghjklmwxcvbn0123456789';
       var mh='0123456789';
var i,qa=0;
var error1,error2,error3,error4,error5;
var correct1,correct2,correct3,correct4,correct5;
        const id = document.getElementById('cin').value;
        const firstName = document.getElementById('nom').value;
        const lastName = document.getElementById('prenom').value;
        const salaire = document.getElementById('salaire').value;
        const email = document.getElementById('email').value;
        const phoneNumber = document.getElementById('tel').value;
        const password1 = document.getElementById('password').value;
        const password2 = document.getElementById('confirm_password').value;
      
        for(i=0;i<id.length;i++)
        {  
            if ( id.length==0  || isNaN(id)|| id.length!=8|| mh.indexOf(id.charAt(i))==-1)
             {
                alert("id invalid");return false;

    }else
{qa++}}
        for(i=0;i<firstName.length;i++)
        {  
            if ( firstName.length==0 || firstName.length<3 || bh.indexOf(firstName.charAt(i))==-1)
             {
                alert("nom invalide");return false;

    }  else
{qa++}}


        for(i=0;i<lastName.length;i++)
        {  if (lastName.length<4 ||  bh.indexOf(lastName.charAt(i))==-1) 
            {
   
                alert("prenom invalide");return false;
  
}}
for(i=0;i<salaire.length;i++)
 
 {  if ( salaire.length<0 || isNaN(salaire) || mh.indexOf(salaire.charAt(i))==-1) {

    alert("type invalide");return false;
}else
{qa++}}

for(i=0;i<phoneNumber.length;i++)


 {  if ( phoneNumber.length<0 || isNaN(phoneNumber) || mh.indexOf(phoneNumber.charAt(i))==-1) {

    alert("phone invalide");return false;
}else
{qa++}}
 
  var s=0;
  var k=0;
  var m=0;
  const l=password1.length;
  
for(i=0;i<password1.length;i++)
{ if(mh.indexOf(password1.charAt(i))!=-1){k++;} 
if(sh.indexOf(password1.charAt(i))!=-1){s++;} 
if(kh.indexOf(password1.charAt(i))!=-1){m++;} 
 }
    if (l<10 || s+k+m==l || s==0 || k==0 ||m==0  ) {
    
        alert("password invalid");return false;
  }  
  var z=0;
  var e=0;
  var r=0;
  const a=password2.length;
  
for(i=0;i<password2.length;i++)
{ if(mh.indexOf(password2.charAt(i))!=-1){e++;} 
if(sh.indexOf(password2.charAt(i))!=-1){z++;} 
if(kh.indexOf(password2.charAt(i))!=-1){r++;} 
 }
    if (a<10 || z+e+r==a || z==0 || e==0 ||r==0  ) {
  
        alert("confirm password invalid");return false;
  } else
{qa++}
  if(qa==5)
  {
    alert("gg");}
  if (password1 === password2 && password1.length!=0 && password2.length!=0) {
    // Les mots de passe sont identiques, renvoyer true
    alert("identiques");
     
   
  } else {
    // Les mots de passe ne sont pas identiques, renvoyer false
   alert("ne sont pas identiques");
   
}}
  }
     
  
</script>
 
        
     


    
</body>
</html>

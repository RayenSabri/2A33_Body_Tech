<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    include __DIR__."/PHPMailer/src/Exception.php";
    include __DIR__."/PHPMailer/src/SMTP.php";
    include __DIR__."/PHPMailer/src/PHPMailer.php";
    
    //require 'vendor\autoload.php';
    
    if(isset($_POST['submit'])){
       // $name = ($_POST['nom']);
        //$email = ($_POST['email']);
       // $subject = ($_POST['type']);
       // $message = ($_POST['tel']);
    
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'yassinouri4@gmail.com';
        $mail->Password = 'vadjjbzinffzkyka';
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->isHTML(true);
        $mail->setFrom('yassinouri4@gmail.com', "crococoders");
        $val=random_int(100000,999999);
        $mail->addAddress($_POST["email"]);
        $mail->Subject =("email verification");
        $mail->Body = ("your verification code is :".$val);
        $mail->send();

        echo "
        <script> alert('sent successfully');
        document.location.href='addA.php';
        </script>";
    
       // header("Location: ./response.html");
    }
    


    include_once '../Model/admin.php';
    include_once '../Controller/adminC.php';

                

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
            
            else*/
            {
                
                header('location addA.php');
            }
            exit();
        } else {
            $error = "Missing information";
        }

    }




 ?>
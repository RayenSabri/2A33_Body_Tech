<!DOCTYPE html>
<?php
$m=$_POST[('matricule')];
$a=$_POST[('marque')];
$e=$_POST[('etat')];
$k=$_POST[('kilometrage')];
$p=$_POST[('prix')];
$c=$_POST[('consomation')];
$t=$_POST[('transmission')];
///$i=$_POST[('photo')];

$to_email = "carrent328@gmail.com"; //a remplacer par email de admin
$subject = "Demande d'ajout d'une voiture";
$body = "nouvelle Demande d'ajout d'une voiture :
matricule :  $m 
marque : $a
etat : $e
kilometrage : $k
prix : $p 
consomation : $c
transmission : $t
";



$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 6; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    $target_file = $randomString.'.png';
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);





 
// Attachment file 
$file =$target_file; 
 
// Email body content 
$htmlContent = 
"nouvelle Demande d'ajout d'une voiture :
matricule :  $m ,
marque : $a ,
etat : $e , 
kilometrage : $k ,
prix : $p ,
consomation : $c ,
transmission : $t ,

";

$from = 'mohamedlouay.hamrouni@esprit.tn'; 
$fromName = 'mohamedlouay';


// Header for sender info 
$headers = "From: $fromName"." <".$from.">"; 
 
// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
 

echo $file;
// Preparing attachment 
if(!empty($file) > 0){ 
    echo 'okked';
    if(is_file($file)){ 
        echo 'okkkko \n';
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($file,"rb"); 
        $data =  @fread($fp,filesize($file)); 

        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
        "Content-Description: ".basename($file)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 
// Send email 

//$mail = @mail($to_email, $subject, $message, $headers, $returnpath);  


//$_FILES["fileToUpload"]["name"]
if (@mail($to_email, $subject, $message, $headers, $returnpath)) {
    header ("location:index.php?success=1")  ; 
} else {
    echo "Email sending failed
    veuillez vérifier vos informations ";
}


?>


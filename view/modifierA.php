<?php
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
        isset($_POST["salaire"]) && 
        isset($_POST["email"]) && 
        isset($_POST["tel"]) && // fixed missing comma
        isset($_POST["password"])
    ) {
        if (
            !empty($_POST["cin"]) && 
            !empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
            !empty($_POST["salaire"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["tel"]) && // fixed missing comma
            !empty($_POST["password"])
        ) {
            $admin = new admin(
                $_POST['cin'],
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['salaire'],
                $_POST['email'],
                $_POST['tel'], // fixed missing comma
                $_POST['password']
            );
            $adminC->modifier_admin($admin, $_POST["cin"]);
            header('Location:afficherA.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
    <button><a href="afficheA.php">Retour à la liste des deplacement</a></button>
    <hr>
        
    <div id="error">
        <?php echo $error; ?>
    </div>
            
    <?php
        if (isset($_POST['cin'])){
            $cin = $_POST['cin'];
            $admin = $adminC->recupererA($cin);
            
    ?>
        
    <form action="" method="POST">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="cin">cin :
                    </label>
                </td>
                <td><input type="text" name="cin" id="cin" value="<?php echo $admin['cin']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="nom"> nom:
                    </label>
                </td>
                <td><input type="text" name="nom" id="nom" value="<?php echo $admin['nom']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="prenom">prenom:
                    </label>
                </td>
                <td><input type="text" name="prenom" id="prenom" value="<?php echo $admin['prenom']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="salaire">salaire:
                    </label>
                </td>
                <td>
                        <input type="text" name="salaire" value="<?php echo $admin['salaire']; ?>" id="salaire">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">email:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email" id="email" value="<?php echo $admin['email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tel">tel:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="tel" id="tel" value="<?php echo $admin['tel']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td>
                        <label for="password">password:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" value="<?php echo $admin['password']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>
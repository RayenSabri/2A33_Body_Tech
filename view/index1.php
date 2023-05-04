<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Body tech</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
    <header>
      <h1>Body tech</h1>
      <span id="username"><?php if (isset($_SESSION["username"]))echo $_SESSION["username"] ;?></span>
      <nav>
        <form action="protected.php">
        <ul>
          <li><a href="test.html">Accueil</a></li>
          <li><a href="afficheA.php">affiche un admin</a></li>
         
          <li><a href="logout.php">logout</a></li>
        </ul></form>
      </nav>
    </header>
    <main>
      


















     
    </main>
    <footer>
      <p>&copy; Body tech</p>
    </footer>
  </body>
</html>

<?php

include 'accesdb.inc.php';
$dbh = connexion();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Accueil FAQ</title>
</head>
<body>
    <header>
        <div class="logo">MonLogo</div>
        <h1 class="titre">AppFaq</h1>
        <nav class="navbar">
            <ul class="menu">
                <li><a href="#">Accueil</a></li>
                <li>
                    <a href="#">Services ▼</a>
                    <ul class="submenu">
                        <li><a href="list.php">Foire aux questions</a></li>
                    </ul>
                </li>
                
                <a href="register.php">Inscription</a>

                <a href="login.php">Connexion</a>

                <a href="index.php" style="color: red;"><u>Se déconnecter</u> 

                </a>
            </ul>
        </nav>
    </header>
</body>
</html>


</body>
</html>
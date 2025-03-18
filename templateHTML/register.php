<?php

include 'accesdb.inc.php';
$dbh = connexion();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Inscription</title>
</head>
<body>
    <div id="register-container">
        <h2>Inscription</h2>
        <form id="register-form">

            <label for="identifiant">Pseudo:</label>
            <input type="text" id="identifiant" name="identifiant" required>

            <label for="identifiant">Adresse e-mail :</label>
            <input type="email" id="identifiant" name="identifiant" required>

            <label for="motdepasse">Mot de passe :</label>
            <input type="password" id="motdepasse" name="motdepasse" required>

            <div class="form-group">
                <label for="league">Selectionner une ligue</label>
                
                <select id="league" name="league">
                    <option value="Ligue 1">Football</option>
                    <option value="Ligue 2">Basketball</option>
                    <option value="Ligue 3">Volleyball</option>
                    <option value="Ligue 4">Handball</option>
                    <option value="Ligue 5">Toute les ligues</option>
                    
                </select>
            </div>
</br>

            <div id="register-buttons">
                <input type="submit" value="S'inscrire">
                <input type="button" value="Se connecter" onclick="window.location.href='login.php'">

                
            </div>
        </form>
    </div>
</body>
</html>
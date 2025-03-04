<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Se connecter</title>

</head>
<body>
    <body>
        <div id="login-container">
            <h2>Connexion</h2>
            <form id="login-form" action="votre_script_de_connexion.php" method="post">
                <label for="identifiant">Identifiant ou adresse e-mail :</label>
                <input type="text" id="identifiant" name="identifiant" required>
    
                <label for="motdepasse">Mot de passe :</label>
                <input type="password" id="motdepasse" name="motdepasse" required>
    
                <div id="login-buttons">
                    <input type="submit" value="Se connecter">
                    <input type="submit" value="S'inscrire" onclick="window.location.href='register.html'">
                </div>
            </form>
        </div>
</body>
</html>
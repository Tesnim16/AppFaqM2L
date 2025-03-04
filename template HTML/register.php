<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
<body>
    <div id="register-container">
        <h2>Inscription</h2>
        <form id="register-form">
            <label for="identifiant">Identifiant ou adresse e-mail :</label>
            <input type="text" id="identifiant" name="identifiant" required>

            <label for="motdepasse">Mot de passe :</label>
            <input type="password" id="motdepasse" name="motdepasse" required>

            <label for="confirmer-motdepasse">Confirmer le mot de passe :</label>
            <input type="password" id="confirmer-motdepasse" name="confirmer-motdepasse" required>

            <div class="form-group">
                <label for="league">Selectionner une ligue</label>
                
                <select id="league" name="league">
                    <option value="Ligue 1">Football</option>
                    <option value="Ligue 2">Basketball</option>
                    <option value="Ligue 3">Volleyball</option>
                    <option value="Ligue 3">Handball</option>
                    <option value="Ligue 3">Toute les ligues</option>
                    
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
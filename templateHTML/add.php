<?php

include 'accesdb.inc.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add.css">
    <title>Ajouter une Question</title>
</head>
<body>

    <header id="list-header">
    </header>

    <div id="main-container" style="background-color: white; padding: 20px; border-radius: 10px; max-width: 600px; margin: auto; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div id="faq-container">
            <h2>Ajouter une Question à la FAQ</h2>
            <form>
                <label for="question">Question :</label>
                <input type="text" id="question" name="question" required>
                    <input type="submit" value="Ajouter">
            </form>
        </div>
</body>
</html>
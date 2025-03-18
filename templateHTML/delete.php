<?php

include 'accesdb.inc.php';
$dbh = connexion();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/delete.css">
    <title>inscription</title>
</head>
<body>

    <header>
        <div class="header-container">
            <button onclick="window.location.href='ajouter_question.html'">Ajouter une question</button>
            <input type="text" placeholder="Rechercher une question">
            <button onclick="window.location.href='login.html'">Déconnexion</button>
        </div>
    </header>

    <div class="container">
    <div class="button.list">
        <h2>Liste des questions</h2>

        <table>
                <tr>
                    <th>Ligue</th>
                    <th>User/Pseudo</th>
                    <th>Question</th>
                    <th>Réponse</th>
                    <th>Modifier/Supprimer</th>
                </tr>

                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td id="1">...</td>
                    <td>...</td>
                    <td>
                        <button>Modifier</button>
                        <button onclick="msgSupr()">Supprimer</button>
                        
                    </td>
                </tr>

                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td id="2">...</td>
                    <td>...</td>
                    <td>
                        <button>Modifier</button>
                        <button onclick="msgSupr()">Supprimer</button>
                        
                    </td>
                </tr>

                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td id="3">...</td>
                    <td>...</td>
                    <td>
                        <button>Modifier</button>
                        <button onclick="msgSupr()">Supprimer</button>
                        
                    </td>
                </tr>

                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td id="td4">...</td>
                    <td>...</td>
                    <td>
                        <button>Modifier</button>
                        <button onclick="msgSupr()">Supprimer</button>
                        
                    </td>
                </tr>
        </table>    
    </div>
    
    <div id="mssupr" style="display:none; position: fixed; top: 40%; left: 40%; transform: translate(-50%, -50%); width: 300px; padding: 20px; background-color: white; border: 2px solid black; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            <p>Voulez-vous vraiment supprimer cette question?</p>
            <button onclick="oui()">Oui</button>
            <button onclick="non()">Non</button>
    </div>

    <script>
            function msgSupr() {
                document.getElementById('mssupr').style.display = 'block';
            }

            function oui(){
                document.getElementById('mssupr').style.display = 'none';
            }

            function non(){
            document.getElementById('mssupr').style.display = 'none';
        }
    </script>

</body>
</html>

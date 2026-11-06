
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des étudiants</title>
</head>
<body>

    <h1>Inscription étudiant</h1>

    <form action="resultat.php" method="POST">

        <label>Nom :</label>
        <input type="text" name="nom" required>
        <br><br>

        <label>Prénom :</label>
        <input type="text" name="prenom" required>
        <br><br>

        <label>Email :</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Âge :</label>
        <input type="number" name="age" required>
        <br><br>

        <button type="submit" name="envoyer">
            Envoyer
        </button>

    </form>

</body>
</html>
```
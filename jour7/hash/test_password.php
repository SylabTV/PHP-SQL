<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tester mot de passe</title>
</head>
<body>
    <h1>Tester mot de passe</h1>

    <form action="decrypt_password.php" method="POST">
        <input type="text" name="password" placeholder="Mot de passe clair" required><br><br>
        <input type="text" name="hash" placeholder="Mot de passe chiffré" required><br><br>
        <button type="submit">Vérifier</button>
    </form>

</body>
</html>

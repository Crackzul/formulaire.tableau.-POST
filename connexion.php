<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="connexion.php" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" placeholder="Mot de passe" required>

        <input type="submit" value="Envoyer">
    </form>
        <?php
    if(isset($_POST['auth'])){
        echo '<h2>Bienvenue sur cette page !!</h2>';
    }else{
        echo '<h2>Bienvenue sur la page d\'administration</h2>';
    }
    ?>
</body>
</html>
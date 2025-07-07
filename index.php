<?php

if(isset($_POST['username']) && isset($_POST['password'])){
        $usermanme = htmlspecialchars($_POST['username']);
        $mdp = htmlspecialchars($_POST['password']);

    var_dump($_POST);
}

$baseDeDonnees = new PDO('mysql:host=localhost;dbname=user;charset=utf8','username','password');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Formulaire et son tableau</title>
</head>
<body>

    <?php

    $test = '<h1>Titre</h1>';
    echo htmlspecialchars($test);
    echo $test;

    ?>


    <form action="index.php" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" placeholder="Mot de passe" required>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>
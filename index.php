<?php
    $baseDeDonnees = new PDO('mysql:host=localhost;dbname=user;charset=utf8','root','');
    $user = 'Didier';
    $passwordDefine = '1234';
    // $request = $baseDeDonnees->query('SELECT username, password FROM user');

    // while($data = $request->fetch()){
    //         echo '<p>Le nom d\'utilisateur est' . $username['username'] . 'et le mot de passe est ' . $password['password'] . '</p>';
    //     }



    // ------FONCTION PREPARE------
    
    $request = $baseDeDonnees->prepare('SELECT username, password FROM user');

    $request->execute(array());

    while($data = $request->fetch()){
        echo '<p>Le nom d\'utilisateur est ' . $data['username'] . ' et le mot de passe est ' .$data['password'] . '</p>';
    }

    // ------CREATE EN PHP-----
    if(isset($_POST['username']) && isset($_POST['password'])){
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $passwordArgon = password_hash($password,PASSWORD_ARGON2I);

            if(($user == $username) && (password_verify($password,$passwordArgon))){
               ('location:connexion.php?auth=1');
            }else{
                echo '<p class="error">Mot de passe ou nom d\'utilisateur incorrect<p>';
            }

    $request = $baseDeDonnees->prepare('INSERT INTO user(username,password)
                                        VALUES(?,?)');

    $data = $request->execute(array($username,$passwordArgon));

    // ------FIN DU CREATE-----
    }
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

    // $test = '<h1>Titre</h1>';
    // echo htmlspecialchars($test);
    // echo $test;

    // ?>


    <form id="auth" action="index.php" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" placeholder="Mot de passe" required>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>
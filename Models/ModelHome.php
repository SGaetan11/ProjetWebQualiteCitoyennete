<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!empty($_POST)){

    $errors = array();

    if(empty($_POST['email'])){
        $errors['email'] = "Votre email n'est pas valide";
    }

    if(empty($_POST['password'])){
        $errors['password'] = "Votre mot de passe n'est pas valide";
    }

    if(!empty($_POST['username']) && !empty($_POST['password'])){
        require_once 'db.php';
        require_once '../Controleurs/functions.php';

        $errors = null;

        $req = $pdo->prepare('SELECT * FROM users WHERE (id_user = :username OR email_user = :username)');
        $req->execute(['username' => $_POST['username']]);
        $user = $req->fetch();
        if(password_verify($_POST['password'], $user->pass_user)){
            session_start();
            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] = "Vous êtes connecté";
        }else{
            $_SESSION['flash']['danger'] = "Identifiant ou mot de passe incorrect";

        }
    }
}
?>
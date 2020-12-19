<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if(!empty($_POST)){
    $errors = array();
    require_once 'db.php';
    require_once '../Controleurs/functions.php';

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Votre email n'est pas valide";
    }else{
        $req = $pdo->prepare('SELECT id_user FROM users WHERE email_user = ?');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();
        if($user){
            $errors['email'] = "Cet email est déjà utilisé";
        }
    }

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $errors['password']= "Votre mot de passe n'est pas valide";
    }

    if(empty($_POST['lname']) || empty($_POST['fname']) || empty($_POST['bdate']) || empty($_POST['genre'])) {
        $errors['infos'] = "Veuillez remplir toutes les informations";
    }

    if(empty($errors)){
        $req = $pdo->prepare("INSERT INTO users SET fname_user = ?, lname_user = ?, bdate_user = ?, phone_user = ?, email_user = ?, pass_user = ?, creation_date = NOW(), id_genre = ?");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        if ($_POST["genre"] == "Feminin"){
            $genre = 1;
        } else{
            $genre = 2;
        }
        $req->execute([$_POST['fname'], $_POST['lname'], $_POST['bdate'], $_POST['pnumber'], $_POST['email'], $password, $genre]);
        $user_id = $pdo->lastInsertId();
        $_SESSION['flash']['success'] = "Votre compte a bien été enregistré, votre idenfiant est $user_id";
        header('Location: ../Vues/VueHome.php');
        exit();
    }
}
?>


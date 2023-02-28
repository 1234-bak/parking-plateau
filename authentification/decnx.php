<?php
session_start();

if(isset($post['envoyer'])){
    $_SESSION['id44'] = '';
    $_SESSION['pass44'] = '';
    $_SESSION['nom'] = '';
    $_SESSION['prenom'] = '';
    $_SESSION['email'] = '';
    $_SESSION['tel'] = '';

    session_destroy();

    header('Location : ../page/');

}

?>
<?php
include('../config/command.php');
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['tel']) and !empty($_POST['pass'])) {
        function filtrer($donnee)
        {
            $donnee = trim($donnee);
            $donnee = strip_tags($donnee);
            $donnee = stripslashes($donnee);
            return $donnee;
        }

        $nom = filtrer($_POST['nom']);
        $prenom = filtrer($_POST['prenom']);
        $email = filtrer($_POST['email']);
        $tel = filtrer($_POST['tel']);
        $pass = filtrer($_POST['pass']);

        $identifiant = 'client0' . rand(9999999, 1111999);

        try {
            Ajouter($identifiant, $nom, $prenom, $email, $tel, $pass);
        } catch (Exception $e) {
            echo 'erreur :  ' . $e->getMessage();
        }
        echo '<div class="msg success">Inscription reuissi votre identifiant est '.$identifiant.'</div><br>';


    }





}



?>
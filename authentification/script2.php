<?php
include('../config/command.php');
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['marque']) and !empty($_POST['matricule']) and !empty($_POST['couleur'])) {
        function filtrer($donnee)
        {
            $donnee = trim($donnee);
            $donnee = strip_tags($donnee);
            $donnee = stripslashes($donnee);
            return $donnee;
        }

        $marque = strtolower(filtrer($_POST['marque']));
        $matricule = strtolower(filtrer($_POST['matricule']));
        $couleur = strtolower(filtrer($_POST['couleur']));
       
        try {
            AjouterV($marque, $matricule, $couleur);
        } catch (Exception $e) {
            echo 'erreur :  ' . $e->getMessage();
        }

    }
    include("../config/cnx.php");
        $getVehi = $cnx->prepare(" SELECT * FROM vehicule WHERE marque= ? AND matricule= ? AND couleur= ?");
        $getVehi->execute(array($marque,$matricule,$couleur));

        while ($data = $getVehi->fetch(PDO::FETCH_ASSOC)) {
            $marque = $data['marque'];
            $matricule = $data['matricule'];
            $couleur = $data['couleur'];

        }
   
        if ($getVehi->rowCount() > 0) {
            $_SESSION['marque44'] = $marque;
            $_SESSION['matricule44'] = $matricule;
            $_SESSION['couleur44'] = $couleur;
            

            // header('Location: vehicule.php');
        
        


        } else {
            echo '<div class="msg error">Erreur un problème est survenu</div><br>';

        }



}



?>
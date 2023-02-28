<?php

function Ajouter($identifiant,$nom,$prenom,$email,$tel,$pass){
    if(require("cnx.php")){
        $req = $cnx->prepare(" INSERT INTO user (identifiant,nom,prenom,email,tel,pass) VALUES ('$identifiant','$nom', '$prenom' ,'$email', $tel ,'$pass' ) ");
        $req->execute(array($identifiant,$nom,$prenom,$email,$tel,$pass));

    }

}

function AjouterV($marque,$matricule,$couleur){
    if(require("cnx.php")){
        $req = $cnx->prepare(" INSERT INTO vehicule (marque,matricule,couleur) VALUES ('$marque','$matricule', '$couleur') ");
        $req->execute(array($marque,$matricule,$couleur));

    }

}

?>
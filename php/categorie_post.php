<?php
    //Connexion à la base de données
    require('connexionBD.php');
            try {
                // Connexion à MySQL 
                $bdd = new PDO('mysql:host=localhost;dbname=gestu', 'root', '');
                }
                catch(Exception $e) { // Message en cas d'erreur 
                    die('Erreur : '.$e->getMessage()); }
    //Insertion du message
    $req=$bdd->prepare('INSERT INTO categorie (messages, pseudo) VALUES (?, ?)');
    $req->execute(array($_POST['messages'],$_POST['pseudo']));

    //Redirection vers connexion.php
    header('Location: connexion.php');
?>
<?php
//on appelle la connexion à la base donnée
require_once('../../db/connection.php');

if(isset($_POST['ok'])){
      extract($_POST); //ici extrait les variables venant du formulaire

      //ici on crypte le mot de passe
      $mdps =sha1($password);

      //on a crée une variable data pour stocker le format de la date
      $date=date('Y-m-d');

      //dans notre variable requette on charge le INSERT pour nous permettre de créer un utilisateur dans la table users
      $requette ="INSERT INTO utilisateurs (Nom,Post_nom,Nom_utilisateur,password)value(?,?,?,?)";
      $parms= array($Nom,$Post_nom,$Nom_utilisateur,$mdps);
      $resultat = $bdd->prepare($requette);
      $resultat->execute($parms);
      
      //après que l'utilisateur est crée on  se redirige à l'index.php
}     header ('location:/index.php');
     
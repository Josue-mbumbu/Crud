<?php
//ici on crée la connextion à la basse de donnée en t'utilisant PDO comme nouvelle instance
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=db_crud','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));    

}

catch (PDOException $e){
    echo "Impossible de se connecter avec la base de donnée ";
}

<?php

define('_APP_VERSION_', 			'4.0.0');
define('_REP_PRINCIPAL_', 			dirname(__FILE__));
define('_HOST_ADDR_', 				$_SERVER['HTTP_HOST']);
define('_SERVER_NAME_', 			"127.0.0.1" );
define('_USER_NAME_', 				'sa');				// Definition d'utilisateur
define('_PASS_WORD_', 				'root~123');			// Definition de Mot de Passe
define('_DB_NAME_', 				'Crud_projet');				// Definition de la base des donnôe define('DB_NAME', 'dgewebdata');


//ici on crée la connextion à la basse de donnée en t'utilisant PDO comme nouvelle instance
try{
    
    $bdd = new PDO("sqlsrv:Server="._SERVER_NAME_.";Database="._DB_NAME_, _USER_NAME_, _PASS_WORD_);
    
}

catch (PDOException $e){
    echo "Impossible de se connecter avec la base de donnée ";
}
?>
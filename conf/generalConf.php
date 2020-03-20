<?php
// #############################################################################
// INFO SERVEUR ################################################################
// #############################################################################

// echo __DIR__ . "<br>";
// echo $_SERVER['SERVER_NAME'] . "<br>";
// echo $_SERVER['REMOTE_ADDR'] . "<br>";
// die("Die ici ==> " . $_SERVER['PHP_SELF']);

// Exemple de mode test (0 ou 1 pour déasctiver ou activer)
define('MODE_TEST', 0);

// Exemple de listes de serveurs :
define('LISTE_SERVEURS', array("192.168.1.12", "192.168.1.23", "192.168.1.37")); // serveur de dev
define('LISTE_SERVEURS_PROD', array("192.168.1.1", "192.168.1.2", "192.168.1.3")); // serveur de prod

// #############################################################################
// LOCAL CONFIGURATION #########################################################
// #############################################################################
if ($_SERVER['SERVER_NAME'] == "localhost" or $_SERVER['REMOTE_ADDR'] == "127.0.0.1") {
    // Conf email support technique
    define('EMAIL_SUPPORT_TECH', 'frouffet@gmail.com');
    // Conf nom de domaine - Sert pour les communications
    define('WWW_NDD_GENERAL', 'localhost');
    // Conf Database
    define('HOST_DATABASE', '127.0.0.1');
    define('USERNAME_DATABASE', 'root');
    define('PASSWORD_DATABASE', 'root');
    define('CHARSET_BDD', 'UTF8');
    // Nom Bdd Applications
    define('DATABASE_NAME_GESTION_STOCK', 'gestion_stock'); // Bdd locale
    // define('DATABASE_NAME_GESTION_STOCK_PROD', 'gestion_stock_prod'); // Bdd copie de prod
    // define('DATABASE_NAME_GESTION_STOCK_ARCHIVE', 'gestion_stock_archive'); // Bdd copie pour archivage de produits par exemple
    // Definition du path en local de la racine du projet
    define('PATH_MACHINE', 'C:/Users/frede/Documents/UwAmp/www/gestock/');
    // Definition du path du host principal
    define('HTTP_PATH_HOST_PRINCIPAL', 'http://localhost/gestock/');
    // Definition du path des views
    define('HTTP_PATH_VIEWS', 'views/');
    // Var de sécurité pour l'authentification
    define('VAR_SECURE_AUTH', 'hiuh6hUYè_*hiTg25v6vI-ff(-fKf--*4812');
    // Langue par defaut
    define('LANGUE_PAR_DEFAUT', 'fra'); // noter maintenant la norme ISO 639-2 ou la 639-3 pour la notation à 3 lettres des langues
    // Nom des cookies
    define('COOKIE_RESTER_CONNECTE', "aqJkliç_çèKlikhjsysy012jiji5874"); // privilégier un nom aléatoire (pas random) à un nom en dur (ex. cookie_gestock).
    define('COOKIE_HTTPS_ONLY', FALSE);

    // #############################################################################
    // EXT CONFIGURATION ###########################################################
    // #############################################################################
} elseif ($_SERVER['SERVER_NAME'] == "www.gestock.com" or $_SERVER['REMOTE_ADDR'] == "198.58.99.125") {

    // ###############################################################
    // ################ CONF DES SERVICES ############################
    // ###############################################################

    // ################ CONF PROD ###########################
    // Conf email support technique
    define('EMAIL_SUPPORT_TECH', 'tech@gestock.com');
    // Conf nom de domaine - Sert pour les communications
    define('WWW_NDD_GENERAL', 'www.gestock.com');
    // Conf Database
    define('HOST_DATABASE', '8484cpcpcLo1/bddUser/kjkkj');
    define('USERNAME_DATABASE', 'User');
    define('PASSWORD_DATABASE', '');
    define('CHARSET_BDD', 'UTF8');
    // Nom Bdd Applications
    define('DATABASE_NAME_GESTION_STOCK_PROD', 'gestion_stock_prod'); // Bdd locale
    // define('DATABASE_NAME_GESTION_STOCK_ARCHIVE_PROD', 'gestion_stock_archive_prod');
    // Definition du path en local de la racine du projet
    define('PATH_MACHINE', '/home//gestockTotolitoto/public_html/');
    // Definition du path du host principal
    define('HTTP_PATH_HOST_PRINCIPAL', 'https://www.gestock.com');
    // Definition du path des views
    define('HTTP_PATH_VIEWS', 'views/');
    // Var de sécurité pour l'authentification
    define('VAR_SECURE_AUTH', 'hiuh6hUYè_*hiTg25v6vI-ff(-fKf--*4812');
    // Langue par defaut
    define('LANGUE_PAR_DEFAUT', 'fra');
    // Nom des cookies
    define('COOKIE_RESTER_CONNECTE', "aqJkliç_çèKlikhjsysy012jiji5874");
    define('COOKIE_HTTPS_ONLY', FALSE);

    // #############################################################################
    // SI ERREUR ###################################################################
    // #############################################################################
} else {
    die("Une erreur c'est produite. ERROR A00000001.");
}

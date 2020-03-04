
<?php

    // INFO SERVEUR
    // echo __DIR__ ."<br>";
    // echo $_SERVER['SERVER_NAME']."<br>";
    // echo $_SERVER['REMOTE_ADDR']."<br>";
    // die("Die ici ==> ".$_SERVER['PHP_SELF']);

    // Mode test - actif : 0-1
    define ("MODE_TEST", 1);

    // Chemins vers component
    define ("CSS_FOLDER", "/geStock/component/css");
    define ("JS_FOLDER", "/geStock/component/js");
    define ("IMG_FOLDER", "/geStock/component/img");

    // LOCAL CONFIGURATION
    if ($_SERVER['SERVER_NAME']=="localhost" OR $_SERVER['REMOTE_ADDR']=="::1")
    {
        // Conf email support technique
        define('EMAIL_SUPPORT_TECH', 'rouchnicolas@hotmail.fr');

        // Conf nom de domaine - Sert pour les communications
        define('WWW_NDD_GENERAL', 'geStock');

        // Conf Database
        define('HOST_DATABASE', '127.0.0.1');
        define('USERNAME_DATABASE', 'root');
        define('PASSWORD_DATABASE', 'root');
        define('CHARSET_BDD', 'UTF8');

        // Nom Bdd Applications
        define('DATABASE_NAME_TOTO', 'gestion_stock');   // Bdd locale
            // define('DATABASE_NAME_TOTO02', 'toto2');     // Bdd copie de prod

        // Definition du path en local de la racine du projet
        define('PATH_MACHINE', 'E:/Programmes/UwAmp/www/geStock/');

        // Definition du path du host principal
        define('HTTP_PATH_HOST_PRINCIPAL', 'http://localhost/gestock');

        // Definition du path des views
        define('HTTP_PATH_VIEWS', 'views/');

        // Var de sécurité pour l'authentification
        define('VAR_SECURE_AUTH', 'coincoin');

        // Langue par defaut
        define('LANGUE_PAR_DEFAUT', 'fra');

        // Nom des cookies
        define('COOKIE_RESTER_CONNECTE', "dg8fd94gf5b_dsf854xc654feqs897");
        define('COOKIE_HTTPS_ONLY', FALSE);
    }
    // EXT CONFIGURATION
    elseif ($_SERVER['SERVER_NAME']=="www.toto.com" OR $_SERVER['REMOTE_ADDR']=="198.58.99.125")
    {
        // Conf email support technique
        define('EMAIL_SUPPORT_TECH', 'rouchnicolas@hotmail.fr');

        // Conf nom de domaine - Sert pour les communications
        define('WWW_NDD_GENERAL', 'geStock');

        // Conf Database
        define('HOST_DATABASE', '127.0.0.1');
        define('USERNAME_DATABASE', 'root');
        define('PASSWORD_DATABASE', 'root');
        define('CHARSET_BDD', 'UTF8');

        // Nom Bdd Applications
        define('DATABASE_NAME_TOTO', 'gestion_stock');   // Bdd locale
            // define('DATABASE_NAME_TOTO02', 'toto2');     // Bdd copie de prod

        // Definition du path en local de la racine du projet
        define('PATH_MACHINE', 'E:/Programmes/UwAmp/www/geStock/');

        // Definition du path du host principal
        define('HTTP_PATH_HOST_PRINCIPAL', 'http://localhost/gestock');

        // Definition du path des views
        define('HTTP_PATH_VIEWS', 'views/');

        // Var de sécurité pour l'authentification
        define('VAR_SECURE_AUTH', 'coincoin');

        // Langue par defaut
        define('LANGUE_PAR_DEFAUT', 'fra');

        // Nom des cookies
        define('COOKIE_RESTER_CONNECTE', "dg8fd94gf5b_dsf854xc654feqs897");
        define('COOKIE_HTTPS_ONLY', FALSE);
    }
    // SI ERREUR 
    else
    {
        die("Une erreur c'est produite. ERROR A00000001.");
    }
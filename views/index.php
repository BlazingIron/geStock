<?php

    // Lancement de la session
    session_start();

    // Encodage de la page
    header ("Content-Type: text/html; charset=utf-8");

    // Conf générale
    require_once ("../conf/generalConf.php");

    // Autoloader global
    require_once (PATH_MACHINE . "autoLoader/AutoLoad.php");
    
    // Pour afficher les erreurs php
    if (MODE_TEST == 1)
    {
        echo ("Test activé<br>");
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }
    else
    {
        echo ("Test désactivé<br>");
    }
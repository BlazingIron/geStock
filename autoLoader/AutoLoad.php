<?php

/* Noter la majuscule au nom de fichier pour différencier le fichier des autres. 
Sous Linux, les fichiers avec majuscules sont triés de ceux avec une minuscules. 
On sait ainsi que le fichier avec une majuscule contient des classes. 
Son nom est écrit avec une majuscule et en PascalCase. */

/**
 * Sert à charger tous les controllers
 *
 * @param string $class => Nom du controller
 * @return none
 * Charge par require_once le bon script php
 */

function app_autoloader($class)
{
    $pathFind = false;
    for ($i = 1; $i <= 5; $i++) {
        // 1re boucle, on met la variable $path à vide
        if ($i <= 1) {
            $path = "";
        } else {
            // autre boucle : on modifie la variable $path en lui ajoutant un "../"
            $path = $path . "../";
        }
        // Controllers
        // nouvelle condition : si il trouve un dossier "controllers" dans le fichier où il est (c'est-à-dire "vieww"), il va le charger mais normalement il ne devrait pas le trouver. D'où les boucles suivantes où il va remonter pour chercher le dossier "controllers" à nouveau. 
        if (file_exists($path . "controller/$class.php")) {
            require_once($path . "controller/$class.php");
            $pathFind = true;
        }
    }
    if ($pathFind = false) {
        $lastError = error_get_last();
        trigger_error("Autoloader message => Class not found : $class - needed in " . $lastError["file"] . "(" . $lastError["line"] . ")", E_USER_ERROR);
    }
}

spl_autoload_register('app_autoloader');
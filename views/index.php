<?php
// Lancement de la session
session_start();

// Encodage de la page
header("Content-Type: text/html; charset=utf-8");

// Conf générale
require_once("../conf/generalConf.php");

// autoLoader global
require_once(PATH_MACHINE . "autoLoader/AutoLoad.php");

// Pour afficher les erreurs PHP :
if (MODE_TEST == 1) {
    echo "Test activé <br>";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

// Sécurisation des variables reçues
$arrayVar = Controllers::secureArray($_REQUEST);

//Récupération du nom de l'utilisateur
$nameGuest = "Invité";

try
{
    $name = Controllers::verifConnexionUser();
}
catch (Exception $e)
{
    $name = $nameGuest;
}



// Le formulaire permet delancer une demande d'authentification

// Cette demande est traité par index.php dans views

// Detecter si le formulaire a été lancer (if action=="auth")

// Detecter si les variables envoyé par le formulaire na sont pas vide  (email et pass pas vide)


// Appeler un controller "verifUserIfExist" qui sera dans Controllers.php de l'application
    //  ==> le controller "verifUserIfExist" va appeler l'API pour récupérer la liste des users,
    // vous parcourez la liste des resultats
    // et il va comparer les resultats pour vérifier si il trouve bien  : email + mot de passe.
    // si il trouve email et pass
    // va renvoyer les données de l'utilsateur 
    // $_SESSION["idUser"] = id
    // $_SESSION["nameUser"]
    // $_SESSION["lastNameUser"]
    // $_SESSION["emailUser"]
    // $_SESSION["typeUser"]



// //test de l'API 
// $param = "?ctrl=getUsers";
// $resultGetCurl = Controllers::getCurlRest($param);
// $resultGetCurl = json_decode($resultGetCurl);

// if ($resultGetCurl->status == "failed")
// {
//     die ("Une erreur est survenue, veuillez contacter le support technique.");
// }
// elseif ($resultGetCurl->status == "success")
// {
//     echo "<pre>";
//     var_dump($resultGetCurl->result);   
//     echo "</pre>";
//     //echo $resultGetCurl->result->email;
// }
// else
// {
//     die("Erreur critique.");
// }

// Appel header Général
require_once("langue/fra/header.php");

// Appel body Général
require_once("langue/fra/main.php");

// Appel footer Général
require_once("langue/fra/footer.php");

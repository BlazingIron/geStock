<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Regarder la doc côté meta pour le suivi du site -->
    <meta name="description" content="description de la page">
    <meta name="robots" content="index, follow">


    <!-- Styles -->
    <!-- Bootstrap 4.3.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesom 5.12.1e -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <!-- JQuery 1.12.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <!-- Feuille de style du projet -->
    <link rel="stylesheet" href="component/css/style.css">

    <!-- Titre -->
    <title>Accueil du Projet Commun</title>

    <!-- Scripts -->
    <!-- BootstrapCDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/8303064131.js" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/color/jquery.color-2.1.2.js" integrity="sha256-1Cn7TdfHiMcEbTuku97ZRSGt2b3SvZftEIn68UMgHC8=" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/component/img/favicon/favicon.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark container-fluid">
            <a class="navbar-brand" href="#home"><i class="fas fa-home"></i>
                <img src="../component/img/logo.png" width="45%" class="d-inline-block align-top" alt="logo">
            </a>
            <span class="text-white"><?php echo Controllers::writingHello("Chameau"); ?></span>

            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Connexion</button>
            </form>
        </nav>
    </header>
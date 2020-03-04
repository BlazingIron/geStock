
<!DOCTYPE html>

<html lang="fr">
    <head> 
        <!-- Metadatas -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Title -->
        <title>GeStock</title>

        <!-- Style -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Font awesome -->
        <link rel="stylesheet" href=<?php echo (CSS_FOLDER . "/font-awesome.css");?>>

        <!-- CSS -->
        <link rel="stylesheet" href=<?php echo (CSS_FOLDER . "/global.css");?>>

        <!-- Scripts -->
        <!-- JQuery -->
        <script src=<?php echo (JS_FOLDER . "/jquery-3.4.1.js");?>></script>
    </head>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Titre et logo-->
            <a clsass="navbar-brand" href="#">
                <img src=<?php echo (IMG_FOLDER . "/logo.png");?> width="30" height="30" class="d-inline-block align-top">
                GeStock
            </a>
            
            <!-- Menus -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Connexion -->
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            Connexion
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</html>

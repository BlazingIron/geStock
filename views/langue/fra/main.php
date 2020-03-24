<!-- Début du main -->
<main>
    <div class="container-fluid">
        <div class="row">
            <?php
                require_once ("sideMenu.php"); 

                if ($name == $nameGuest)
                {
                    require_once ("connectMenu.php");
                }
                else
                {
                    require_once ("tableView.php");
                }
            ?>
        </div>
    </div>
</main>
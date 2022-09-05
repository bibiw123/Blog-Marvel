<nav class="red darken-4">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php?page=home" class="brand-logo"><img src="./assets/logo3.png" alt="Logo"height="60" width="260"></a>

            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">
                <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="index.php?page=blog">Tous les articles</a></li>
                <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="admin/index.php?page=login">Connexion</a></li>
            </ul>

            <ul class="side-nav" id="mobile-menu">
                <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="index.php?page=blog">Tous les articles</a></li>
                <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="admin/index.php?page=login">Connexion</a></li>
            </ul>

        </div>
    </div>
</nav>
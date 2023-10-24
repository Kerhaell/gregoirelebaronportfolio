<?php

// Fonction permettant de souligner l'onglet ouvert 
function onglet($page) {
    if ($_GET['page'] == $page){
        echo 'id="encadre"';
        // echo 'style="color:#ff0000;"';
    }
}

// Fonction permettant de souligner la partie ouverte veitech
function partie_veitech($partie) {
    if (!isset($_GET['partie'])) {
        $_GET['partie'] = "starlink";
    }
    if ($_GET['partie'] == $partie){
        echo 'id="encadre"';
    }
}

// Fonction permettant de souligner la partie ouverte docs
function partie_docs($partie) {
    if (!isset($_GET['partie'])) {
        $_GET['partie'] = "formation";
    }
    if ($_GET['partie'] == $partie){
        echo 'id="encadre"';
    }
}

// Condition permettant de mettre le $_GET en accueil s'il n'existe pas 
if (!isset($_GET['page'])) {
    $_GET['page'] = "accueil";
}

switch ($_GET['page']) {
    case ('accueil'):
        include_once('./templates/accueil.php');
        break;
    case ('profil'):
        include('./templates/header.php');
        include_once('./templates/profil.php');
        include('./templates/footer.php');
        break;
    case ('docs'):
        include('./templates/header.php');
        include_once('./templates/docs.php');

            if (!isset($_GET['partie'])) {
                $_GET['partie'] = "formation";
            }

            switch ($_GET['partie']) {
                case ('formation'):
                    include_once('./templates/partie/formation.php');
                    break;
            
                case ('ap'):
                    include_once('./templates/partie/AP.php');
                    break;

                case ('first'):
                    include_once('./templates/partie/first.php');
                    break;    

                case ('second'):
                    include_once('./templates/partie/second.php');
                    break;
            }

        include('./templates/footer.php');
        break;
    case ('veitech'):
        include('./templates/header.php');
        include_once('./templates/veitech.php');

        if (!isset($_GET['partie'])) {
            $_GET['partie'] = "starlink";
        }

        switch ($_GET['partie']) {
            case ('starlink'):
                include_once('./templates/partie/starlink.php');
                break;
        
            case ('reram'):
                include_once('./templates/partie/reram.php');
                break;

            case ('cloudcomputing'):
                include_once('./templates/partie/cloudcomputing.php');
                break;               

            case ('outils'):
                include_once('./templates/partie/outils_veille.php');
                break;    

        }

        include('./templates/footer.php');
        break;
    case ('veijur'):
        include('./templates/header.php');
        include_once('./templates/veijur.php');
        include('./templates/footer.php');
        break;
}

?>




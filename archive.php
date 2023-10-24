<?php  

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
        include('./templates/footer.php');
        break;
    case ('veitech'):
        include('./templates/header.php');
        include_once('./templates/veitech.php');
        include('./templates/footer.php');
        break;
    case ('veijur'):
        include('./templates/header.php');
        include_once('./templates/veijur.php');
        include('./templates/footer.php');
        break;
}

?> 
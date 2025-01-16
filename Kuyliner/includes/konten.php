<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case '/Kuyliner':
            include "views/home.html";
            break;
        case 'home':
            include "views/home.html";
            break;
        case 'about':
            include "views/about.html";
            break;
        case 'contact':
            include "views/contact.php";
            break;
        case 'makanan':
            include "views/makananView.php";
            break;
        case 'makananAdd':
            include "modul/makananAdd.php";
            break;
        case 'makananDelete':
            include "modul/makananDelete.php";
            break;
        case 'makananUpdate':
            include "modul/makananUpdate.php";
            break;
        case 'minuman':
            include "views/minumanView.php";
            break;
        case 'minumanAdd':
            include "modul/minumanAdd.php";
            break;
        case 'minumanDelete':
            include "modul/minumanDelete.php";
            break;
        case 'minumanUpdate':
            include "modul/minumanUpdate.php";
            break;
        default:
            include "views/404.php";
    }
} else {
    include "views/home.php";
}

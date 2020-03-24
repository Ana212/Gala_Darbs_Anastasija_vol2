<?php


// home
// posts
// info
// - about us
// - contacts
// login
// registration
// super-sercret

require_once '../app/functions.php';



$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        echo (new HomeController)->index();
        break;
    case 'posts':
        echo (new PostsController)->index();
        break;
    case 'post':
        echo (new PostsController)->viewPost();
        break;
    case 'users':
        echo (new UsersController)->register();
        break;
    case 'about-us':
        echo (new AboutUsController)->index();
        break;
    default:
        echo (new ErrorsController)->error404();
}

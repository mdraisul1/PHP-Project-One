<?php

require 'function.php';
require 'database.php';
require 'router.php';



/*$url = parse_url($_SERVER['REQUEST_URI'])['path'];


switch($url){
    case '':
    case '/':
        $fileUrl = __DIR__ . '/controllers/index.php';
        break;
    case '/about':
        $fileUrl = __DIR__ . '/controllers/about.php';
        break;
    case '/contact':
        $fileUrl = __DIR__ . '/controllers/contact.php';
        break;
    default:
        $fileUrl = __DIR__ . '/controllers/404.php';
        break;
}

require $fileUrl;
dd($fileUrl);
*/


// $id = $_GET['id'];
// $query = ("SELECT * FROM posts where id = ?");

// $posts = $db->query($query, [$id])->fetch();

// dd($posts);

// foreach ($posts as $post) {
//     echo "<li>" .  $post['title'] . "</li>";
// }




// $db_connection = 'mysql';
// $db_host = 'localhost';
// $db_name = 'myapp';
// $db_user = 'root';
// $db_password = 'password';
// $chater = 'utf8';

// $dsn = "$db_connection:dbname=$db_name;$db_host=localhost;$chater=utf8";

// $db = new PDO($dsn, $db_user, $db_password);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $statement = $db->prepare('SELECT * FROM posts');
// $statement->execute();
// $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// dd($posts);



<?php

require 'classes/Database.php';
require 'classes/Article.php';
// require 'includes/database.php';
require 'classes/Url.php';

$conn = require 'includes/db.php';

// $db = new Database();
// $conn = $db->getConn();

if (isset($_GET['id'])) {

    $article = Article::getById($conn, $_GET['id']);

    if (!$article) {
        // $id = $article['id'];
        // $title = $article['title'];
        // $content = $article['content'];
        // $published_at = $article['published_at'];
        die('Article not found');
    }


} else {
    die("id not supplied, data not found");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if($article->delete($conn)){
       Url::redirect("/new.php");
    }
             
}
?>

<?php require 'includes/header.php';?>

<h2>Delete Article</h2>
    <form method="post">
        <p>Are you sure ?</p>
        <button>Delete</button>
        <a href="article.php?id=<?= $article->id; ?>">Cancel</a>
    </form>

<?php require 'includes/footer.php';?>


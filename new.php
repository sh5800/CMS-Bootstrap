<?php
    // require 'classes/Article.php';
    // require 'classes/Database.php';
    // require 'classes/Auth.php';

    require 'includes/init.php';
    
    // session_start();

    // $db = new Database();
    // $conn = $db->getConn();
    $conn = require 'includes/db.php';

    $articles = Article::getAll($conn);

?>
<?php require 'includes/header.php'; ?>

<!-- <?php var_dump($_SESSION); ?> -->

<?php if(Auth::isLoggedIn()): ?>
    <p>You are logged in. <a href="logout.php">Logout</a></a></p>
    <p><a href="new_article.php">New article</a></p>
<?php else: ?>
    <p>You are logged out <a href="login.php">Login</a></a></p>     
<?php endif; ?>    


            <?php if(empty($articles)): ?>
                <p>No articles found</p>
            <?php else: ?>    
            <ul id="index">
                <?php foreach ($articles as $article): ?>
                    <li>
                        <article>
                            <h2><a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>
                            <p><?= htmlspecialchars($article['content']); ?></p>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
<?php require 'includes/footer.php'; ?>
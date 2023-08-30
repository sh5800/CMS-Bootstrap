<?php

    require 'includes/database.php';
    require 'includes/auth.php';
    
    session_start();

    $conn = getDB();

    $sql = "SELECT * FROM article;";
    //write the sql query and store it in a variable sql

    $result = mysqli_query($conn,$sql);
    //run the query using mysqli_query function and pass the conn and sql variables to it and store the result into a result variable

    if($result === false){ //check if the result variable does contain some vale if no then throw the mysqli_error($conn)
        echo mysqli_error($conn);
    } else {
        $articles = mysqli_fetch_all($result,MYSQLI_ASSOC); //else fetch all the records using mysqli_fetch_all($result) and store the resulting array into a variable called articles
    }

?>
<?php require 'includes/header.php'; ?>

<?php var_dump($_SESSION); ?>

<?php if(isLoggedIn()): ?>
    <p>You are logged in. <a href="logout.php">Logout</a></a></p>
    <p><a href="new_article.php">New article</a></p>
<?php else: ?>
    <p>You are logged out <a href="login.php">Login</a></a></p>     
<?php endif; ?>    


            <?php if(empty($articles)): ?>
                <p>No articles found</p>
            <?php else: ?>    
            <ul>
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
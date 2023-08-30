<?php
   
   require 'includes/database.php';
   require 'includes/article.php';

   $conn = getDB();

    if (isset($_GET['id'])) { //the isset is used to check whether a given query parameter is declared or not and is_numeric is used to check whether the given query parameter is number or not
        
        // $sql = "SELECT * FROM article WHERE id = ".$_GET["id"];
        // //write the sql query and store it in a variable sql

        // $result = mysqli_query($conn,$sql);
        // //run the query using mysqli_query function and pass the conn and sql variables to it and store the result into a result variable

        // if($result === false){ //check if the result variable does contain some vale if no then throw the mysqli_error($conn)
        //     echo mysqli_error($conn);
        // } else {
        //     $article = mysqli_fetch_assoc($result); //else fetch all the records using mysqli_fetch_all($result) and store the resulting array into a variable called articles
        // }

        $article = getArticle($conn, $_GET['id']);
    } else {
        $article = null;
    }


?>

<?php require 'includes/header.php'; ?>
            <?php if($article === null): ?>
                <p>Article not found.</p>
            <?php else: ?>    
           
                        <article>
                            <h2><?= htmlspecialchars($article['title']); ?></h2>
                            <p><?= htmlspecialchars($article['content']);  ?></p>
                        </article>

                        <a href="edit_article.php?id=<?= $article['id']?>">Edit</a>
                        <a href="delete_article.php?id=<?= $article['id']?>">Delete</a>
                    
            <?php endif; ?>
<?php require 'includes/footer.php'; ?>
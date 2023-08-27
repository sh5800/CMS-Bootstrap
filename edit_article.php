<?php

require 'includes/database.php';
require 'includes/article.php';
require 'includes/url.php';

$conn = getDB();

if (isset($_GET['id'])) { 

    $article = getArticle($conn, $_GET['id']);

    if($article){
        $id = $article['id'];
        $title = $article['title'];
        $content = $article['content'];
        $published_at = $article['published_at'];
    } else {
        die("data not found");
    }
    

} else {
    die("id not supplied, data not found");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];  // to retain the data already enterred in the form
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];
    

    $errors = validateArticle($title,$content,$published_at);
    
    // var_dump($errors); exit;

    if(empty($errors)){
        //$conn = getDB(); //function call and store in a variable $conn

        $sql = "UPDATE article
                SET title = ?,
                    content = ?,
                    published_at = ?
                WHERE id = ?"; // create an sql statement using placeholders

        $stmt = mysqli_prepare($conn, $sql); // prepare the sql statemnt using mysql_prepare($conn,$sql) and store that in $stmt      

        if ($stmt === false) { // if the prepared statement doesn't contain anything then throw mysqli_error($conn)

            echo mysqli_error($conn);

        } else { // else

            if ($published_at = '') {
                $published_at = null;
            }

            mysqli_stmt_bind_param($stmt, "sssi", $title, $content, $published_at,$id);

            //bind the parameters using mysqli_stmt_bind_param($stmt,'sss',$_POST['title'],'$_POST['content']',''...);

            if (mysqli_stmt_execute($stmt)) { // execute the $stmt using mysqli_stmt_execute
               // $id = mysqli_insert_id($conn); // insert the record using mysqli_insert_id($conn) and store the result in a variable $id
                //echo "Inserted record with ID: $id";
                redirect("/article.php?id=$id");
                
            } else {
                echo mysqli_stmt_error($stmt);
            }


        }
    }
}

?>

<?php require 'includes/header.php'; ?>

<h2>Edit Article</h2>

<?php require 'includes/article_form.php'; ?>

<?php require 'includes/footer.php'; ?>
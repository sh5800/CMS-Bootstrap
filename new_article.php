<?php

// require 'classes/Database.php';
// require 'classes/Article.php';
// require 'classes/Url.php';
// require 'classes/Auth.php';

require 'includes/init.php';

// session_start();

if(!Auth::isLoggedIn()){
    die('unauthorised');
}

// $errors = [];
// $title = '';
// $content = '';
// $published_at = '';
$article = new Article();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $db = new Database();
    // $conn = $db->getConn();

    $conn = require 'includes/db.php';

    // $title = $_POST['title'];  // to retain the data already enterred in the form
    // $content = $_POST['content'];
    // $published_at = $_POST['published_at'];
    

    // $errors = validateArticle($title,$content,$published_at);
    
    // // var_dump($errors); exit;

    // if(empty($errors)){
    //     $conn = getDB(); //function call and store in a variable $conn

    //     $sql = "INSERT INTO article (title,content,published_at)
    //         VALUES (?,?,?)"; // create an sql statement using placeholders

    //     $stmt = mysqli_prepare($conn, $sql); // prepare the sql statemnt using mysql_prepare($conn,$sql) and store that in $stmt      

    //     if ($stmt === false) { // if the prepared statement doesn't contain anything then throw mysqli_error($conn)

    //         echo mysqli_error($conn);

    //     } else { // else

    //         if($published_at = ''){
    //             $published_at = null;
    //         }

    //         mysqli_stmt_bind_param($stmt, "sss",$title,$content,$published_at);

    //         //bind the parameters using mysqli_stmt_bind_param($stmt,'sss',$_POST['title'],'$_POST['content']',''...);

    //         if (mysqli_stmt_execute($stmt)) { // execute the $stmt using mysqli_stmt_execute
    //             $id = mysqli_insert_id($conn); // insert the record using mysqli_insert_id($conn) and store the result in a variable $id
    //             //echo "Inserted record with ID: $id";

    //            redirect("/article.php?id=$id");

    //             header("Location: $protocol://". $_SERVER['HTTP_HOST']. "/article.php?id=$id");
    //         } else {
    //             echo mysqli_stmt_error($stmt);
    //         }


    //     }

    // }

    $article->title = $_POST['title']; // to retain the data already enterred in the form
    $article->content = $_POST['content'];
    $article->published_at = $_POST['published_at'];


    // $errors = validateArticle($article->title,$article->content,$article->published_at);

    // // var_dump($errors); exit;

    // if(empty($errors)){
    //$conn = getDB(); //function call and store in a variable $conn
    if ($article->create($conn)) {
       Url::redirect("/article.php?id={$article->id}");
    }
    
   
}

?>

<?php require 'includes/header.php'; ?>

<h2>New Article</h2>

<?php require 'includes/article_form.php'; ?>

<?php require 'includes/footer.php'; ?>
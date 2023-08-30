<?php 

/**
 * getArticle
 *
 * @param  mixed $conn
 * @param  mixed $id
 * @return void
 */
function getArticle($conn,$id,$columns='*')
{
    $sql = "SELECT $columns FROM article WHERE id = ?;";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt === false){
        echo mysqli_error($conn);
    } else {
       mysqli_stmt_bind_param($stmt,"i",$id); 

       if(mysqli_stmt_execute($stmt)){

        $result = mysqli_stmt_get_result($stmt);

        return mysqli_fetch_array($result, MYSQLI_ASSOC);

       }
    }
}

function validateArticle($title,$content,$published_at)
{
    $errors = [];
    if ($title == '') {
        $errors[] = 'Title is required';
    }
    if ($content == '') {
        $errors[] = 'Content is required';
    }
    return $errors;
}
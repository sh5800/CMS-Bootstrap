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
    $sql = "SELECT $columns FROM article WHERE id = :id;";

    $stmt = $conn->prepare($sql);

    
    $stmt->bindValue(':id',$id,PDO::PARAM_INT); 

       if($stmt->execute()){

        return $stmt->fetch(PDO::FETCH_ASSOC);

       }
}


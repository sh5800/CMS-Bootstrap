<?php

/**
 * Article
 */
class Article
{        
    /**
     * id
     *
     * @var mixed
     */
    public $id;    
    /**
     * title
     *
     * @var mixed
     */
    public $title;    
    /**
     * content
     *
     * @var mixed
     */
    public $content;    
    /**
     * published_at
     *
     * @var mixed
     */
    public $published_at;    
    /**
     * errors
     *
     * @var array
     */
    public $errors = [];

    /**
     * getAll
     *
     * @param  mixed $conn
     * @return void
     */
    public static function getAll($conn)
    {
        $sql = "SELECT * FROM article;";
        //write the sql query and store it in a variable sql

        $result = $conn->query($sql);
        //run the query using mysqli_query function and pass the conn and sql variables to it and store the result into a result variable

        // if($result === false){ //check if the result variable does contain some vale if no then throw the mysqli_error($conn)
        //     var_dump($conn->errorInfo());
        // } else {
        return $result->fetchAll(PDO::FETCH_ASSOC); //else fetch all the records using mysqli_fetch_all($result) and store the resulting array into a variable called articles
        //}
    }
    
    /**
     * getById
     *
     * @param  mixed $conn
     * @param  mixed $id
     * @param  mixed $columns
     * @return void
     */
    public static function getById($conn, $id, $columns = '*')
    {
        $sql = "SELECT $columns FROM article WHERE id = :id;";

        $stmt = $conn->prepare($sql);


        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->setFetchMode(PDO::FETCH_CLASS,'Article');

        if ($stmt->execute()) {

            return $stmt->fetch();

        }
    }
    
    /**
     * update
     *
     * @param  mixed $conn
     * @return void
     */
    public function update($conn)
    {
        if($this->validate()){
            $sql = "UPDATE article
                SET title = :title,
                content = :content,
                published_at = :published_at
                WHERE id = :id";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->bindValue(':title', $this->title, PDO::PARAM_STR);
            $stmt->bindValue(':content', $this->content, PDO::PARAM_STR);

            if ($this->published_at == '') {
                $stmt->bindValue(':published_at', $this->content, PDO::PARAM_NULL);
            } else {
                $stmt->bindValue(':published_at', $this->content, PDO::PARAM_STR);
            }

            return $stmt->execute();
        } else{
            return false;
        }
        
    }


    /**
     * validateArticle
     *
     * @param  mixed $title
     * @param  mixed $content
     * @param  mixed $published_at
     * @return void
     */    
    /**
     * validate
     *
     * @return void
     */
    protected function validate()
    {
        $errors = [];
        if ($this->title == '') {
            $this->errors[] = 'Title is required';
        }
        if ($this->content == '') {
            $this->errors[] = 'Content is required';
        }
        return empty($this->errors);
    }
    
    /**
     * delete
     *
     * @param  mixed $conn
     * @return void
     */
    public function delete($conn)
    {
        $sql = "DELETE FROM article
                WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        

        return $stmt->execute();
    }
    
    /**
     * create
     *
     * @param  mixed $conn
     * @return void
     */
    public function create($conn)
    {
        if ($this->validate()) {
            $sql = "INSERT INTO article(title,content,published_at)
                    VALUES (:title,:content,:published_at) ";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':title', $this->title, PDO::PARAM_STR);
            $stmt->bindValue(':content', $this->content, PDO::PARAM_STR);

            if ($this->published_at == '') {
                $stmt->bindValue(':published_at', $this->content, PDO::PARAM_NULL);
            } else {
                $stmt->bindValue(':published_at', $this->content, PDO::PARAM_STR);
            }

            if($stmt->execute()){
                $this->id = $conn->lastInsertId();
                return true;
            }
        } else {
            return false;
        }

    }
}
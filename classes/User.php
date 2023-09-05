<?php

/**
 * User
 */
class User 
{        
    /**
     * id
     *
     * @var mixed
     */
    public $id;    
    /**
     * username
     *
     * @var mixed
     */
    public $username;    
    /**
     * password
     *
     * @var mixed
     */
    public $password;
     
    /**
     * authenticate
     *
     * @param  mixed $conn
     * @param  mixed $username
     * @param  mixed $password
     * @return void
     */
    public static function authenticate($conn,$username, $password)
    {
        $sql = "SELECT *
                FROM user 
                WHERE username = :username";
         
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':username',$username,PDO::PARAM_STR);
        
        $stmt->setFetchMode(PDO::FETCH_CLASS,'User');

        $stmt->execute();

        if($user = $stmt->fetch()){
        
            return password_verify($password,$user->password);
            
        }

    }
}
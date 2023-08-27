<?php

/**
 * getDB
 *
 * @return void
 */
function getDB(){
    $db_host = "localhost";
    $db_name = "cms";
    $db_user = "cms_www";
    $db_pass = "cyXKq*i7BEfs-Q56";

    //first define all the properties required for connecting to a db 
    //like db_host,db_user,db_pass,db_name

    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    //use mysqli_connect function and pass the above defined properties and store the result of the function in a variable called conn

    if(mysqli_connect_error()){
        echo mysqli_error();
        exit;
    }
    //check if the connection happened successfully if no then throw an mysqli_error()

    //echo "Connected successfully";
    //else print connected successfully
    return $conn;
}

   
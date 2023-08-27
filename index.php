<?php 

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "cyXKq*i7BEfs-Q56";

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(mysqli_connect_error()){
    echo mysqli_error();
    exit;
}

echo "Connected successfully";

$sql = "SELECT title FROM article ORDER BY published_at;";

$result = mysqli_query($conn,$sql);

if($result === false){
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($result,MYSQLI_ASSOC);

    var_dump($articles);
}
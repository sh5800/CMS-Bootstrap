<?php

$password = 'secret';

// $hash = password_hash($password,PASSWORD_DEFAULT);

// echo $hash;

$hash = '$2y$10$DhxlMrQG/WPz5Gdhvu4.4um36LcKu7YkTojlhkCIe14kdzwvSIHRu';

var_dump(password_verify($password,$hash));
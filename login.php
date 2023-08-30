<?php

require 'includes/url.php';

session_start();

var_dump($_SESSION);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['username'] == 'shreyash' && $_POST['password'] == '050800') {

        session_regenerate_id(true);

        $_SESSION['is_logged_in'] = true;

        redirect('/new.php');
    }else {
        $error = 'login incorrect';
    }
}

?>

<?php require 'includes/header.php'; ?>

<h2>Login</h2>
<?php if(!empty($error)): ?>
    <p><?= $error ?></p>
<?php endif;?>    

<form action="" method="post">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <button>Login</button>
</form>

<?php require 'includes/footer.php';?>
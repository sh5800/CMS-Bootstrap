<?php

// require 'classes/Url.php';
// require 'classes/User.php';
// require 'classes/Database.php';
// session_start();

require 'includes/init.php';

// var_dump($_SESSION);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // $db = new Database();
    // $conn = $db->getConn();
    $conn = require 'includes/db.php';

    if (User::authenticate($conn,$_POST['username'], $_POST['password'])) {

        session_regenerate_id(true);

        $_SESSION['is_logged_in'] = true;

        Url::redirect('/new.php');
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
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <button>Login</button>
</form>

<?php require 'includes/footer.php';?>
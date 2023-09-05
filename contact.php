<?php 

//require 'includes/init.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer-master/src/Exception.php';
require 'vendor/PHPMailer-master/src/PHPMailer.php';
require 'vendor/PHPMailer-master/src/SMTP.php';

$email = '';
$subject = '';
$message = '';
$sent = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $errors = [];

    if(filter_var($email,FILTER_VALIDATE_EMAIL) == FALSE)
    {
        $errors[] = 'Please enter a valid email address';
    }

    if ($subject == '') 
    {
        $errors[] = 'Please enter a subject';
    }

    if ($message == '') 
    {
        $errors[] = 'Please enter a message';
    }

    if(empty($errors))
    {
        $mail = new PHPMailer(true);

        try{

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'shreyaskashyap05@gmail.com';
            $mail->Password = 'hnsahdpnpxqggttk';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('shreyaskashyap05@gmail.com');
            $mail->addAddress('shreyaskashyap05@outlook.com');
            $mail->addReplyTo($email);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();

            $sent = true;
            
        } catch(Exception $e){
            $errors[] = $mail->ErrorInfo;


        }
    }
}

?>

<?php require 'includes/header.php';?>

<h2>Contact</h2>

<?php if($sent):?>
    <p>Message Sent.</p>
<?php else:?>    

<?php if(! empty($errors)) : ?>
    <ul>
        <?php foreach($errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>    
    </ul>
<?php endif; ?>    

<form method="post" id="formContact">
    <div class="mb-3">
        <label for="email" class="form-label">Your email</label>
        <input type="email" name="email" id="email" placeholder="Your email" class="form-control" value="<?=htmlspecialchars($email)?>">
    </div>
        
    <div class="mb-3">
        
        <label for="subject" class="form-label">Subject</label>
        <input type="text" name="subject" id="subject" class="form-control" value="<?= htmlspecialchars($subject) ?>">
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea name="message" id="message" placeholder="Message" class="form-control"><?= htmlspecialchars($message) ?></textarea>
    </div>

    <button class="btn btn-secondary">Send</button>
</form>
<?php endif;?>
<?php require 'includes/footer.php'; ?>
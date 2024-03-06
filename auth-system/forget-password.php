<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';
?>

<?php include_once('./header.php'); ?>

<?php     

    if(isset($_POST['form1'])) {

        try {

            if($_POST['email'] == '') {
                throw new Exception('Email can not be empty');
            }
            
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Email is invalid');
            }
        
            $query = $conn->prepare("SELECT email FROM users WHERE email=?");
            $query->execute([$_POST['email']]);

            $total = $query->rowCount();

            if(!$total) {
                throw new Exception('Email is invalid');          
            }

            $token = time();

            $query = $conn->prepare("UPDATE users SET token=? WHERE email=?");
            $query->execute([$token, $_POST['email']]);

            $link = BASE_URL.'reset-password.php?email='.$_POST['email'].'&token='.$token;
            $email_message = 'Please click on this link to reset your password:<br>';
            $email_message .= '<a href="'.$link.'">';
            $email_message .= 'Click Here';
            $email_message .= '</a>';

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.mailtrap.io';
                $mail->SMTPAuth = true;
                $mail->Username = 'USERMAILTRAP';
                $mail->Password = 'PASSMAILTRAP';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 2525;

                $mail->setFrom('contact@example.com');
                $mail->addAddress($_POST['email']);
                $mail->addReplyTo('contact@example.com');        
                $mail->isHTML(true);
                $mail->Subject = 'Reset Password';
                $mail->Body = $email_message;
                $mail->send();

                $success_message = ' Please check your email and follow the steps';

            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: ($mail->ErrorInfo)";
            } 
        } catch(Exception $e) {
            $error_message = $e->getMessage();
        }
    }
?>

<div class="main">
    <h2 class="mb_10">Forget Password</h2>

    <?php 

        if(isset($error_message)) {
            echo '<div class="error">';
            echo $error_message;
            echo '</div>';
        }

        if(isset($success_message)) {
            echo '<div class="success">';
            echo $success_message;
            echo '</div>';
        }
    ?>

    <form action="" method="post">
        <table class="t2">
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" autocomplete="off"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit" name="form1">
                    <a href="<?php echo BASE_URL;?>login.php" class="primary_color">Back to Login Page</a>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php include_once('./footer.php'); ?>
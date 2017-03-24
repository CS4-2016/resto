<?php
    session_start();
    require_once("dbcon-pdo.php");
    require 'PHPMailer-master/PHPMailerAutoload.php';

    $row=array();
    $email=$_POST['email'];
    try
    {
        $dbcon=new PDO('mysql:host='.$GLOBALS['host'].';dbname='.$GLOBALS['dbase'], $GLOBALS['lin'], $GLOBALS['pwd']);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $state=$dbcon->prepare("SELECT email FROM users WHERE email=?;");
        $state->execute(array($email));
        $row=$state->fetchAll();
    }
    catch(PDOException $e)
    {
        $e->getMessage();
    }
    if(count($row)==0)
    {
        $_SESSION['note']='<div class="alert alert-danger">Email not registered.</div>';
        header("Location: forgot-password.php");
    }
    else
    {
        $e=$row[0]['email'];
        mail("veracruzandrew@gmail.com", "Testaeng", $e);
        /*$mail = new PHPMailer;
        $mail->Sendmail = '/usr/sbin/sendmail';
        $mail->setFrom('veracruzandrew@gmail.com', 'Me');
        $mail->addAddress('veracruzandrew@gmail.com', 'This is ME');
        $mail->Subject  = 'First PHPMailer Message';
        $mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer. Email is'.$email;
        if(!$mail->send()) {
          echo 'Message was not sent.';
          echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
          echo 'Message has been sent.';
        } */
    }
   
?>
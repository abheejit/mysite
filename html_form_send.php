<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Sun, 05 Oct 2014 20:51:41 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
    $mail_to = 'hello@abheejit.com'; // specify your email here
 
    // Assigning data from the $_POST array to variables
    $name = $_POST['sender_name'];
    $email = $_POST['sender_email'];
    $message = $_POST['sender_message'];
 
    // Construct email subject
    $subject = 'Message from Abheejit.com visitor ' . $name;
 
    // Construct email body
    $body_message = 'From: ' . $name . "\r\n";
    $body_message .= 'E-mail: ' . $email . "\r\n";
    $body_message .= 'Message: ' . $message;
 
    // Construct email headers
    $headers = 'From: ' . $email . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";
 
    $mail_sent = mail($mail_to, $subject, $body_message, $headers);
 
    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for the message. I will contact you shortly.');
        window.location = 'contact-form.html';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify the site administrator abhijeetkhan@gmail.com');
        window.location = 'contact-form.html';
    </script>
    <?php
    }
?>

  </body>
</html>
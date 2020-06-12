<?php include "header.php" ?>

<?php

    $to = "ariianeboorges@gmail.com";
    $subject = $_POST["subject"];
    $msg = $_POST["message"] . "\r\n";
    $txt = wordwrap($msg,70);
    $from = $_POST["email"];
    $headers = "From: $from" . "\r\n";

    if (mail($to,$subject,$txt,$headers)) {
        echo "Email successfully sent to $to...";
    } else {
        echo "Email sending failed...";
    }
?> 

<?php include "footer.php" ?>
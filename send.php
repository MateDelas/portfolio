<?php

$to = 'mdelas09@gmail.com';
$subject = 'Upit s osobne stranice';
$message = $_POST['upit'];
$from = $_POST['mail'];
$headers = 'From:' .$from. "\r\n" .
    'Replay-To:' .$from;

mail($to, $subject, $message, $headers);

echo "Poruka je poslana! <br><a href=index.html>Povratak</a>;

?>
<?php

if (isset($_POST['submit']))    {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "shashwat@punjanis.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    mail($mailTo, $txt, $headers);
    header("location: index.php?mailsend");
}
?>
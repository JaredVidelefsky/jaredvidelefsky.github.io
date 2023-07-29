<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "jared.videlefsky@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.html?mailsent");
}

// For gmail functionality need to go inside email settings inside hosting service
// Create a new email alias and forward to gmail
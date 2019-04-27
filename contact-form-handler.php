<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = "New Message from website"
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "thanhhl95@gmail.com";
    $headers = "From: ".$emailFrom;
    $txt = "You have receive an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
  }
 ?>

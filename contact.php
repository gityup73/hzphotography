<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  // $from  = "soxfan1173@gmail.com";
  $from = "From: heatherzindars";
  $subject = "New message from heatherzindarsphotography.com";
  $to = "soxfan1173@gmail.com";

  $body = "From: $name\n Email: $email\n Phone: $phone\n Message: $message";

  if ($_POST['submit']) {
    if (!mail($to, $subject, $body, $from)) {
      echo "<script type='text/javascript'>alert('Sorry, there was an error.')</script>";
    }
    else {
      echo "<script type='text/javascript'>alert('Your email has been sent!')</script>";
    }
  }
?>
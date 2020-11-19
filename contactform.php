<?php
// Check if user clicked submit
if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mailFrom = $_POST['mail'];
  $msg = $_POST['msg'];
  $mailTo = 'justin@thejustinvega.com';
  $headers = "From: ".$mailFrom;
  $subject = "You have received an email from ".$fname." ".$lname;

// Check if any field is empty
  if (empty($fname) || empty($lname) || empty($mailFrom) || empty($msg)) {
      header("Location: contact?signup=empty");
      exit();
  } else {
    // Check if both first and last names are valid
    if (!preg_match("/^[a-zA-Z ]*$/",$fname) || !preg_match("/^[a-zA-Z ]*$/",$lname)) {
      header("Location: contact?signup=char");
      exit();
    } else {
    // Check if email is valid
    if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
      header("Location: contact?signup=email");
      exit();
      } else {
        $sentMail = mail($mailTo, $subject, $msg, $headers);
        if($sentMail) {
        header("Location: https://www.thejustinvega.com/thankyou");
        exit();
        }
      }
    }
  }
}

?>

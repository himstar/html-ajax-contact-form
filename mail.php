<?php

    $to = "himstar@himstar.info";


if (!isset($_POST[name]) || empty($_POST[name]))
{
echo "You didn't fill in the NAME field!";
exit;
}
else
{
$name = $_POST[name];
}

$subject = "Website Contact Form - TricksWay Demo";



 if (empty($_POST["email"])) {
    echo "You didn't fill in the FROM field!";
    exit;
  } else {
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "You filled Invalid FROM field!";
      exit;
    }
    else
    {
    $email = $_POST[email];
    }
  }

if (!isset($_POST[message]) || empty($_POST[message]))
{
echo "You didn't fill in the MESSAGE field!";
exit;
}
else
{
$message = $_POST[message];
}

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n"; 
$headers .= "From: " . $email . " <" . $email . ">" . "\r\n";

if (mail($to, $subject, $message, $headers))
{
echo"<p>Email Sent !!!</p>\n";
}
else
{
echo"<p>Error!</p>\n";
echo"<p>The mail() function failed.</p>";
}

?>

<?php
if (isset($_POST['submit'])) {
  # code...


    $to = "priti.chavhan1@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $cmessage = $_POST['message'];

    $headers = "From: $from";
  $headers = "From: " . $from . "\r\n";
  $headers .= "Reply-To: ". $from . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your Ramirez.";


  $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Ramirez Mail</title></head><body>";
  $body .= "<table style='width: 100%;'>";
  $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
  $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
  $body .= "</td></tr></thead><tbody><tr>";
  $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
  $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
  $body .= "</tr>";
  $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
  $body .= "<tr><td></td></tr>";
  $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
  $body .= "</tbody></table>";
  $body .= "</body></html>";

  mail($to, $subject, $body, $headers);
 }

?>
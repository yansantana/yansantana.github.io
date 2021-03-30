<?php

/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'santanamarianne.v@gmail.com';


$to      = $receiving_email_address;
$subject =  $_POST['subject'];
$message = $_POST['message'];
$headers = array(
  'From' => $_POST['email'],
  'Reply-To' => $_POST['email'],
  'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);

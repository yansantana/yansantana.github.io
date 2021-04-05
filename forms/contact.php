<?php
if(isset($_POST['submit'])){
  $emailto = 'bluefile.canada@gmail.com';
  $toname = 'BlueFile';
  $emailfrom = $_POST["email"];
  $fromname = $_POST["name"];
  $subject = $_POST['subject'] . " - Message from Website";
  $messagebody = "<b>" . $subject . "</b><br>" . $_POST['message'];;
  $headers = 
  'Return-Path: ' . $emailfrom . "\r\n" . 
  'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
  'X-Priority: 3' . "\r\n" . 
  'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
  'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
  'MIME-Version: 1.0' . "\r\n" . 
  'Content-Transfer-Encoding: 8bit' . "\r\n" . 
  'Content-Type: text/html; charset=UTF-8' . "\r\n";
  $params = '-f ' . $emailfrom;
  $test = mail($emailto, $subject, $messagebody, $headers, $params);
  if ($test) {
    header('Location: https://test.bluefileimmigration.com');
  } else {
    echo "error1";
  }

  }else {
    echo "error2";
  }
<?php
/*if($_POST){
  $email = $_POST['email'];
  $name = $_POST['name'];
  $firstname = $_POST['firstname'];
  $message = $_POST['message'];
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP";
  $subject="test";
  $destinataire="michael.bourloo@gmail.com";
  $body="$message";

  mail($destinataire, $subject, $body, $header);

  if(mail($destinataire,$subject,$body,$headers)) {
    $response['status'] = 'success';
    $response['msg'] = 'votre message a bien été envoyé !';
  } else {
    $response['status'] = 'error';
    $response['msg'] = 'quelque chose sonne faux !';
  }
  echo json_encode($response);
}
*/
if(isset($_POST['submit'])){
  if(!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])){
      $nameTrim = trim($_POST['name']);
      $firstnameTrim = trim($_POST['firstname']);
      $emailTrim = trim($_POST['email']);
      $messageTrim = trim($_POST['message']);
      $name = filter_var($nameTrim, FILTER_SANITIZE_STRING);
      $firstname = filter_var($firstnameTrim, FILTER_SANITIZE_STRING);
      $email = filter_var($emailTrim, FILTER_VALIDATE_EMAIL);
      $message = filter_var($messageTrim, FILTER_SANITIZE_STRING);
      $subject = "Contact pour stage";
      if(isset($name) && isset($firstname) && isset($email) && isset($message)){
          $text = "Nom :$name" . "\r\n";
          $text .="Prenom :$firstname" . "\r\n";
          $text .="Email :$email" . "\r\n";
          $text .="Message :$message" . "\r\n";
          mail("michael.bourloo@gmail.com",$subject,  $text);
          header('LOCATION: index.php');
      }
  }
  else{
      header('LOCATION: index.php?');
  }
}

?>
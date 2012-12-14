<?php 

if(isset($_POST['email'])) {
    $ToEmail = 'mail@derekduncan.me'; 
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: ".$_POST["email"]."\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"]."</br>"; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."</br>"; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 

      function died($error) {
          // your error code can go here
          echo "We are very sorry, but there were error(s) found with the form you submitted. ";
          echo "These errors appear below.<br /><br />";
          echo $error."<br /><br />";
          echo "Please go back and fix these errors.<br /><br />";
          die();
      }
       
      // validation expected data exists
      if(!isset($_POST['name']) ||
          !isset($_POST['email']) ||
          !isset($_POST['comment'])) {
          died('We are sorry, but there appears to be a problem with the form you submitted.');       
      }
       
      $name = $_POST['name']; // required
      $email = $_POST['email']; // required
      $comment = $_POST['comment']; // required
       
      $error_message = "";
      $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp,$email)) {
      $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
      $string_exp = "/^[A-Za-z .'-]+$/";
    if(!preg_match($string_exp,$name)) {
      $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }
    if(strlen($comment) < 2) {
      $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }
    if(strlen($error_message) > 0) {
      died($error_message);
    }
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
	header("Location: http://www.tidaldesign.co");
	exit; 
}; 
?>
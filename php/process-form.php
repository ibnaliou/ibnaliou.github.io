<?php
if (isset($_POST['name'],$_POST['email'])) {
      
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
      
    // Set your email address where you want to receive emails. 
    $to = 'mohamedsall1188@mail.com';
      
    $subject = 'Web Resume Contact - Sall Ahmed';
    $headers = "From: ".$name." <".$email."> \r\n";
      
    $send_email = mail($to,$subject,$message,$headers);
      
    echo ($send_email) ? 'success' : 'error';
      
}
?>
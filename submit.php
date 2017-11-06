<?php 
  $to = 'aditi.biniwale@yahoo.com' ;  // Replace email address with your own
  $subject = 'Contact Form' ; 
  $name = $_POST['fname'] ; 
  $email = $_POST['email'] ;
  $message = $_POST['message'] ;
  $phone = $_POST['phone'] ;

  $message = "From: $fname \nEmail: $email \nMessage: $message \nPhone: $phone \n";

  $sent = mail($to, $subject, $message) ; 
    if($sent) {
      echo "<h3>Thank you for your message.</h3><p>Your email has been sent successfully and we appreciate you getting in touch with us. We will be sending a reply soon.</p>"; 
    }else{
      echo "<h3>Sorry, your message wasn't sent.</h3><p>We seem to have encountered a problem sending your message. Please go back and try again. If you get this message again please email <a href='mailto:webmaster@yourDomain.com'>webmaster@yourDomain.com</a>.</p>"; 
}
?>

<?php

  $receiving_email_address = 'moustapha00864@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $Moustapha;
  $contact->from_name = $_POST['User'];
  $contact->from_email = $_POST['moustaphandiay.jokalante@gmail.com'];
  $contact->subject = $_POST['Message'];


  $contact->smtp = array(
    'host' => 'localhoht//Portfolio/contact.com',
    'username' => 'Moustapha00864',
    'password' => 'Passe00864',
    'port' => '587'
  );

  $contact->add_message( $_POST['Bonjour & Bienvenue'], 'From')
  $contact->add_message( $_POST['moustaphandiaye.jokalante@gmail.com'], 'Email')
  $contact->add_message( $_POST['Bonjour Amuser vous Bien'], 'Message', 10)

  echo $contact->send();

?>


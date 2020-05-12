<?php

/**
 * Example 2
 * Validate a single Email via SMTP
 */

// include SMTP Email Validation Class
require_once('smtp_validateEmail.class.php');
$data = $_POST['data'];
$emails = explode(';;',$data);
$valid_emails = array();
foreach($emails as $email){
  $domain = explode('@',$email);
  $domain = $domain[count($domain)-1];
  if($domain == 'orange.fr' || $domain == 'wanadoo.fr'){
    $valid_emails[] = $email;
  }
}
$new_emails = array();
// var_dump($data);


// the email to validate



// $emails = array('eduscope.webcapture@gmail.com', 'tomasjax@yandex.com','cabinet.sinanian@wanadoo.fr');
// an optional sender
$sender = 'jacqueline.sautereau@orange.fr';
// instantiate the class
$SMTP_Validator = new SMTP_validateEmail();
// turn on debugging if you want to view the SMTP transaction
$SMTP_Validator->debug = true;
// do the validation
$results = $SMTP_Validator->validate($valid_emails, $sender);

// view results
foreach($results as $email=>$result) {
	// send email? 
  if ($result) {
    // echo 'The email address '. $email.' is valid<br>';
    array_push($new_emails, $email);
    //mail($email, 'Confirm Email', 'Please reply to this email to confirm', 'From:'.$sender."\r\n"); // send email
  } else {
    // echo 'The email address '. $email.' is not valid<br>';
  }
}
echo json_encode($new_emails);
?>
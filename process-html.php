<?php
@extract($_POST);
$admin = 'saikiran.modireddy@gmail.com' ; // Change to your admin email 'from' address
$subject = 'Tutorial URLs'; //Your email subject
$name = stripslashes($name); //can be stripslashes('name');
$email = stripslashes($email);
// Your HTML message with table, links and images
$message = '
Hello
';
// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
// Additional headers as http://php.net/manual/en/function.mail.php
$headers .= 'From: Your Name <saikiran.modireddy@gmail>' . "\r\n";
//ACTIVE mail below to $admin (you) and $email (the other person)
mail( $admin, "Feedback: $subject", "$name $email", "From: $admin" );
$send_contact=mail( "$name <$email>", "Feedback: $subject", $message, $headers );
if($send_contact){
echo "Thanks," . $name. ", I have sent you an email with the information.";
}
else {
echo "ERROR";
}
?>
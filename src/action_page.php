<?php include_once 'config/init.php'; ?>

<?php

$job = new Job;
require 'vendor/autoload.php';
use Aws\Ses\SesClient;
use Aws\Exception\AwsException;

if(isset($_SESSION['logged_in_UDR']) && $_SESSION['logged_in_UDR'])
{

if(isset($_POST['submit']))
{

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['comment'];

$SesClient = new SesClient([
                'version' => '2010-12-01',
                'region'  => 'us-east-1'
            ]);

        
$sender_email = 'udr.notification@gmail.com';

$recipient_emails = ['jaison8940@gmail.com','abinaya.sm28@gmail.com','divyayou17@gmail.com'];


$subject = 'You Got a New Message!';
$plaintext_body = '' ;
$html_body =  "You have received a new message from the user " .$name. "\n".
"Email address: " .$visitor_email. "\n".
"Here is the message: " ."\n" .$message;
$char_set = 'UTF-8';

try {
$result = $SesClient->sendEmail([
'Destination' => [
    'ToAddresses' => $recipient_emails,
],
'ReplyToAddresses' => [$sender_email],
'Source' => $sender_email,
'Message' => [
  'Body' => [
      'Html' => [
          'Charset' => $char_set,
          'Data' => $html_body,
      ],
      'Text' => [
          'Charset' => $char_set,
          'Data' => $plaintext_body,
      ],
  ],
  'Subject' => [
      'Charset' => $char_set,
      'Data' => $subject,
  ],
],

]);
$messageId = $result['MessageId'];
echo("Email sent! Message ID: $messageId"."\n");
} catch (AwsException $e) {
// output error message if fails
echo $e->getMessage();
echo("The email was not sent. Error message: ".$e->getAwsErrorMessage()."\n");
echo "\n";
}

reDirect('contact.php','Your Message Sent Successfully!', 'success');


}
else
{
$template = new Template('templates/contact-page.php');
echo $template;
}







}
else{

$template = new Template('templates/login-page.php');
echo $template;

}





?>
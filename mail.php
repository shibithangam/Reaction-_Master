<?php
// the message
//$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

// send email
//mail("kavyareddy12@gmail.com","My subject",$msg);
//phpinfo();


/* $to      = 'kavyareddy12@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: reactionmaster@gmail.com' . "\r\n" .
    'Reply-To: reactionmaster@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


<?php */

function  sendEmail($name,$examid) {
$to       = 'kavyareddy12@gmail.com';
$subject  = 'Review for test';
$message  = 'Hi, you just received an email Please click below link to review your test
                http://localhost/ReactionMaster/restReview.php?name=' .$name .'&examid=' .$examid;
$headers  = 'From: reactionmaster12@gmail.com' . "\r\n" .
    'MIME-Version: 1.0' . "\r\n" .
    'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
    else
        echo "Email sending failed";
    
}
 
?>
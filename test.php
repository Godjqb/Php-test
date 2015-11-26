<?php
$to="1739495944@qq.com";
$subject="Test mail";
$message="Hello,This is a simple emil message.";
$from="912108996@qq.com";
$headers="From:$from";
mail($to,$subject,$message,$headers);
echo "Mail sent.";
?>
<?php
//if (isset($_REQUEST['email']))
////if "email" is filled out, send email
//{
//    //send email
//    $email = $_REQUEST['email'] ;
//    $subject = $_REQUEST['subject'] ;
//    $message = $_REQUEST['message'] ;
//    mail( "someone@example.com", "Subject: $subject",
//        $message, "From: $email" );
//    echo "Thank you for using our mail form";
//}
//else
////if "email" is not filled out, display the form
//{
//    echo "<form method='post' action='mailform.php'>
//  Email: <input name='email' type='text' /><br />
//  Subject: <input name='subject' type='text' /><br />
//  Message:<br />
//  <textarea name='message' rows='15' cols='40'>
//  </textarea><br />
//  <input type='submit' />
//  </form>";
//}
//?>
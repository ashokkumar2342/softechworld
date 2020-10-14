<?php 

// EDIT THE FOLLOWING LINE BELOW AS REQUIRED

$send_email_to = "info@softechworldharyana.com";

function send_email($name,$email,$mobile,$email_message,$enquiryfor)
{
  global $send_email_to;  
  $type = 'Contacting From Softect World';
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
  $headers .= "From: ".$email. "\r\n";
  $message = "<strong>Email :- </strong>".$email."<br><br>";
  $message .= "<strong>Name :- </strong>".$name."<br><br>";
  $message .= "<strong>Mobile :- </strong>".$mobile."<br><br>";
  if($enquiryfor){
    $message .= "<strong>Enquiry For :- </strong>".$enquiryfor."<br><br>";
    $type= 'Enquiry from Softect World';
  }
  $message .= "<strong>Message :- </strong>".$email_message."<br><br>";
  @mail($send_email_to,$type, $message,$headers);
  return true;
}

// function validate($name,$email,$message,$mobile)
// {
//   $return_array = array();
//   $return_array['success'] = '1';
//   $return_array['name_msg'] = '';
//   $return_array['email_msg'] = '';
//   $return_array['message_msg'] = '';
//   $return_array['mobile'] = '';

//  if($email == '')
//   {
//     $return_array['success'] = '0';
//     $return_array['email_msg'] = 'email is required';
//   }
//   else
//   {
//     $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
//     if(!preg_match($email_exp,$email)) {
//       $return_array['success'] = '0';
//       $return_array['email_msg'] = 'enter valid email.';  
//     }
//   }

//   if($name == '')
//   {
//     $return_array['success'] = '0';
//     $return_array['name_msg'] = 'First Name is required';
//   }
//   else
//   {
//      $string_exp = "/^[A-Za-z .'-]+$/";
//     if (!preg_match($string_exp, $name)) {
//       $return_array['success'] = '0';
//      $return_array['name_msg'] = 'enter valid First Name.';
//     }
//   }
  
 

//   if($mobile == '')
//   {
//     $return_array['success'] = '0';
//     $return_array['mobile_msg'] = 'mobile is required';
//   }
  
//   if($message == '')
//   {
//     $return_array['success'] = '0';
//     $return_array['message_msg'] = 'Message is required';
//   }
//   else
//   {
//     if (strlen($message) < 2) {
//       $return_array['success'] = '0';
//       $return_array['message_msg'] = 'Enter valid Message.';
//     }
//   }
//   return $return_array;
// }

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
@$enquiryfor = $_POST['enquiryfor'];
$mobile = $_POST['mobile'];
// $return_array = validate($name,$email,$message,$mobile);
// if($return_array['success'] == '1')
// {
  send_email($name,$email,$mobile,$message,$enquiryfor);
  header("location:index.php");
// }

 // header("location:contact.php");


?>
	
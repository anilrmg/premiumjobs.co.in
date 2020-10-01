<?php
  // ini_set('display_errors', 1); 
  // ini_set('display_startup_errors', 1); 
  // error_reporting(E_ALL);
  ini_set('magic_quotes_runtime', 0);
  require('phpmailer/class.phpmailer.php');
  $return_array = array();
  //customer
 // echo "<pre>";print_r($_POST);echo "</pre>";die('anil');
  try {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "ssl";
    $mail->Port     = 465;  
    $mail->Username = "info@premiumjobs.co.in";//info client
    $mail->Password = "premiumjobs@123";//password
    $mail->Host     = "mail.premiumjobs.co.in";//mail of clien tmail
    $mail->Mailer   = "smtp";
    $mail->SetFrom('info@premiumjobs.co.in');//info client
    $mail->AddReplyTo('info@premiumjobs.co.in');//info client
    $mail->AddAddress($_POST["email"]); 
    $mail->Subject = $_POST["subject"];
    $mail->WordWrap   = 80;
    $html = file_get_contents('customer_emailer.html');
    $data = array(
      'name'=>$_POST["username"],
    );
    foreach ($data as $key => $value) {
      $html = str_replace("{".$key."}", $value, $html);
    }
    $mail->MsgHTML($html); // html
    $mail->IsHTML(true);
    if(!$mail->Send()) {
      $return_array['customer_status'] = false;
      $return_array['customer_msg'] = "Problem in Sending Mail.";
    } else {
      $return_array['customer_status'] = true;
      $return_array['customer_msg'] = "Mail Sent Successfully.";
    }
  } catch (Exception $e) {
    $return_array['customer_status'] = false;
    $return_array['customer_msg'] = "Problem in Sending Mail.";
  }
  //admin
  try {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "ssl";
    $mail->Port     = 465;
    $mail->Username = "info@premiumjobs.co.in";//info client
    $mail->Password = "premiumjobs@123";//password
    $mail->Host     = "mail.premiumjobs.co.in";//mail of clientmail
    $mail->Mailer   = "smtp";
    $mail->SetFrom($_POST["email"], $_POST["username"]);
    $mail->AddReplyTo($_POST["email"], $_POST["username"]);
    $mail->AddAddress("info@premiumjobs.co.in");  
    $mail->Subject = $_POST["subject"];
    $mail->WordWrap   = 80;
    $html = file_get_contents('admin_emailer.html');
    $emailer_data = array(
      'name'=>$_POST["username"],
      'email'=>$_POST["email"],
      'mobile'=>$_POST["phone"],
      'subject'=>$_POST["subject"],
      'message'=>$_POST["message"],
    );
    foreach ($emailer_data as $key => $value) {
      $html = str_replace("{".$key."}", $value, $html);
    }
    $mail->MsgHTML($html); // html
    $mail->IsHTML(true);
    if(!$mail->Send()) {
      $return_array['admin_status'] = 'false';
      $return_array['admin_msg'] = "Problem in Sending Mail.";
    } else {
      $return_array['admin_status'] = 'true';
      $return_array['admin_msg'] = "Mail Sent Successfully.";
    }
  } catch (Exception $e) {
    $return_array['admin_status'] = 'false';
    $return_array['admin_msg'] = "Problem in Sending Mail.";
  }
  $return_array['url'] = "thank-you.php";
  echo json_encode($return_array);
?>
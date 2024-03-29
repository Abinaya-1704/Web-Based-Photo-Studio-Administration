<?php
	include('Db.php');

    $Id = "";
    foreach($_POST as $name => $content){
    $Id = $name;
    }
	//$Id = array_keys($_POST)[0];

		$query = mysql_query("Select EMailID ,CustomerName From BookingTable Where BookingID = '". $Id ."'",$con);
		$tomail='';
		$custname='';
		if ($r = mysql_fetch_array($query))
		{
			 $tomail=$r['EMailID'] ;
			 $custname=$r['CustomerName'] ;
		}
		
		//echo $tomail;
		//return;
			$qry="Update BookingTable Set Status = 'APPROVED' Where BookingID = '". $Id ."' ";
	mysql_query($qry,$con) or die(mysql_error());
		mysql_close($con);
		
	//send mail coding
	//----mail logic
		     require 'PHPMailer/PHPMailerAutoload.php';

      $mail = new PHPMailer;

      //$mail->SMTPDebug = 3;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP

      $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true));
  
  
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Mailer = "smtp";
		
		$mail->SMTPDebug  = 1;  
		$mail->SMTPAuth   = TRUE;
		$mail->SMTPSecure = "tls";
		$mail->Port       = 587;
		$mail->Host       = "smtp.gmail.com";
		$mail->Username   = "softpromstest@gmail.com";
		$mail->Password   = "jfsztdlvdklbbfsn";
		$mail->IsHTML(true);
		//echo $tomail;
		//return;
		$mail->AddAddress($tomail,$custname); //toaddress , recipient name
		$mail->SetFrom("softpromstest@gmail.com", "Photostudio Administrator");
		//$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
		//$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
		$mail->Subject = "Photo Order Approval Status";
		//$content = "<b> Your House Construction Request Accepted. Our Admin will Contact you shortly.</b>";
		$mail->MsgHTML("Your Booking with Reference no. " . $Id  . " is Approved."); 
		if(!$mail->Send()) {
			echo "Error while sending Email.";
			//var_dump($mail);
		}
		else {
				echo "Email sent successfully";
		}

		
		
		//--mail logic
						
	//send mail coding
	
header('location:ViewBooking.php');
?>
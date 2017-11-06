<?php
$field_email = $_POST['email'];

$mail_to = 'oshan.ivantha@gmail.com';
$subject = 'Message from a SLSYWC17 site visitor '.$field_email;

$body_message .= 'E-mail: '.$field_email."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
//		alert('Thank you for the message. We will contact you shortly.');
		window.location = '/sss.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
//		alert('Message failed. Please, send an email to gordon@template-help.com');
		window.location = '/rrr.html';
	</script>
<?php
}
?>
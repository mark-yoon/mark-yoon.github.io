<?
	//define the receiver of the email
	
	define('TO_NAME','Mark');
	define('TO_EMAIL','Mark.Youngho.Yoon@gmail.com');
	define('SUBJECT','Contact from your website');	
	
	define('TEMPLATE_PATH','/usr/share/nginx/html/php/template/default.php');
 
	define('SMTP_ENABLE',false); // True to enable SMTP
	define('SMTP_HOST','');
	define('SMTP_USERNAME','');
	define('SMTP_PASSWORD','');

	// Messages
	define('MSG_INVALID_NAME','Please enter your name.');
	define('MSG_INVALID_EMAIL','Please enter valid e-mail.');
	define('MSG_INVALID_MESSAGE','Please enter your message.');
	define('MSG_SEND_ERROR','Sorry, we can\'t send this message.');

?>
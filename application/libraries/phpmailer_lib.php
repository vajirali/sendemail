    <?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
    /*
     *  ======================================= 
     *  Author     : TechArise Team 
     *  License    : Protected 
     *  Email      : info@techarise.com 
     *   
     *  Dilarang merubah, mengganti dan mendistribusikan 
     *  ulang tanpa sepengetahuan Author 
     *  ======================================= 
     */
	class Phpmailer_lib{
		
		public function sendEmail($from,$from_name,$subject,$message){
			require_once APPPATH.'/third_party/phpmailer/phpmailer.php';
			require_once APPPATH.'/third_party/phpmailer/smtp.php';
			$objMail = new PHPMailer(true);
			
			// SMTP configuration
			$objMail->isSMTP();
			$objMail->Host     = SMTP_HOST;
			$objMail->SMTPAuth = SMTP_AUTH;
			$objMail->Username = SMTP_USERNAME;
			$objMail->Password = SMTP_PASSWORD;
			$objMail->SMTPSecure = SMTP_TYPE_SECURE;
			$objMail->Port     = SMTP_PORT;
			
			$objMail->setFrom($from,$from_name);
        

			// Add a recipient
			$objMail->addAddress(MAIL_TO,MAIL_TO_NAME);

			// Add cc or bcc 
		   // $objMail->addCC('cc@example.com');
			//$objMail->addBCC('bcc@example.com');

		  
			$objMail->Subject = $subject;
			
			$objMail->isHTML(true);

			// Email body content
			$objMail->Body = $message;

			// Send email
			if(!$objMail->send()){
				echo 'Mailer Error: ' . $objMail->ErrorInfo; 
				return false;
			}else{
				return true;
			}
		
			
		}
    }
    ?>
<?php

require("class.phpmailer.php");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$mesg = "<br>Email = ".$email.
	"<br>Name =".$name.
	"<br>Subject =".$subject.
	"<br> Message =".$_POST['message']
	;

					$msg=	$mesg;
					$mail = new PHPMailer();

					$mail->IsSMTP();
					$mail->Host = 'smtp.gmail.com';
					$mail->SMTPAuth = true;
					$mail->SMTPSecure = "auto";
					$mail->Port = 587;
					$mail->Username = "kraastier@gmail.com";
					$mail->Password = "zobobby2021";

					$mail->From = "kraastier@gmail.com";
					$mail->FromName = "User query";
					$mail->AddAddress('kraastier@gmail.com');

					$mail->IsHTML(true);

					$mail->Subject = $subject;
					$mail->Body = $msg;;
					//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

					if(!$mail->Send())
					{
						echo '
									<script>
										alert("Something went wrong.");
										window.location.href = "index.html";
									</script>
							';
																
					}
					else
					{
						echo '
									<script>
										alert("Your message has been sent.");
										window.location.href = "index.html";
									</script>
							';
						
					}
					
?>

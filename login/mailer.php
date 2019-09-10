<?php>require 'PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->Username = 'youremailadress@email.com';
$mail->Password = 'yourpassword';
$mail->SetFrom($mail->Username, 'Mr. Honeybee');
$mail->AddAddress('youremailadress@email.com', 'name');
$mail->CharSet = 'UTF-8';
$mail->Subject = 'ITU Honeybees';
$mail->MsgHTML('Welcome to ITU Honeybees Community <3');
if($mail->Send()) {
    echo 'Mail Sent!';
} else {
    echo 'An error occured during the launch: ' . $mail->ErrorInfo;
}
?>

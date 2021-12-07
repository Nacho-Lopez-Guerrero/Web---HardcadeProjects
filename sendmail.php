<?php
echo "SENDING MESASGE     ";
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$message = $_POST['msg'];
$headers = 'From:'. $email . "\r\n" . 'X-Mailer: PHP/' . phpversion(); // Sender's Email
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("soporte@hardcadeprojects.com", "HardcadeProjectsWebsite", $message, $headers);
echo $message;
echo $headers;
echo $email2;
print phpinfo();

echo "Your mail has been sent successfuly ! Thank you for your feedback!!!!!!!!!!!";
}
}
}
?>
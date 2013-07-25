<?php

// Contact subject
$subject ="Customer Inquiry"; 

// Details
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$message="Name: $name \n
13 Or Older: $age \n
Phone Number: $phone";

// Mail of sender
$mail_from="$email"; 

// From 
$header="from: $name <$mail_from>";

// Enter your email address
$to ='rockvilletkd@gmail.com';
$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "";
}
else {
echo "ERROR";
}
?>
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=http://rockvilletkd.com/RockvilleTKD/testing/RockvilleTKD/index.php">
</head>
<Body>
Thank you, we have received your contact information.
</body>
</html
<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "rockvilletkd@gmail.com";
    $email_subject = "Student Interest Email";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['age']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['email']) ||
        !isset($_POST['TKD']) ||
        !isset($_POST['HKD']) ||
        !isset($_POST['Seasonal']) ||
        !isset($_POST['Abacus'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['name']; // required
    $age = $_POST['age']; // required
    $phone = $_POST['phone']; // required
    $email = $_POST['email']; // required
    $TKD = $_POST['TKD']; // not required
    $HKD = $_POST['HKD']; // not required
    $Seasonal = $_POST['Seasonal']; // not required
    $Abacus = $_POST['Abacus']; // not required
    
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "13 years or older: ".clean_string($age)."\n";
    $email_message .= "Phone Number: ".clean_string($phone)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Interests: Tae Kwon Do:".clean_string($TKD)."\n";
	$email_message .= "Interests: Hap Ki Do:".clean_string($HKD)."\n";
	$email_message .= "Interests: Seasonal Camps:".clean_string($Seasonal)."\n";
	$email_message .= "Interests: Abacus:".clean_string($Abacus)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
?>
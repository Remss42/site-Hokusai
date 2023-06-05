

<?php
//get data from form  
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (!empty($email)) {
    $to = "remi.oms42@gmail.com";
    $subject = "Mail From website Video game";
    $txt = "Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@yoursite.com" . "\r\n" .
               "CC: somebodyelse@example.com";

    if (mail($to, $subject, $txt, $headers)) {
        //redirect
        header("Location:index.html");
        exit;
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Email address is required.";
}
?>

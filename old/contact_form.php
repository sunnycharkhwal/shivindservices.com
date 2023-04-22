<?php
//checking if recived a post request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ob_start();
    require_once("email_template.php");
    $body = ob_get_contents();
    ob_end_clean();
    // die($body);
    $from = "Shivind Services <shivindservices@outlook.com>";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: " . $from . "\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    //preparing email prameters
    $to = "kamalmaxlence@gmail.com";
    $subject = "New enquiry received";
    //sending email to user
    $emailSent = @mail($to, $subject, $body, $headers);
    //sending user response
    if ($emailSent)
        echo json_encode(
            array(
                'status' => 1,
                'msg' => 'Submitted successfully'
            )
        );
    else
        echo json_encode(
            array(
                'status' => 0,
                'msg' => 'Something went wrong. Please try again'
            )
        );
}
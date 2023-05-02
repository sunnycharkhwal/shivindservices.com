<?php
//checking if recived a post request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ob_start();
    require_once("email_template.php");
    $body = ob_get_contents();
    ob_end_clean();
    // die($body);
    $from = "Shiv Industrial Services <shivindservices@outlook.com>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: Shiv Industrial Services <shivindservices@outlook.com>" . "\r\n" .
        "Reply-To: shivindservices@outlook.com" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // $headers = "MIME-Version: 1.0\r\n";
    // $headers .= "From: " . $from . "\r\n";
    // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    //preparing email prameters
    $to = "sunny.charkhwal@gmail.com";
    // $to2 = "hackinghunter1995@gmail.com";
    $subject = "New enquiry";
    //sending email to user
    $emailSent = @mail($to, $subject, $body, $headers);
    @mail($to2, $subject, $body, $headers);
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
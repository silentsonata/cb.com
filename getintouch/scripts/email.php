<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $jobType = $_POST['jobType'];
    $description = $_POST['description'];

    $email_to = "chris@bernpro.com";
    $email_subject = 'Request Form';
    $email_body = "
    Name: $firstName $lastName \n
    Contact: $email \n
    Job Type: $jobType \n
    Message: $description
    ";

    mail($email_to, $email_subject, $email_body);
    header("Location: https://bernpro.com/getintouch/success.html");
?>
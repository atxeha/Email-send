<?php

require "send_email.php"; // E import nimo ang send_email.php para magamit tong function

// E define dayon ang receiver, subject ug body   
$to = "example.guiller@gmail.com";
$subject = "Test";
$body = "<h1>Hello, World!</h1><p>This is a test email.</p>";

echo sendEmail($to, $subject, $body); // Tawgon dayon ang function nga gi define didto sa send_email.php
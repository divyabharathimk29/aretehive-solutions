<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sub = $_POST['subject'];
        $msg = $_POST['massage'];
        
        $to = "divyabharathimk29@gmail.com"; // For send any message to this mail id
        $subject = "Form Submission";
        $message = "Name: ".$name."\n"."Mobile No: ".$phone."\n"."Subject: ".$sub."\n"."Message: "."\n\n".$msg;
        $headers = "From: ".$email;


        if (email($to, $subject, $message, $headers)) {
            echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
        }
        else{
            echo "Something went wrong!";
        }

    }
?>
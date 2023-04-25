<?php
if(isset($_POST['contact-us'])){


$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];


$to='sarabsharat3@gmail.com';
$subject= 'Form Submission';
$message= "NAME: ".$name."\n"."MESSAGE: "."\n\n" .$msg;

if(mail($to, $subject, $message, $headers)){
    echo "<h1> تم إرسال الرسالة </h1>";
} else {
    echo " :(حدث عطل";
}
}


<?php

$firstName= $_POST['first'];
$lastName= $_POST['last-name'];
$email= $_POST['email'];
$gender=$_POST['gender'];
$checked=$_POST['terms'];
$message=$_POST['message'];

$content= " Name: $firstName $lastName \r\n Email: $email \r\n Gender: $gender\r\n Message: $message";
$file = $firstName .'-'. $lastName .'.txt';
echo 'Message sent succesfully';
file_put_contents($file, $content) or die('Cannot wtite to file');

?>
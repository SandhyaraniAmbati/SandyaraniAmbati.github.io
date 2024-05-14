<?php
$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$from= 'From: localhost.com';
$to='sandhyarani.ambati@gmail.com';
$subject ='your enquiry';
$body = "From: $name \n E-mail: $email \n message: \n $message";
?>
<?php
	if (mail($to,$subject,$body,$from))
       {
          $name='sandhyarani';
       }


?>

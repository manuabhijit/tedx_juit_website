<?php
$to = "@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: @tedxjuit.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
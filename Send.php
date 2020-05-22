<?php
$to = "#";
$extra = "From:".$_POST['email']."\r\nReply-To: ".$_POST['email']."\r\n";
$subject = "Vzkaz od: ".$_POST['jmeno']."";
$mess = "Jméno:" .$_POST['jmeno']."\nEmail: ".$_POST['email']."\nWeb:".$_POST['web']."\nText:\n".$_POST['zprava']."";
mail($to, Subject, $mess, $extra);
?>
<html><head>
<meta http-equiv="refresh" content="0; url=index.html">
<title>Přesměrování...</title>
</head><body></body></html>
<?php
header('Content-Type: text/html; charset=utf-8');

include('/var/www/v2.getall.pl/class/mail.php');

if($_POST["email"])
{
	
		$mail = new mail('monika@tfbgroup.pl');
		$mail -> SetSubject('Kalkulator');
		$mail -> SetFrom(array($_POST["email"], $_POST["email"]));
		 
		$mail -> SetCleanBody('E-mail: '.$_POST["email"].'<BR><BR>Cena przed: '.$_POST["przed"].' zł<BR>Cena po: '.$_POST["po"].' zł');
		$mail -> Send();
		 
		 ?>
		 
		 <h2 style="color:black">Dziękujemy</h2>
		 
		 <?php 
	
}


 


?>


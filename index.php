<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
           
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
         <script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '2c388053602807ad91117bfb2f5ea9d04d409955');
</script>
		 
<body style="margin:20px;">
<title>Kalkulator GetAll</title>
<h1>Kalkulator GetAll</h1>
<h2>Wpisz wartości:</h2>
</head>


<form action="index.php" method="GET">

	<input type="text" id="name1" name="n1" placeholder="Podaj kwotę" style="width: 175px" /><br /> 
	<input type="text" id="name2" name="n2" placeholder="Podaj kwotę(ocjonalnie)" style="width: 175px"/><br />
    <input type="text" id="name3" name="n3" placeholder="Podaj kwotę(opcjonalnie)" style="width: 175px"/><br /> 
	<input type="text" id="name4" name="n4" placeholder="Podaj kwotę(opcjonalnie)" style="width: 175px"> <br /> 
	<!--<input type="submit" name="btnsum" value="Sumuj!" onclick="post();">-->
	<br><input type="submit" name="btnsum"  class="btn btn-success" value="Sumuj!" onclick="post()"; />
</form>


<?php
if (isset($_GET["btnsum"]))
{
	$a=$_GET["n1"];
	$b=$_GET["n2"];
    $c=$_GET["n3"];
	$d=$_GET["n4"];
    
	//echo "Suma: " .($a+$b);
	$sum=$a+$b+$c+$d;
    
	//$procent = $sum * 0.5;
	$wynik =$sum - $procent;
	
}

/*
 (is_numeric($a & $b)) {
} else {
 echo "Wpisz cyfry w polu!";
}
*/


if ($sum >= 1000 && $sum<=2000) {
		echo('<h3><span style="color: #cb1126; font-weight: bold">Otrzymujesz kurs za 50% ceny oraz 10% rabatu!</span></h3>');
        $sum=$a+$b+$c+$d;
        $procent = $sum * 0.1;
        $wynik =$sum - $procent;
}
    

if ($sum >= 2001 && $sum<=3000) {
		echo('<h3><span style="color: #cb1126; font-weight: bold">Otrzymujesz 1 kurs gratis i 15% rabatu!</span></h3>');
        $sum=$a+$b+$c+$d;
        $procent = $sum * 0.15;
        $wynik =$sum - $procent;
}

else if ($sum > 3000) {
		echo('<h3><span style="color: #cb1126; font-weight: bold">Otrzymujesz 2 kursy gratis i 20% rabatu!</span></h3>');
        $sum=$a+$b+$c+$d;
        $procent = $sum * 0.2;
        $wynik =$sum - $procent;
}
?>

	<h2 style="color:black">Suma przed rabatem: <?php echo $sum; ?> zł</h2>
    <h2 style="color:black"><b>Suma po rabacie: <?php echo $wynik; ?> zł</b></h2>
	
    
<?php if($wynik) { ?>	
<form method="post" action="send_mail.php">

<input type="text" id="name5" name="email" placeholder="Podaj adres email" style="width: 175px" /><br /> 
<br><input type="submit" name="wyslij"  class="btn btn-info" value="Wyślij do zatwierdzenia!"  />

<input type=hidden name="przed" value="<?php echo $sum; ?>">
<input type=hidden name="po" value="<?php echo $wynik; ?>">

</form>
<?php } ?>

</html>
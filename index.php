
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Erdübergagswiederstand</title>
<!--<meta name="viewport" content="initial-scale=1.0, width=device-width" />-->
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="Erdübergagswiederstand" />
		<meta name="mobile-web-app-title" content="Erdübergagswiederstand" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
		<meta name="apple-mobile-web-app-status-bar-style" content="grey"/>
		<meta name="mobile-web-app-status-bar-style" content="grey"/>
		<meta name="apple-touch-fullscreen" content="yes" />
		<meta name="format-detection" content="telephone=no"/>

<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	color: #000;
}
body {
	/*background-color: #E3E3E3;*/
	background-color: #FFF;
	/*background: url(backgrounds/bg-03.jpg) no-repeat center center fixed;*/
	-webkit-background-size: cover; /* For WebKit*/
	-moz-background-size: cover;    /* Mozilla*/
	-o-background-size: cover;      /* Opera*/
	background-size: cover;         /* Generic*/
}
h1 {
    font-size: 28pt;
	color:#F00;
    text-shadow: 3px 3px 3px black;
}
</style>
</head>
<body>
	<h1>Berechnen des Erdübergags-<br>wiederstand</h1>
	<h2>Feststellen des Erdungspunktes</h2>
	<img src="../messpunkte.png" width="300" height="340" alt="Messpunkte">
	</br></br></br>
	
			<form action="index.php" method="get">
 
			<p>Messpunkt A - B (in Ohm):
			<input type="text" name="ab">
			</p>
			<p>Messpunkt A - C (in Ohm):
			<input type="text" name="ac">
			</p>
			<p>Messpunkt B - C (in Ohm):
			<input type="text" name="bc">
			</p>
			<p>
			<input type="submit" value="Berechnen" style="height:70px; width:250px; font-size:30px; background-color:#F60">
			</p>
 
			</form>
	</body>
</html>	
	
<?php
	
	
$ab = $_GET['ab'];
$ac = $_GET['ac'];
$bc = $_GET['bc'];
$gesergebnis;
$zeildurchzwei;

	$gesergebnis = $ab + $ac + $bc;
	$zeildurchzwei = $gesergebnis / 2;
	/*echo $gesergebnis;
	echo $zeildurchzwei;*/
$a = $zeildurchzwei - $ab;
$b = $zeildurchzwei - $ac;
$c = $zeildurchzwei - $bc;

echo "Ergebnis Messstrecke A-B: ". $a." Ohm<br>"; 
echo "Ergebnis Messstrecke A-C: ". $b." Ohm<br>";
echo "Ergebnis Messstrecke B-C: ". $c." Ohm<br><br>";

$val = min($a, $b, $c);
if ($val == $a)
	echo "<h2>Erdung ist an Messpunkt A durchzuführen! ". $a." Ohm</h2>";
else if ($val == $b)
	echo "<h2>Erdung ist an Messpunkt B durchzuführen! ". $b." Ohm</h2>";
else if ($val == $c)
	echo "<h2>Erdung ist an Messpunkt C durchzuführen! ". $c." Ohm</h2>";

?>
	

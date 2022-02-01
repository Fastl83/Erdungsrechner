<?php
	
	
$ab = $_GET['ab'];
$ac = $_GET['ac'];
$bc = $_GET['bc'];
$gesergebnis;
$zeildurchzwei;

	$gesergebnis = $ab + $ac + $bc;
	$zeildurchzwei = $gesergebnis / 2;
	
$a = $zeildurchzwei - $ab;
$b = $zeildurchzwei - $ac;
$c = $zeildurchzwei - $bc;

echo "ab=". $ab;
echo "ab=". $_GET['ac'];
echo "ab=". $_GET['bc'];


?>

<input type="button" neme="zuruck" value="Zurück"<a href="#" onclick="history.back();"></a>
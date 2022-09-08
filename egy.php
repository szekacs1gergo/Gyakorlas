<h1>Első php oldalam:)<h1>

<?php
	if(isset($_GET['a'])) $a = $_GET['a']; else $a=1;
	if(isset($_GET['b'])) $b = $_GET['b']; else $b=1;
	print "
	$a+$b = ".($a+$b). "<br>
	$a-$b = ".($a-$b)."<br>
	$a*$b=".$a*$b . "<br>
	$a/$b = ". round($a/$b,14) . "<br>
	";
	
	print "haha";
	
?>

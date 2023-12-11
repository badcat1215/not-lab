<?php

echo "Enumeration Lab";
echo "</br>";
echo "We are the Baroque Works.";
echo "</br>";
echo "try harder to reveal our secret.";
echo "</br>";
echo "</br>";

$ans = 'flag{ENum0ne-fLAg}';

if (isset($_POST['flag'])) {
	if ($_POST['flag'] == $ans) {
		echo "Correct Flag!" ;
		echo "</br>";
	} else {
		echo "Wrong Flag~~~ Try Harder!" ;
		echo "</br>";
	}	
}

?>

<h2>Submit Flag</h2>
<form action="" method="POST">
	<input type="text" name="flag">
	<input type="submit">
</form>

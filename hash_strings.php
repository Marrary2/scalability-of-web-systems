<?php

if (isset($_GET["string"]) && !empty($_GET["string"])) {
	$string =  $_GET["string"];
	echo "String to hash: <b>", $string, "</b>";
	echo "<br>";
	$hashes = hash_algos();
	foreach($hashes as $hashf) {
		$h = $hashf;
		echo $h, "<br>";
		echo hash($h, $string);
		echo "<p>";

	}
}


?>
<html>
<body>
<form action="hash_strings.php" mehtod="GET">Some string to hash:
<p>
	<input type="text" name="string"/>

<p>

	<input type="submit" />
</form>
</body>
</html>

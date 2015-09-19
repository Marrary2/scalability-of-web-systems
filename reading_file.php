<?php
 
$file = '../files/secretfile.txt';

if(is_file($file) && is_readable($file)) {

	$f = fopen($file, 'r');

	while (!feof($f)) {
		$line = fgets($f, 1000);
		echo $line;
	}

fclose($f);

} else {
	echo "Error";
}

?>

<h1>Prime numbers 1-10000</h1>
<?php
	function isPrime($n) {
		$k = 2;
		while($k * $k <= $n && $n % $k != 0) { $k++; }
		return $n >= 2 && $k * $k > $n;
	}

	for ($i = 0; $i < 10000; $i++) {
		if(isPrime($i)) {
			echo $i;
			echo '<br>';
		}
	}
?>
